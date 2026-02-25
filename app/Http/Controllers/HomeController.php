<?php

namespace TheFramework\Http\Controllers;

use Exception;
use TheFramework\App\Config;
use TheFramework\App\View;
use TheFramework\Helpers\Helper;
use TheFramework\Http\Requests\BookingRequest;
use TheFramework\Http\Requests\ContactRequest;
use TheFramework\Http\Requests\TestimonialRequest;
use TheFramework\Models\Car;
use TheFramework\Models\CarGallery;
use TheFramework\Models\Gallery;
use TheFramework\Models\Testimonial;

class HomeController extends Controller
{
    private Gallery $gallery;
    private Car $car;
    private CarGallery $carGallery;
    private Testimonial $testimonial;

    public function __construct()
    {
        $this->gallery = new Gallery();
        $this->car = new Car();
        $this->carGallery = new CarGallery();
        $this->testimonial = new Testimonial();
    }



    public function Beranda()
    {
        $notification = Helper::get_flash('notification');

        return View::render('interface.home', [
            'title' => 'Beranda | Darma Sakti Travel - Jasa Travel Terbaik di Bandung',
            'notification' => $notification,

            'cars' => $this->car::all(),
            'testimonials' => $this->testimonial::query()
                ->orderBy('created_at', 'DESC')
                ->limit(10)
                ->get()
        ]);
    }

    public function Booking(BookingRequest $bookingRequest)
    {
        try {
            $request = $bookingRequest->validated();

            $config = Config::get('BASE_URL');
            $model = $this->car::query()
                ->select([
                    'uid',
                    'merk_mobil',
                    'nama_mobil',
                    'slug_mobil'
                ])
                ->where('uid', '=', $request['model'])
                ->first();

            $message = "Booking Mobil\n\n"
                . "Nama Pemesan: {$request['nama']}\n"
                . "Model Mobil: {$model['merk_mobil']} | {$model['nama_mobil']}\n"
                . "Lokasi Jemput: {$request['lokasi']}\n"
                . "Tujuan: {$request['tujuan']}\n"
                . "Tanggal: {$request['tanggalAwal']} s/d {$request['tanggalAkhir']}\n"
                . "Jam Booking: {$request['jamBooking']}\n\n"
                . "Terima kasih Darma Sakti Travel.\n\n\n"
                . "{$config}/list-mobil/{$model['slug_mobil']}/{$model['uid']}";

            $encodedMessage = urlencode($message);
            $phone = "628122346660";
            $link = "https://wa.me/$phone?text=$encodedMessage";

            return header('Location: ' . $link);

        } catch (Exception $e) {
            return Helper::redirect('/', 'error', 'error: ' . $e->getMessage(), 5);
        }
    }

    public function Tentang()
    {
        $notification = Helper::get_flash('notification');

        return View::render('interface.about', [
            'title' => 'Tentang | Darma Sakti Travel - Jasa Travel Terbaik di Bandung',
            'notification' => $notification,

            'cars' => $this->car::query()->limit(4)->get(),
        ]);
    }

    public function ListMobil()
    {
        $notification = Helper::get_flash('notification');

        return View::render('interface.car-list', [
            'title' => 'List Mobil | Darma Sakti Travel - Jasa Travel Terbaik di Bandung',
            'notification' => $notification,

            'cars' => $this->car::all()
        ]);
    }

    public function DetailMobil($slug_mobil, $uid)
    {
        $notification = Helper::get_flash('notification');

        $car = $this->car::query()
            ->where('slug_mobil', '=', $slug_mobil)
            ->where('uid', '=', $uid)
            ->first();

        if (!$car) {
            return Helper::redirectToNotFound();
        }

        $allGalleryCar = $this->carGallery::query()
            ->where('uid_mobil', '=', $uid)
            ->get();

        $testimonials = $this->testimonial::query()
            ->orderBy('created_at', 'DESC')
            ->get();

        // Return view with separate car object and gallery array
        return View::render('interface.car-detail', [
            'title' => $car['merk_mobil'] . ' ' . $car['nama_mobil'] . ' | Darma Sakti Travel - Jasa Travel Terbaik di Bandung',
            'notification' => $notification,
            'car' => $car,
            'allGalleryCar' => $allGalleryCar,
            'testimonials' => $testimonials,
        ]);
    }

    public function submitTestimonial(TestimonialRequest $testimonialRequest)
    {
        $url = $_POST['redirect_url'];
        try {
            $request = $testimonialRequest->validated();

            if (!$this->testimonial::insert($request)) {
                return Helper::redirect($url, 'error', 'Testimoni gagal dikirim.', 5);
            }

            return Helper::redirect($url, 'success', 'Testimoni berhasil dikirim.', 5);
        } catch (Exception $e) {
            return Helper::redirect($url, 'error', 'Error: ' . $e->getMessage(), 5);
        }
    }

    public function Galeri($halaman = 1)
    {
        $notification = Helper::get_flash('notification');

        return View::render('interface.gallery', [
            'title' => 'Galeri | Darma Sakti Travel - Jasa Travel Terbaik di Bandung',
            'notification' => $notification,

            'galleries' => $this->gallery::paginate(10, $halaman)
        ]);
    }

    public function Kontak()
    {
        $notification = Helper::get_flash('notification');

        return View::render('interface.contact', [
            'title' => 'Kontak | Darma Sakti Travel - Jasa Travel Terbaik di Bandung',
            'notification' => $notification,
        ]);
    }

    public function sendMessage(ContactRequest $contactRequest)
    {
        try {
            $request = $contactRequest->validated();

            $message = "Pesan Baru\n\n"
                . "Nama: {$request['name']}\n"
                . "No. HP: {$request['phone']}\n"
                . "Subjek: {$request['subject']}\n"
                . "Pesan: {$request['message']}\n\n"
                . "Terima kasih Darma Sakti Travel.";

            $encodedMessage = urlencode($message);
            $phone = "628122346660";
            $link = "https://wa.me/$phone?text=$encodedMessage";

            return header('Location: ' . $link);

        } catch (Exception $e) {
            return Helper::redirect('/kontak', 'error', 'Error: ' . $e->getMessage(), 5);
        }
    }

    public function TermsAndCondition()
    {
        $notification = Helper::get_flash('notification');

        return View::render('interface.terms-and-condition', [
            'title' => 'Term and Condition | Darma Sakti Travel - Jasa Travel Terbaik di Bandung',
            'notification' => $notification,
        ]);
    }

    public function Faq()
    {
        $notification = Helper::get_flash('notification');

        return View::render('interface.faq', [
            'title' => 'FAQ | Darma Sakti Travel - Jasa Travel Terbaik di Bandung',
            'notification' => $notification,
        ]);
    }

    public function OpsiPembayaran()
    {
        $notification = Helper::get_flash('notification');

        return View::render('interface.opsi-pembayaran', [
            'title' => 'Opsi Pembayaran | Darma Sakti Travel - Jasa Travel Terbaik di Bandung',
            'notification' => $notification,
        ]);
    }

    public function TipsBooking()
    {
        $notification = Helper::get_flash('notification');

        return View::render('interface.tips-booking', [
            'title' => 'Tips Booking | Darma Sakti Travel - Jasa Travel Terbaik di Bandung',
            'notification' => $notification,
        ]);
    }
}
