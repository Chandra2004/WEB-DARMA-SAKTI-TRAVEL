<?php

namespace Database\Seeders;

use Faker\Factory;
use TheFramework\Database\Seeder;
use TheFramework\Helpers\Helper;

class Seeder_2026_01_30_130513_CarsSeeder extends Seeder
{

    public function run()
    {
        $faker = Factory::create();
        Seeder::setTable('cars');

        $data = [
            [
                'uid' => Helper::uuid(),
                'photo' => '06-Toyota-HiAce-Premio.jpg',
                'nama_mobil' => 'Hiace Premio Luxury',
                'slug_mobil' => Helper::slugify('Toyota HiAce Premio Luxury'),
                'merk_mobil' => 'Toyota',
                'transmisi_mobil' => '-',
                'kursi_mobil' => '8',
                'bagasi_mobil' => '4',
                'deskripsi_mobil' => '
                    <p><strong>Toyota HiAce Premio Luxury</strong> adalah evolusi dari konsep kendaraan komersial. Berbeda dengan seri Commuter, Premio hadir dengan desain <em>Semi-Bonnet</em> (hidung depan) yang menempatkan mesin di depan, bukan di bawah kursi pengemudi.</p>
                    <p><strong>Dampak Desain Baru:</strong></p>
                    <ul>
                        <li><strong>Kenyamanan Akustik:</strong> Suara mesin jauh lebih senyap, tidak bising di dalam kabin.</li>
                        <li><strong>Safety Lebih Baik:</strong> Zona crumple zone di depan memberikan perlindungan ekstra bagi pengemudi dan penumpang depan.</li>
                        <li><strong>Ride Quality:</strong> Stabilitas berkendara yang jauh lebih baik, terasa seperti menaiki MPV besar daripada sebuah microbus.</li>
                    </ul>
                    <p>Bagian interior dirancang lebih luas dan modern, menjadikannya pilihan premium untuk travel antar kota, antar jemput tamu VIP, atau wisata eksklusif di Bandung dan sekitarnya.</p>',
            ],
            [
                'uid' => Helper::uuid(),
                'photo' => '01-Toyota-HiAce-Commuter-Putih.jpg',
                'nama_mobil' => 'Hiace Commuter',
                'slug_mobil' => Helper::slugify('Toyota HiAce Commuter'),
                'merk_mobil' => 'Toyota',
                'transmisi_mobil' => '-',
                'kursi_mobil' => '13-15',
                'bagasi_mobil' => '4',
                'deskripsi_mobil' => '
                    <p><strong>Toyota HiAce Commuter</strong> adalah pilihan utama bagi Anda yang membutuhkan kendaraan tangguh dan andal untuk perjalanan rombongan. Mobil ini dirancang khusus untuk memprioritaskan kapasitas tanpa mengorbankan kenyamanan penumpang.</p>
                    <p>Warna putih memberikan kesan bersih, netral, dan profesional, sangat cocok digunakan untuk berbagai keperluan seperti:</p>
                    <ul>
                        <li>Wisata keluarga besar atau rombongan sekolah.</li>
                        <li>Sewa kendaraan operasional kantor.</li>
                        <li>Layanan antar-jemput bandara (Shuttle).</li>
                    </ul>
                    <p><strong>Fitur Unggulan:</strong></p>
                    <ul>
                        <li><strong>Kapasitas Luas:</strong> Mampu menampung hingga 13 sampai 15 penumpang dengan legroom yang cukup lega.</li>
                        <li><strong>Kenyamanan Kabin:</strong> Dilengkapi dengan AC double blower yang memastikan udara dingin merata hingga ke baris belakang.</li>
                        <li><strong>Mesin Tangguh:</strong> Didukung mesin diesel Toyota yang sudah teruji ketangguhannya di berbagai medan jalan, baik tanjakan maupun perjalanan jarak jauh.</li>
                    </ul>
                    <p>Nikmati perjalanan yang aman dan nyaman bersama HiAce Commuter, solusi transportasi masal yang efisien.</p>',
            ],
            [
                'uid' => Helper::uuid(),
                'photo' => '03-Toyota-Innova-Reborn.jpg',
                'nama_mobil' => 'Innova Reborn',
                'slug_mobil' => Helper::slugify('Toyota Innova Reborn'),
                'merk_mobil' => 'Toyota',
                'transmisi_mobil' => '-',
                'kursi_mobil' => '5-6',
                'bagasi_mobil' => '2',
                'deskripsi_mobil' => '
                    <p><strong>Toyota Innova Reborn</strong> merupakan definisi sesungguhnya dari MPV keluarga Indonesia. Unit ini menawarkan keseimbangan sempurna antara performa mesin yang responsif dan kenyamanan kabin kelas atas.</p>
                    <p>Dengan transmisi manual, pengemudi memiliki kontrol penuh terhadap tenaga mesin, membuatnya sangat handal untuk menaklukkan rute-rute menantang seperti jalanan pegunungan di Lembang atau Ciwidey.</p>
                    <p><strong>Keunggulan Utama:</strong></p>
                    <ul>
                        <li><strong>Mesin Diesel 2GD-FTV:</strong> Terkenal sangat bertenaga, torsi melimpah, namun tetap irit bahan bakar.</li>
                        <li><strong>Kabin Luas & Mewah:</strong> Ruang kaki yang lega di baris kedua dan ketiga, serta fitur <em>Ambience Light</em> yang memberikan nuansa rileks.</li>
                        <li><strong>Suspensi Stabil:</strong> Minim limbung saat bermanuver, menjadikan perjalanan jauh tidak mudah melelahkan.</li>
                    </ul>
                    <p>Cocok untuk sewa harian dalam kota maupun perjalanan dinas luar kota yang membutuhkan ketepatan waktu dan performa prima.</p>',
            ],
            [
                'uid' => Helper::uuid(),
                'photo' => '09-Isuzu-Elf.jpg',
                'nama_mobil' => 'Isuzu Elf Long',
                'slug_mobil' => Helper::slugify('Isuzu Elf Long'),
                'merk_mobil' => 'Isuzu',
                'transmisi_mobil' => '-',
                'kursi_mobil' => '18-19',
                'bagasi_mobil' => '5',
                'deskripsi_mobil' => '
                    <p>Ketika kapasitas adalah prioritas utama, <strong>Isuzu Elf Long Chassis</strong> adalah rajanya. Dengan sasis yang lebih panjang, unit ini mampu mengakomodasi hingga 19 orang penumpang beserta bagasi dengan leluasa.</p>
                    <p><strong>Keunggulan Isuzu Elf:</strong></p>
                    <ul>
                        <li><strong>Mesin Bandel:</strong> Terkenal dengan durabilitas tinggi dan kuat menanjak di medan berat sekalipun.</li>
                        <li><strong>Efisiensi Biaya:</strong> Dengan kapasitas angkut besar, biaya per penumpang menjadi sangat ekonomis. Solusi hemat untuk rombongan besar.</li>
                        <li><strong>AC Ducting:</strong> Sistem pendingin udara yang disalurkan ke setiap baris kursi, memastikan kesejukan merata hingga ke belakang.</li>
                    </ul>
                    <p>Pilihan terbaik untuk rombongan wisata sekolah, ziarah, kunjungan industri, atau gathering karyawan yang membutuhkan daya angkut maksimal dalam satu kendaraan.</p>',
            ],
            /*
            [
                'uid' => Helper::uuid(),
                'photo' => '02-Toyota-HiAce-Commuter-Hitam.jpg',
                'nama_mobil' => 'HiAce Commuter Hitam',
                'slug_mobil' => Helper::slugify('Toyota HiAce Commuter Hitam'),
                'merk_mobil' => 'Toyota',
                'transmisi_mobil' => 'Manual',
                'kursi_mobil' => '15',
                'bagasi_mobil' => '4',
                'deskripsi_mobil' => '
                    <p>Hadir dengan nuansa yang lebih eksklusif, <strong>Toyota HiAce Commuter Hitam</strong> menawarkan kombinasi antara fungsionalitas dan elegansi. Warna hitam pada unit ini memberikan kesan premium, menjadikannya pilihan favorit untuk kebutuhan yang menuntut citra lebih berkelas.</p>
                    <p><strong>Sangat Direkomendasikan Untuk:</strong></p>
                    <ol>
                        <li><strong>Perjalanan Bisnis (Corporate Trip):</strong> Memberikan impresi profesional saat menjemput klien atau rekan bisnis.</li>
                        <li><strong>Acara VIP:</strong> Transportasi pendukung untuk tamu undangan penting di acara pernikahan atau event khusus.</li>
                        <li><strong>Wisata Premium:</strong> Liburan keluarga dengan gaya yang lebih elegan.</li>
                    </ol>
                    <p>Secara spesifikasi, unit ini tetap membawa keunggulan seri Commuter:</p>
                    <ul>
                        <li>Suspensi yang didesain untuk meredam guncangan dengan baik meski dalam kondisi muatan penuh.</li>
                        <li>Sistem keselamatan standar Toyota termasuk sabuk pengaman di setiap kursi.</li>
                        <li>Ruang kabin yang senyap untuk menjaga privasi dan kenyamanan percakapan selama perjalanan.</li>
                    </ul>',
            ],
            [
                'uid' => Helper::uuid(),
                'photo' => '04-Toyota-Innova-Reborn.jpg',
                'nama_mobil' => 'Innova Reborn AT',
                'slug_mobil' => Helper::slugify('Toyota Innova Reborn AT'),
                'merk_mobil' => 'Toyota',
                'transmisi_mobil' => 'Otomatis',
                'kursi_mobil' => '7',
                'bagasi_mobil' => '2',
                'deskripsi_mobil' => '
                    <p>Bagi Anda yang mengutamakan kemudahan dan kehalusan berkendara, <strong>Toyota Innova Reborn Automatic (AT)</strong> adalah jawabannya. Transmisi otomatis 6-percepatan dengan teknologi <em>Sport Sequential Switchmatic</em> memberikan perpindahan gigi yang sangat halus dan responsif.</p>
                    <p>Sangat ideal untuk:</p>
                    <ul>
                        <li><strong>City Tour Bandung:</strong> Menikmati kemacetan kota tanpa rasa lelah mengoper gigi.</li>
                        <li><strong>Perjalanan Santai:</strong> Membawa keluarga berlibur dengan kenyamanan maksimal.</li>
                        <li><strong>Penggunaan Pribadi:</strong> Memberikan pengalaman menyetir yang effortless.</li>
                    </ul>
                    <p>Dilengkapi dengan fitur <strong>Eco Mode</strong> untuk efisiensi bahan bakar dan <strong>Power Mode</strong> saat Anda membutuhkan akselerasi instan untuk menyalip. Kabin yang kedap suara memastikan Anda bisa menikmati musik atau berbincang dengan nyaman sepanjang perjalanan.</p>',
            ],
            [
                'uid' => Helper::uuid(),
                'photo' => '05-Toyota-Innova-Reborn.jpg',
                'nama_mobil' => 'Innova Reborn Hybrid',
                'slug_mobil' => Helper::slugify('Toyota Innova Reborn Hybrid'),
                'merk_mobil' => 'Toyota',
                'transmisi_mobil' => 'Hybrid',
                'kursi_mobil' => '7',
                'bagasi_mobil' => '2',
                'deskripsi_mobil' => '
                    <p>Rasakan masa depan transportasi dengan <strong>Toyota Innova Zenix Hybrid</strong>. Mobil ini menggabungkan mesin bensin efisien dengan motor listrik bertenaga baterai, menghasilkan performa yang luar biasa namun sangat ramah lingkungan.</p>
                    <p><strong>Kenapa Memilih Hybrid?</strong></p>
                    <ul>
                        <li><strong>Hening & Halus:</strong> Saat berjalan dalam kecepatan rendah atau <em>EV Mode</em>, kabin nyaris tanpa suara.</li>
                        <li><strong>Sangat Irit:</strong> Konsumsi bahan bakar yang jauh lebih efisien dibandingkan varian konvensional, cocok untuk perjalanan jauh.</li>
                        <li><strong>Torsi Instan:</strong> Bantuan motor listrik memberikan akselerasi spontan tanpa jeda.</li>
                    </ul>
                    <p>Dilengkapi dengan <em>Captain Seat</em> (pada tipe tertentu) dan <em>Panoramic Sunroof</em>, unit ini menawarkan pengalaman perjalanan yang tidak hanya nyaman tapi juga mewah dan prestisius. Pilihan tepat bagi Anda yang ingin mencoba teknologi otomotif terkini.</p>',
            ],
            
            [
                'uid' => Helper::uuid(),
                'photo' => '07-Toyota-HiAce-Premio.jpg',
                'nama_mobil' => 'HiAce Premio Elite',
                'slug_mobil' => Helper::slugify('Toyota HiAce Premio Elite'),
                'merk_mobil' => 'Toyota',
                'transmisi_mobil' => 'Otomatis',
                'kursi_mobil' => '14',
                'bagasi_mobil' => '4',
                'deskripsi_mobil' => '
                    <p>Menduduki kasta tertinggi di lini microbus kami, <strong>HiAce Premio Elite</strong> menawarkan kenyamanan tanpa kompromi. Varian transmisi otomatis ini memastikan perpindahan tenaga yang halus sehingga penumpang tidak akan merasakan hentakan saat akselerasi.</p>
                    <p><strong>Fitur & Fasilitas:</strong></p>
                    <ul>
                        <li><strong>Interior Premium:</strong> Kursi yang lebih ergonomis dengan balutan material berkualitas tinggi.</li>
                        <li><strong>Suspensi Lembut:</strong> Dirancang ulang untuk memberikan kenyamanan maksimal layaknya sedan mewah.</li>
                        <li><strong>Hiburan Lengkap:</strong> Sistem audio video terintegrasi untuk menemani perjalanan panjang Anda.</li>
                    </ul>
                    <p>Sangat direkomendasikan untuk menjamu tamu kenegaraan, direksi perusahaan, atau artis yang membutuhkan privasi dan kenyamanan tingkat tinggi selama berada di perjalanan.</p>',
            ],
            [
                'uid' => Helper::uuid(),
                'photo' => '08-Toyota-HiAce-Premio.jpg',
                'nama_mobil' => 'HiAce Premio Hybrid',
                'slug_mobil' => Helper::slugify('Toyota HiAce Premio Hybrid'),
                'merk_mobil' => 'Toyota',
                'transmisi_mobil' => 'Hybrid',
                'kursi_mobil' => '14',
                'bagasi_mobil' => '4',
                'deskripsi_mobil' => '
                    <p>Inovasi terbaru dalam dunia transportasi grup, <strong>HiAce Premio Hybrid</strong> (Unit Spesial/Konsep). Menggabungkan kenyamanan mewah Premio dengan efisiensi energi.</p>
                    <p>Varian ini menawarkan solusi transportasi hijau (Green Transport) bagi perusahaan atau grup yang peduli terhadap jejak karbon.</p>
                    <ul>
                        <li>Emisi gas buang yang lebih rendah.</li>
                        <li>Kabin yang super senyap menambah kualitas istirahat penumpang selama perjalanan.</li>
                        <li>Teknologi keamanan canggih khas Toyota Safety Sense (TSS).</li>
                    </ul>
                    <p>Pilihan cerdas untuk perjalanan jarak jauh yang hemat energi namun tetap mengutamakan gengsi dan kenyamanan nomor satu.</p>',
            ],
            */
        ];

        Seeder::create($data);
    }
}
