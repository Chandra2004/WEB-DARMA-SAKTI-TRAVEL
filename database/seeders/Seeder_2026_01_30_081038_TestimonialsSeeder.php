<?php

namespace Database\Seeders;

use Faker\Factory;
use TheFramework\Database\Seeder;
use TheFramework\Helpers\Helper;

class Seeder_2026_01_30_081038_TestimonialsSeeder extends Seeder
{

    public function run()
    {
        $faker = Factory::create();
        Seeder::setTable('testimonials');


        $data = [];
        $indoTestimonials = [
            [
                'nama' => 'Budi Santoso',
                'posisi' => 'Wiraswasta',
                'rating' => 5,
                'deskripsi' => 'Pelayanan sangat memuaskan, driver ramah dan mobil bersih. Perjalanan bisnis saya jadi lancar berkat Darma Sakti Travel.'
            ],
            [
                'nama' => 'Siti Aminah',
                'posisi' => 'Ibu Rumah Tangga',
                'rating' => 5,
                'deskripsi' => 'Liburan keluarga jadi sangat menyenangkan. Mobil Hiace-nya nyaman banget buat bawa anak-anak. Terima kasih!'
            ],
            [
                'nama' => 'Andi Pratama',
                'posisi' => 'Marketing Manager',
                'rating' => 4,
                'deskripsi' => 'Respon admin cepat, proses booking mudah. Driver tepat waktu. Sedikit saran mungkin pilihan musik di mobil bisa lebih variatif hehe. Overall oke!'
            ],
            [
                'nama' => 'Dewi Lestari',
                'posisi' => 'Dosen',
                'rating' => 5,
                'deskripsi' => 'Sangat profesional. Saya sewa Innova Reborn untuk tamu dari luar kota, mereka sangat terkesan dengan kenyamanan dan kebersihan mobilnya.'
            ],
            [
                'nama' => 'Rahmat Hidayat',
                'posisi' => 'Event Organizer',
                'rating' => 5,
                'deskripsi' => 'Sudah langganan sewa Elf Long di sini untuk crew EO. Gak pernah kecewa, unit selalu prima dan AC dingin.'
            ],
            [
                'nama' => 'Putri Indah',
                'posisi' => 'Mahasiswi',
                'rating' => 4,
                'deskripsi' => 'Harga mahasiswa banget tapi kualitasnya premium. Drivernya asik diajak ngobrol sepanjang perjalanan Bandung-Jakarta.'
            ],
            [
                'nama' => 'Hendro Wibowo',
                'posisi' => 'PNS',
                'rating' => 5,
                'deskripsi' => 'Perjalanan dinas aman dan nyaman. Driver menguasai medan jalan dengan baik. Sangat recommended untuk perjalanan jauh.'
            ],
            [
                'nama' => 'Rina Marlina',
                'posisi' => 'Pengusaha Katering',
                'rating' => 5,
                'deskripsi' => 'Mobilnya luas, muat banyak barang belanjaan katering. Driver juga mau bantu angkat-angkat. Top banget servicenya.'
            ],
            [
                'nama' => 'Eko Prasetyo',
                'posisi' => 'Fotografer',
                'rating' => 4,
                'deskripsi' => 'Unit bersih, cocok buat bawa klien VIP. Sayang kemarin booking agak mepet jadi pilihan warna terbatas, tapi untung admin gercep carikan solusi.'
            ],
            [
                'nama' => 'Tia Kusuma',
                'posisi' => 'Dokter',
                'rating' => 5,
                'deskripsi' => 'Sangat membantu di saat darurat butuh kendaraan cepat. Armada standby dan kondisi sangat terawat. Terima kasih Darma Sakti.'
            ],
            [
                'nama' => 'Fajar Nugraha',
                'posisi' => 'Content Creator',
                'rating' => 5,
                'deskripsi' => 'Buat konten trip seru banget pake unit dari sini. Drivernya kooperatif banget pas kita minta berhenti buat ambil footage pemandangan.'
            ],
            [
                'nama' => 'Lina Sastrowardoyo',
                'posisi' => 'Arsitek',
                'rating' => 5,
                'deskripsi' => 'Desain interior mobilnya (Hiace Luxury) mewah, klien saya suka. Perjalanan site visit jadi tidak melelahkan.'
            ],
            [
                'nama' => 'Agus Setiawan',
                'posisi' => 'Guru',
                'rating' => 4,
                'deskripsi' => 'Sewa bus medium untuk study tour sekolah. Anak-anak senang, fasilitas karaoke di bus berfungsi baik. Driver sabar menghadapi anak-anak.'
            ],
            [
                'nama' => 'Maya Putri',
                'posisi' => 'Travel Blogger',
                'rating' => 5,
                'deskripsi' => 'Salah satu rental mobil terbaik di Bandung yang pernah saya coba. Unit terbaru semua, wangi, dan driver berlisensi resmi.'
            ],
            [
                'nama' => 'Doni Irawan',
                'posisi' => 'IT Consultant',
                'rating' => 5,
                'deskripsi' => 'Booking online gampang, UI websitenya user friendly. Konfirmasi via WA juga cepat. Unit Innova Zenix-nya mantap!'
            ]
        ];

        $data = [];
        foreach ($indoTestimonials as $testi) {
            $data[] = [
                'uid' => Helper::uuid(),
                'nama_testimoni' => $testi['nama'],
                'posisi_testimoni' => $testi['posisi'],
                'rating_testimoni' => $testi['rating'],
                'deskripsi_testimoni' => $testi['deskripsi'],
            ];
        }

        Seeder::create($data);
    }
}
