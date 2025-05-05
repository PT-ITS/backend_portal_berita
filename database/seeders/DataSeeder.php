<?php

namespace Database\Seeders;

use App\Models\Beranda;
use App\Models\CaraOrder;
use App\Models\Faq;
use App\Models\Harga;
use App\Models\Info;
use App\Models\Keunggulan;
use App\Models\Kontak;
use App\Models\Layanan;
use App\Models\Manfaat;
use App\Models\SyaratKetentuan;
use App\Models\SyaratKetentuan2;
use App\Models\TentangKami;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;

class DataSeeder extends Seeder
{
    public function run()
    {
        // Beranda
        // Beranda::create([
        //     'header' => 'Jasa Press Release Murah',
        //     'isi' => '<p>Tingkatkan reputasi bisnis kamu dengan Jasa Press Release Murah dari kami! Dapatkan kesempatan untuk melakukan publikasi media online secara masif yang akan membantu meningkatkan brand awareness kamu.</p>',
        //     'footer' => 'Garansi 100% Berita Tayang',
        //     'created_at' => Carbon::create(2024, 12, 3, 12, 0, 0), // Format: (year, month, day, hour, minute, second)
        //     'updated_at' => Carbon::create(2024, 12, 3, 12, 0, 0) // Format: (year, month, day, hour, minute, second)
        // ]);

        // Info
        Info::create([
            'header' => 'Inilah yang Wajib Anda Tahu',
            'isi' => '<p>Menggunakan press release sebagai alat untuk menyebarkan informasi ke berbagai platform media online masih menjadi tolak ukur dalam membangun opini publik sekaligus sebagai sarana penyebaran informasi yang cepat karena tidak terbatas oleh ruang dan waktu.</p><p>Dengan menggunakan jasa press release murah, penyebaran informasi ke berbagai media online akan menjadi lebih terukur. Selain itu, potensi pembaca media online bisa mencapai ratusan ribu hingga jutaan per bulan.</p><p>Melalui jasa press release, perusahaan berkesempatan membangun opini publik dengan tujuan menyampaikan informasi penting kepada masyarakat melalui pemberitaan yang bernilai.</p>',
            'created_at' => Carbon::create(2024, 12, 3, 12, 0, 0), // Format: (year, month, day, hour, minute, second)
            'updated_at' => Carbon::create(2024, 12, 3, 12, 0, 0) // Format: (year, month, day, hour, minute, second)
        ]);

        // Manfaat
        Manfaat::create([
            'header' => 'Social Proof yang Kuat',
            'isi' => '<p>Press release tidak sekadar prestise. Aktivitas publikasi dapat dijadikan kendaraan tercepat dalam membangun kepercayaan publik terhadap bisnis perusahaan karena status bisnis yang pernah diberitakan di media online.</p>',
            'created_at' => Carbon::create(2024, 12, 3, 12, 0, 0), // Format: (year, month, day, hour, minute, second)
            'updated_at' => Carbon::create(2024, 12, 3, 12, 0, 0) // Format: (year, month, day, hour, minute, second)
        ]);
        Manfaat::create([
            'header' => 'Visibilitas Optimal',
            'isi' => '<p>Distribusi aktivitas press release yang berkelanjutan dapat membantu meningkatkan eksposur bisnis secara signifikan.</p>',
            'created_at' => Carbon::create(2024, 12, 3, 12, 0, 0), // Format: (year, month, day, hour, minute, second)
            'updated_at' => Carbon::create(2024, 12, 3, 12, 0, 0) // Format: (year, month, day, hour, minute, second)
        ]);
        Manfaat::create([
            'header' => 'Harga Lebih Terjangkau',
            'isi' => '<p>Membangun otoritas melalui aktivitas publikasi menggunakan jasa press release murah adalah strategi pemasaran terbaik dibandingkan strategi pemasaran lainnya.</p>',
            'created_at' => Carbon::create(2024, 12, 3, 12, 0, 0), // Format: (year, month, day, hour, minute, second)
            'updated_at' => Carbon::create(2024, 12, 3, 12, 0, 0) // Format: (year, month, day, hour, minute, second)
        ]);

        // Keunggulan
        Keunggulan::create([
            'header' => 'Harga Transparan',
            'isi' => '<p>Kami bekerja sama dengan media nasional ternama dan menyediakan informasi harga dari masing-masing media.</p>',
            'created_at' => Carbon::create(2024, 12, 3, 12, 0, 0), // Format: (year, month, day, hour, minute, second)
            'updated_at' => Carbon::create(2024, 12, 3, 12, 0, 0) // Format: (year, month, day, hour, minute, second)
        ]);
        Keunggulan::create([
            'header' => 'Transaksi Aman',
            'isi' => '<p>Kami bertanggung jawab penuh kepada klien yang telah mengirimkan dana untuk keperluan publikasi di media online nasional.</p>',
            'created_at' => Carbon::create(2024, 12, 3, 12, 0, 0), // Format: (year, month, day, hour, minute, second)
            'updated_at' => Carbon::create(2024, 12, 3, 12, 0, 0) // Format: (year, month, day, hour, minute, second)
        ]);
        Keunggulan::create([
            'header' => 'Termasuk Artikel',
            'isi' => '<p>Kami memastikan bahwa setiap layanan jasa press release murah sudah dilengkapi dengan artikel minimal 500 kata, yang dikemas sesuai dengan gaya masing-masing media.</p>',
            'created_at' => Carbon::create(2024, 12, 3, 12, 0, 0), // Format: (year, month, day, hour, minute, second)
            'updated_at' => Carbon::create(2024, 12, 3, 12, 0, 0) // Format: (year, month, day, hour, minute, second)
        ]);
        Keunggulan::create([
            'header' => 'Kualitas Terbaik',
            'isi' => '<p>Setiap media online dalam daftar kami rata-rata sudah terafiliasi dengan Google News. Dampaknya, pemberitaan tentang bisnis Anda mudah dicari melalui mesin pencari seperti Google.</p>',
            'created_at' => Carbon::create(2024, 12, 3, 12, 0, 0), // Format: (year, month, day, hour, minute, second)
            'updated_at' => Carbon::create(2024, 12, 3, 12, 0, 0) // Format: (year, month, day, hour, minute, second)
        ]);
        Keunggulan::create([
            'header' => 'Bebas Menentukan Media Online',
            'isi' => '<p>Pengguna layanan jasa press release media online bebas menentukan media untuk keperluan publikasi artikel sesuai dengan anggaran yang dimiliki.</p>',
            'created_at' => Carbon::create(2024, 12, 3, 12, 0, 0), // Format: (year, month, day, hour, minute, second)
            'updated_at' => Carbon::create(2024, 12, 3, 12, 0, 0) // Format: (year, month, day, hour, minute, second)
        ]);
        Keunggulan::create([
            'header' => 'Proses Publikasi Cepat',
            'isi' => '<p>Setiap media online dalam daftar kami rata-rata sudah terafiliasi dengan Google News. Dampaknya, pemberitaan tentang bisnis Anda mudah dicari melalui mesin pencari seperti Google.</p>',
            'created_at' => Carbon::create(2024, 12, 3, 12, 0, 0), // Format: (year, month, day, hour, minute, second)
            'updated_at' => Carbon::create(2024, 12, 3, 12, 0, 0) // Format: (year, month, day, hour, minute, second)
        ]);

        // Tentang Kami
        TentangKami::create([
            'header' => 'Tentang Kyu Media',
            'isi' => '<p>Kyu Media merupakan perusahaan media agensi yang melayani strategi pengelolaan konten artikel dan audio visual untuk mendorong pertumbuhan bisnis melalui pengelolaan media sosial, optimasi SEO, backlink media nasional, pembuatan website, media monitoring, strategi media, dan layanan konten berkualitas.</p>',
            'visi' => '<p>Menjadi digital agency terkemuka yang membantu bisnis berkembang melalui solusi digital inovatif dan berbasis hasil.</p>',
            'misi' => '<ol><li data-list="bullet"><span class="ql-ui" contenteditable="false"></span>Memberikan solusi pemasaran digital yang efektif dan terukur untuk setiap klien.</li><li data-list="bullet"><span class="ql-ui" contenteditable="false"></span>Menggabungkan teknologi terbaru dengan kreativitas untuk menghasilkan kampanye yang berdampak.</li><li data-list="bullet"><span class="ql-ui" contenteditable="false"></span>Meningkatkan pengalaman digital pelanggan klien untuk mendorong pertumbuhan dan loyalitas.</li><li data-list="bullet"><span class="ql-ui" contenteditable="false"></span>Membangun hubungan jangka panjang dengan klien melalui transparansi, komunikasi yang efektif, dan hasil yang nyata.</li></ol>',
            'nilai_perusahaan' => '<ol><li data-list="bullet"><span class="ql-ui" contenteditable="false"></span>Kreativitas &amp; Inovasi: Mengutamakan ide-ide segar dan inovasi dalam setiap proyek digital.</li><li data-list="bullet"><span class="ql-ui" contenteditable="false"></span>Orientasi Hasil: Berfokus pada pencapaian tujuan bisnis klien melalui strategi yang tepat dan data-driven.</li><li data-list="bullet"><span class="ql-ui" contenteditable="false"></span>Kolaborasi &amp; Transparansi: Menjaga komunikasi terbuka dan bekerja sama dengan klien sebagai mitra untuk mencapai kesuksesan bersama.</li><li data-list="bullet"><span class="ql-ui" contenteditable="false"></span>Adaptabilitas: Selalu tanggap terhadap tren digital terbaru dan kebutuhan pasar yang dinamis.</li></ol>',
            'project_complete' => '13K',
            'happy_client' => '12K',
            'awards_winning' => '49+',
            'success_rate' => '98%',
            'created_at' => Carbon::create(2024, 12, 3, 12, 0, 0), // Format: (year, month, day, hour, minute, second)
            'updated_at' => Carbon::create(2024, 12, 3, 12, 0, 0) // Format: (year, month, day, hour, minute, second)
        ]);

        // Harga
        Harga::create([
            'nama_paket' => 'Starter A',
            'isi_paket' => '<ol><li data-list="bullet"><span class="ql-ui" contenteditable="false"></span>5 Media</li><li data-list="bullet"><span class="ql-ui" contenteditable="false"></span>Bebas Pilih Media Kelas A</li><li data-list="bullet"><span class="ql-ui" contenteditable="false"></span>Gratis Pembuatan 1 Artikel</li><li data-list="bullet"><span class="ql-ui" contenteditable="false"></span>Garansi Terbit Ulang Berita</li><li data-list="bullet"><span class="ql-ui" contenteditable="false"></span>Berita Terbit Permanen</li><li data-list="bullet"><span class="ql-ui" contenteditable="false"></span>Bonus Tambahan 200ribu</li><li data-list="bullet"><span class="ql-ui" contenteditable="false"></span>Jaminan 99% Terbit</li><li data-list="bullet"><span class="ql-ui" contenteditable="false"></span>Garansi Ganti Media</li></ol>',
            'harga' => '4.000.000',
            'created_at' => Carbon::create(2024, 12, 3, 12, 0, 0), // Format: (year, month, day, hour, minute, second)
            'updated_at' => Carbon::create(2024, 12, 3, 12, 0, 0) // Format: (year, month, day, hour, minute, second)
        ]);
        Harga::create([
            'nama_paket' => 'Reguler A',
            'isi_paket' => '<ol><li data-list="bullet"><span class="ql-ui" contenteditable="false"></span>10 Media</li><li data-list="bullet"><span class="ql-ui" contenteditable="false"></span>Bebas Pilih Media Kelas A</li><li data-list="bullet"><span class="ql-ui" contenteditable="false"></span>Gratis Pembuatan 1 Artikel</li><li data-list="bullet"><span class="ql-ui" contenteditable="false"></span>Garansi Terbit Ulang Berita</li><li data-list="bullet"><span class="ql-ui" contenteditable="false"></span>Berita Terbit Permanen</li><li data-list="bullet"><span class="ql-ui" contenteditable="false"></span>Bonus Tambahan 200ribu</li><li data-list="bullet"><span class="ql-ui" contenteditable="false"></span>Jaminan 99% Terbit</li><li data-list="bullet"><span class="ql-ui" contenteditable="false"></span>Garansi Ganti Media</li></ol>',
            'harga' => '8.000.000',
            'created_at' => Carbon::create(2024, 12, 3, 12, 0, 0), // Format: (year, month, day, hour, minute, second)
            'updated_at' => Carbon::create(2024, 12, 3, 12, 0, 0) // Format: (year, month, day, hour, minute, second)
        ]);
        Harga::create([
            'nama_paket' => 'Premium A',
            'isi_paket' => '<ol><li data-list="bullet"><span class="ql-ui" contenteditable="false"></span>15 Media</li><li data-list="bullet"><span class="ql-ui" contenteditable="false"></span>Bebas Pilih Media Kelas A</li><li data-list="bullet"><span class="ql-ui" contenteditable="false"></span>Gratis Pembuatan 1 Artikel</li><li data-list="bullet"><span class="ql-ui" contenteditable="false"></span>Garansi Terbit Ulang Berita</li><li data-list="bullet"><span class="ql-ui" contenteditable="false"></span>Berita Terbit Permanen</li><li data-list="bullet"><span class="ql-ui" contenteditable="false"></span>Bonus Tambahan 200ribu</li><li data-list="bullet"><span class="ql-ui" contenteditable="false"></span>Jaminan 99% Terbit</li><li data-list="bullet"><span class="ql-ui" contenteditable="false"></span>Garansi Ganti Media</li></ol>',
            'harga' => '10.000.000',
            'created_at' => Carbon::create(2024, 12, 3, 12, 0, 0), // Format: (year, month, day, hour, minute, second)
            'updated_at' => Carbon::create(2024, 12, 3, 12, 0, 0) // Format: (year, month, day, hour, minute, second)
        ]);
        Harga::create([
            'nama_paket' => 'Advance A',
            'isi_paket' => '<ol><li data-list="bullet"><span class="ql-ui" contenteditable="false"></span>20 Media</li><li data-list="bullet"><span class="ql-ui" contenteditable="false"></span>Bebas Pilih Media Kelas A</li><li data-list="bullet"><span class="ql-ui" contenteditable="false"></span>Gratis Pembuatan 1 Artikel</li><li data-list="bullet"><span class="ql-ui" contenteditable="false"></span>Garansi Terbit Ulang Berita</li><li data-list="bullet"><span class="ql-ui" contenteditable="false"></span>Berita Terbit Permanen</li><li data-list="bullet"><span class="ql-ui" contenteditable="false"></span>Bonus Tambahan 200ribu</li><li data-list="bullet"><span class="ql-ui" contenteditable="false"></span>Jaminan 99% Terbit</li><li data-list="bullet"><span class="ql-ui" contenteditable="false"></span>Garansi Ganti Media</li></ol>',
            'harga' => '15.000.000',
            'created_at' => Carbon::create(2024, 12, 3, 12, 0, 0), // Format: (year, month, day, hour, minute, second)
            'updated_at' => Carbon::create(2024, 12, 3, 12, 0, 0) // Format: (year, month, day, hour, minute, second)
        ]);
        Harga::create([
            'nama_paket' => 'Starter B',
            'isi_paket' => '<ol><li data-list="bullet"><span class="ql-ui" contenteditable="false"></span>5 Media</li><li data-list="bullet"><span class="ql-ui" contenteditable="false"></span>Bebas Pilih Media Kelas B</li><li data-list="bullet"><span class="ql-ui" contenteditable="false"></span>Gratis Pembuatan 1 Artikel</li><li data-list="bullet"><span class="ql-ui" contenteditable="false"></span>Garansi Terbit Ulang Berita</li><li data-list="bullet"><span class="ql-ui" contenteditable="false"></span>Berita Terbit Permanen</li><li data-list="bullet"><span class="ql-ui" contenteditable="false"></span>Bonus Tambahan 200ribu</li><li data-list="bullet"><span class="ql-ui" contenteditable="false"></span>Jaminan 99% Terbit</li><li data-list="bullet"><span class="ql-ui" contenteditable="false"></span>Garansi Ganti Media</li></ol>',
            'harga' => '3.500.000',
            'created_at' => Carbon::create(2024, 12, 3, 12, 0, 0), // Format: (year, month, day, hour, minute, second)
            'updated_at' => Carbon::create(2024, 12, 3, 12, 0, 0) // Format: (year, month, day, hour, minute, second)
        ]);
        Harga::create([
            'nama_paket' => 'Reguler B',
            'isi_paket' => '<ol><li data-list="bullet"><span class="ql-ui" contenteditable="false"></span>10 Media</li><li data-list="bullet"><span class="ql-ui" contenteditable="false"></span>Bebas Pilih Media Kelas B</li><li data-list="bullet"><span class="ql-ui" contenteditable="false"></span>Gratis Pembuatan 1 Artikel</li><li data-list="bullet"><span class="ql-ui" contenteditable="false"></span>Garansi Terbit Ulang Berita</li><li data-list="bullet"><span class="ql-ui" contenteditable="false"></span>Berita Terbit Permanen</li><li data-list="bullet"><span class="ql-ui" contenteditable="false"></span>Bonus Tambahan 200ribu</li><li data-list="bullet"><span class="ql-ui" contenteditable="false"></span>Jaminan 99% Terbit</li><li data-list="bullet"><span class="ql-ui" contenteditable="false"></span>Garansi Ganti Media</li></ol>',
            'harga' => '6.500.000',
            'created_at' => Carbon::create(2024, 12, 3, 12, 0, 0), // Format: (year, month, day, hour, minute, second)
            'updated_at' => Carbon::create(2024, 12, 3, 12, 0, 0) // Format: (year, month, day, hour, minute, second)
        ]);
        Harga::create([
            'nama_paket' => 'Premium B',
            'isi_paket' => '<ol><li data-list="bullet"><span class="ql-ui" contenteditable="false"></span>15 Media</li><li data-list="bullet"><span class="ql-ui" contenteditable="false"></span>Bebas Pilih Media Kelas B</li><li data-list="bullet"><span class="ql-ui" contenteditable="false"></span>Gratis Pembuatan 1 Artikel</li><li data-list="bullet"><span class="ql-ui" contenteditable="false"></span>Garansi Terbit Ulang Berita</li><li data-list="bullet"><span class="ql-ui" contenteditable="false"></span>Berita Terbit Permanen</li><li data-list="bullet"><span class="ql-ui" contenteditable="false"></span>Bonus Tambahan 200ribu</li><li data-list="bullet"><span class="ql-ui" contenteditable="false"></span>Jaminan 99% Terbit</li><li data-list="bullet"><span class="ql-ui" contenteditable="false"></span>Garansi Ganti Media</li></ol>',
            'harga' => '8.500.000',
            'created_at' => Carbon::create(2024, 12, 3, 12, 0, 0), // Format: (year, month, day, hour, minute, second)
            'updated_at' => Carbon::create(2024, 12, 3, 12, 0, 0) // Format: (year, month, day, hour, minute, second)
        ]);
        Harga::create([
            'nama_paket' => 'Advance B',
            'isi_paket' => '<ol><li data-list="bullet"><span class="ql-ui" contenteditable="false"></span>20 Media</li><li data-list="bullet"><span class="ql-ui" contenteditable="false"></span>Bebas Pilih Media Kelas B</li><li data-list="bullet"><span class="ql-ui" contenteditable="false"></span>Gratis Pembuatan 1 Artikel</li><li data-list="bullet"><span class="ql-ui" contenteditable="false"></span>Garansi Terbit Ulang Berita</li><li data-list="bullet"><span class="ql-ui" contenteditable="false"></span>Berita Terbit Permanen</li><li data-list="bullet"><span class="ql-ui" contenteditable="false"></span>Bonus Tambahan 200ribu</li><li data-list="bullet"><span class="ql-ui" contenteditable="false"></span>Jaminan 99% Terbit</li><li data-list="bullet"><span class="ql-ui" contenteditable="false"></span>Garansi Ganti Media</li></ol>',
            'harga' => '12.500.000',
            'created_at' => Carbon::create(2024, 12, 3, 12, 0, 0), // Format: (year, month, day, hour, minute, second)
            'updated_at' => Carbon::create(2024, 12, 3, 12, 0, 0) // Format: (year, month, day, hour, minute, second)
        ]);
        Harga::create([
            'nama_paket' => 'Premium Daerah',
            'isi_paket' => '<ol><li data-list="bullet"><span class="ql-ui" contenteditable="false"></span>10 Media</li><li data-list="bullet"><span class="ql-ui" contenteditable="false"></span>Bebas Pilih Media Daerah</li><li data-list="bullet"><span class="ql-ui" contenteditable="false"></span>Gratis Pembuatan 1 Artikel</li><li data-list="bullet"><span class="ql-ui" contenteditable="false"></span>Garansi Terbit Ulang Berita</li><li data-list="bullet"><span class="ql-ui" contenteditable="false"></span>Berita Terbit Permanen</li><li data-list="bullet"><span class="ql-ui" contenteditable="false"></span>Bonus Tambahan 200ribu</li><li data-list="bullet"><span class="ql-ui" contenteditable="false"></span>Jaminan 99% Terbit</li><li data-list="bullet"><span class="ql-ui" contenteditable="false"></span>Garansi Ganti Media</li></ol>',
            'harga' => '4.500.000',
            'created_at' => Carbon::create(2024, 12, 3, 12, 0, 0), // Format: (year, month, day, hour, minute, second)
            'updated_at' => Carbon::create(2024, 12, 3, 12, 0, 0) // Format: (year, month, day, hour, minute, second)
        ]);
        Harga::create([
            'nama_paket' => 'Advance Daerah',
            'isi_paket' => '<ol><li data-list="bullet"><span class="ql-ui" contenteditable="false"></span>15 Media</li><li data-list="bullet"><span class="ql-ui" contenteditable="false"></span>Bebas Pilih Media Daerah</li><li data-list="bullet"><span class="ql-ui" contenteditable="false"></span>Gratis Pembuatan 1 Artikel</li><li data-list="bullet"><span class="ql-ui" contenteditable="false"></span>Garansi Terbit Ulang Berita</li><li data-list="bullet"><span class="ql-ui" contenteditable="false"></span>Berita Terbit Permanen</li><li data-list="bullet"><span class="ql-ui" contenteditable="false"></span>Bonus Tambahan 200ribu</li><li data-list="bullet"><span class="ql-ui" contenteditable="false"></span>Jaminan 99% Terbit</li><li data-list="bullet"><span class="ql-ui" contenteditable="false"></span>Garansi Ganti Media</li></ol>',
            'harga' => '7.500.000',
            'created_at' => Carbon::create(2024, 12, 3, 12, 0, 0), // Format: (year, month, day, hour, minute, second)
            'updated_at' => Carbon::create(2024, 12, 3, 12, 0, 0) // Format: (year, month, day, hour, minute, second)
        ]);
        Harga::create([
            'nama_paket' => 'Premium Woman',
            'isi_paket' => '<ol><li data-list="bullet"><span class="ql-ui" contenteditable="false"></span>10 Media</li><li data-list="bullet"><span class="ql-ui" contenteditable="false"></span>Bebas Pilih Media Daerah</li><li data-list="bullet"><span class="ql-ui" contenteditable="false"></span>Gratis Pembuatan 1 Artikel</li><li data-list="bullet"><span class="ql-ui" contenteditable="false"></span>Garansi Terbit Ulang Berita</li><li data-list="bullet"><span class="ql-ui" contenteditable="false"></span>Berita Terbit Permanen</li><li data-list="bullet"><span class="ql-ui" contenteditable="false"></span>Bonus Tambahan 200ribu</li><li data-list="bullet"><span class="ql-ui" contenteditable="false"></span>Jaminan 99% Terbit</li><li data-list="bullet"><span class="ql-ui" contenteditable="false"></span>Garansi Ganti Media</li></ol>',
            'harga' => '8.500.000',
            'created_at' => Carbon::create(2024, 12, 3, 12, 0, 0), // Format: (year, month, day, hour, minute, second)
            'updated_at' => Carbon::create(2024, 12, 3, 12, 0, 0) // Format: (year, month, day, hour, minute, second)
        ]);
        Harga::create([
            'nama_paket' => 'Advance Woman',
            'isi_paket' => '<ol><li data-list="bullet"><span class="ql-ui" contenteditable="false"></span>20 Media</li><li data-list="bullet"><span class="ql-ui" contenteditable="false"></span>Bebas Pilih Media Daerah</li><li data-list="bullet"><span class="ql-ui" contenteditable="false"></span>Gratis Pembuatan 1 Artikel</li><li data-list="bullet"><span class="ql-ui" contenteditable="false"></span>Garansi Terbit Ulang Berita</li><li data-list="bullet"><span class="ql-ui" contenteditable="false"></span>Berita Terbit Permanen</li><li data-list="bullet"><span class="ql-ui" contenteditable="false"></span>Bonus Tambahan 200ribu</li><li data-list="bullet"><span class="ql-ui" contenteditable="false"></span>Jaminan 99% Terbit</li><li data-list="bullet"><span class="ql-ui" contenteditable="false"></span>Garansi Ganti Media</li></ol>',
            'harga' => '17.000.000',
            'created_at' => Carbon::create(2024, 12, 3, 12, 0, 0), // Format: (year, month, day, hour, minute, second)
            'updated_at' => Carbon::create(2024, 12, 3, 12, 0, 0) // Format: (year, month, day, hour, minute, second)
        ]);

        // Syarat dan Ketentuan
        SyaratKetentuan::create([
            'syarat' => 'Naskah dapat diedit.',
            'created_at' => Carbon::create(2024, 12, 3, 12, 0, 0), // Format: (year, month, day, hour, minute, second)
            'updated_at' => Carbon::create(2024, 12, 3, 12, 0, 0) // Format: (year, month, day, hour, minute, second)
        ]);
        SyaratKetentuan::create([
            'syarat' => 'Pemesanan minimal untuk 5 media.',
            'created_at' => Carbon::create(2024, 12, 3, 12, 0, 0), // Format: (year, month, day, hour, minute, second)
            'updated_at' => Carbon::create(2024, 12, 3, 12, 0, 0) // Format: (year, month, day, hour, minute, second)
        ]);
        SyaratKetentuan::create([
            'syarat' => 'Pembayaran dilakukan di muka.',
            'created_at' => Carbon::create(2024, 12, 3, 12, 0, 0), // Format: (year, month, day, hour, minute, second)
            'updated_at' => Carbon::create(2024, 12, 3, 12, 0, 0) // Format: (year, month, day, hour, minute, second)
        ]);
        SyaratKetentuan::create([
            'syarat' => 'Waktu pengerjaan maksimal 3 hari.',
            'created_at' => Carbon::create(2024, 12, 3, 12, 0, 0), // Format: (year, month, day, hour, minute, second)
            'updated_at' => Carbon::create(2024, 12, 3, 12, 0, 0) // Format: (year, month, day, hour, minute, second)
        ]);
        SyaratKetentuan::create([
            'syarat' => 'Bonus tambahan berlaku untuk pesanan ke-3, 4, 5, dan seterusnya.',
            'created_at' => Carbon::create(2024, 12, 3, 12, 0, 0), // Format: (year, month, day, hour, minute, second)
            'updated_at' => Carbon::create(2024, 12, 3, 12, 0, 0) // Format: (year, month, day, hour, minute, second)
        ]);
        SyaratKetentuan::create([
            'syarat' => 'Garansi penerbitan ulang jika hasil publikasi tidak sesuai dengan perjanjian awal.',
            'created_at' => Carbon::create(2024, 12, 3, 12, 0, 0), // Format: (year, month, day, hour, minute, second)
            'updated_at' => Carbon::create(2024, 12, 3, 12, 0, 0) // Format: (year, month, day, hour, minute, second)
        ]);
        SyaratKetentuan::create([
            'syarat' => 'Press release yang sudah terbit tidak dapat diedit kecuali ada kesalahan penulisan nama, gelar, alamat, tanggal, atau typo.',
            'created_at' => Carbon::create(2024, 12, 3, 12, 0, 0), // Format: (year, month, day, hour, minute, second)
            'updated_at' => Carbon::create(2024, 12, 3, 12, 0, 0) // Format: (year, month, day, hour, minute, second)
        ]);
        SyaratKetentuan::create([
            'syarat' => 'Harga publikasi media massa di atas sudah nett, bebas memilih media nasional ternama kelas A.',
            'created_at' => Carbon::create(2024, 12, 3, 12, 0, 0), // Format: (year, month, day, hour, minute, second)
            'updated_at' => Carbon::create(2024, 12, 3, 12, 0, 0) // Format: (year, month, day, hour, minute, second)
        ]);
        SyaratKetentuan::create([
            'syarat' => 'Layanan distribusi press release tidak digunakan untuk iklan hard-selling. Untuk kebutuhan iklan penuh, gunakan layanan advertorial.',
            'created_at' => Carbon::create(2024, 12, 3, 12, 0, 0), // Format: (year, month, day, hour, minute, second)
            'updated_at' => Carbon::create(2024, 12, 3, 12, 0, 0) // Format: (year, month, day, hour, minute, second)
        ]);
        SyaratKetentuan::create([
            'syarat' => 'Layanan press release tidak dapat memberikan hyperlink/backlink. Untuk backlink media, gunakan layanan backlink media.',
            'created_at' => Carbon::create(2024, 12, 3, 12, 0, 0), // Format: (year, month, day, hour, minute, second)
            'updated_at' => Carbon::create(2024, 12, 3, 12, 0, 0) // Format: (year, month, day, hour, minute, second)
        ]);
        SyaratKetentuan::create([
            'syarat' => 'Harga sudah termasuk pajak.',
            'created_at' => Carbon::create(2024, 12, 3, 12, 0, 0), // Format: (year, month, day, hour, minute, second)
            'updated_at' => Carbon::create(2024, 12, 3, 12, 0, 0) // Format: (year, month, day, hour, minute, second)
        ]);

        // Syarat dan Ketentuan 2
        SyaratKetentuan2::create([
            'header' => 'Pastikan Membaca Syarat dan Ketentuan Layanan',
            'isi' => '<p>Dengan menggunakan layanan Jasa Press Release Murah di kyumedia.com artinya klien MENYETUJUI dengan Syarat dan Ketentuan yang berlaku pada halaman ini.</p>',
            'created_at' => Carbon::create(2024, 12, 3, 12, 0, 0), // Format: (year, month, day, hour, minute, second)
            'updated_at' => Carbon::create(2024, 12, 3, 12, 0, 0) // Format: (year, month, day, hour, minute, second)
        ]);
        SyaratKetentuan2::create([
            'header' => 'Poin 1: Order Layanan',
            'isi' => '<ol><li data-list="ordered"><span class="ql-ui" contenteditable="false"></span>Pemesanan Layanan yang ada di Kyu Media bisa langsung menghubungi kontak WhatsApp kami.</li><li data-list="ordered"><span class="ql-ui" contenteditable="false"></span>Klien diwajibkan mengisi data yang diperlukan agar pesanan dapat diproses.</li><li data-list="ordered"><span class="ql-ui" contenteditable="false"></span>Tim Kyu Media akan segera membalas pesan atau menghubungi klien pada jam kerja</li></ol>',
            'created_at' => Carbon::create(2024, 12, 3, 12, 0, 0), // Format: (year, month, day, hour, minute, second)
            'updated_at' => Carbon::create(2024, 12, 3, 12, 0, 0) // Format: (year, month, day, hour, minute, second)
        ]);
        SyaratKetentuan2::create([
            'header' => 'Poin 2: Bahan Konten (Press Release dan Backlink Media Nasional)',
            'isi' => '<ol><li data-list="ordered"><span class="ql-ui" contenteditable="false"></span>Diperbolehkan bagi klien telah memberi draft press release yang ditulis sendiri. Namun, apabila klien ingin dibuatkan draft press release, kami akan menulis sesuai brief dan persetujuan sebelumnya.</li><li data-list="ordered"><span class="ql-ui" contenteditable="false"></span>Penting untuk diperhatikan, apabila draft press release belum sesuai kriteria media, maka Tim Kyu Media akan melakukan penyuntingan tanpa menghilangkan substansi konten, karena setiap media berbeda di setiap konten.</li><li data-list="ordered"><span class="ql-ui" contenteditable="false"></span>Jika klien belum memiliki draft artikel, Tim Kyu Media dapat membantu membuatkan konten release dengan penambahan biaya.</li><li data-list="ordered"><span class="ql-ui" contenteditable="false"></span>Untuk diketahui, seluruh draft artikel wajib disetujui klien sebelum Tim mengirimkan ke meja redaksi.</li><li data-list="ordered"><span class="ql-ui" contenteditable="false"></span>Perlu diketahui pula bahwa, draft artikel yang kami kirimkan ke redaksi yang bersangkutan sifatnya rekomendasi. Jadi, jika terjadi perubahan pada saat tayang, maka itu sudah menjadi kebijakan media. </li><li data-list="ordered"><span class="ql-ui" contenteditable="false"></span>Perubahan setelah tayang / terbit hanya dapat dilakukan ketika keluar dari substansi konten seperti keliru pada penyebutan nama, Alamat, nama brand perusahaan, kekeliruan penulisan gelar akademik, hingga salah ketik (typo).</li></ol>',
            'created_at' => Carbon::create(2024, 12, 3, 12, 0, 0), // Format: (year, month, day, hour, minute, second)
            'updated_at' => Carbon::create(2024, 12, 3, 12, 0, 0) // Format: (year, month, day, hour, minute, second)
        ]);
        SyaratKetentuan2::create([
            'header' => 'Poin 3: Pembayaran',
            'isi' => '<ol><li data-list="ordered"><span class="ql-ui" contenteditable="false"></span>Adapun pembayaran layanan jasa press release murah dapat dilakukan setelah Tim Kyu Media kami mengirimkan nota penagihan (invoice).</li><li data-list="ordered"><span class="ql-ui" contenteditable="false"></span>Berikutnya, klien dapat melakukan pembayaran pada nomor rekening yang tertera pada invoice.</li><li data-list="ordered"><span class="ql-ui" contenteditable="false"></span>Pembayaran dilakukan 100% di awal untuk kerja sama yang tidak bersifat kontrak</li><li data-list="ordered"><span class="ql-ui" contenteditable="false"></span>Apabila Klien telah membayar, klien wajib memberikan bukti transfer melalui kontak WhatsApp Kyu Media.</li><li data-list="ordered"><span class="ql-ui" contenteditable="false"></span>Kyu Media tidak menerima pembayaran dengan sistem down payment (DP) untuk pembelian press release satuan.</li><li data-list="ordered"><span class="ql-ui" contenteditable="false"></span>Kyu Media menerima pembayaran sistem termin untuk penggunaan layanan yang bersifat kontrak.</li></ol>',
            'created_at' => Carbon::create(2024, 12, 3, 12, 0, 0), // Format: (year, month, day, hour, minute, second)
            'updated_at' => Carbon::create(2024, 12, 3, 12, 0, 0) // Format: (year, month, day, hour, minute, second)
        ]);
        SyaratKetentuan2::create([
            'header' => 'Poin 4: Penerbitan',
            'isi' => '<ol><li data-list="ordered"><span class="ql-ui" contenteditable="false"></span>Estimasi penayangan konten artikel bisa lebih cepat atau lebih lambat sesuai antrian di tiap-tiap media.</li><li data-list="ordered"><span class="ql-ui" contenteditable="false"></span>Jika ada penayang pada estimasi tadi, Tim kami mengonfirmasi secepat mungkin terkait waktu penayangan</li><li data-list="ordered"><span class="ql-ui" contenteditable="false"></span>Penting untuk digarisbawahi, draft press release yang dikirimkan ke meja redaksi sifatnya tetap rekomendasi. Kebijakan penerbitan sepenuhnya ada di pihak media.</li><li data-list="ordered"><span class="ql-ui" contenteditable="false"></span>Hak media penerbit, yaitu mengubah, menambah, mengurangi bagian dari draft press release, baik itu judul, gambar dan isi konten sesuai kebijakan dan karakter media yang berlaku</li><li data-list="ordered"><span class="ql-ui" contenteditable="false"></span>Draft press release yang sudah ditayangkan tidak dapat direvisi kecuali jika ada kesalahan fatal berupa: salah penyebutan nama, alamat, data kontak, nama brand Perusahaan, kekeliruan penulisan gelar akademik, hingga typo.</li></ol>',
            'created_at' => Carbon::create(2024, 12, 3, 12, 0, 0), // Format: (year, month, day, hour, minute, second)
            'updated_at' => Carbon::create(2024, 12, 3, 12, 0, 0) // Format: (year, month, day, hour, minute, second)
        ]);
        SyaratKetentuan2::create([
            'header' => 'Poin 5: Jenis Topik yang Diterima',
            'isi' => '<p>Kami bisa membantu proses release dengan berbagai topik, kecuali:</p><ol><li data-list="ordered"><span class="ql-ui" contenteditable="false"></span>Perjudian &amp; Casino</li><li data-list="ordered"><span class="ql-ui" contenteditable="false"></span>Bahan Peledak</li><li data-list="ordered"><span class="ql-ui" contenteditable="false"></span>Senjata</li><li data-list="ordered"><span class="ql-ui" contenteditable="false"></span>Provokasi Kebencian</li><li data-list="ordered"><span class="ql-ui" contenteditable="false"></span>Obat-obatan dan makanan yang belum terdaftar di BPOM</li><li data-list="ordered"><span class="ql-ui" contenteditable="false"></span>SARA</li><li data-list="ordered"><span class="ql-ui" contenteditable="false"></span>Masalah Hukum (Sengketa)</li></ol>',
            'created_at' => Carbon::create(2024, 12, 3, 12, 0, 0), // Format: (year, month, day, hour, minute, second)
            'updated_at' => Carbon::create(2024, 12, 3, 12, 0, 0) // Format: (year, month, day, hour, minute, second)
        ]);
        SyaratKetentuan2::create([
            'header' => 'Poin 6: Sifat Press Release',
            'isi' => '<ol><li data-list="ordered"><span class="ql-ui" contenteditable="false"></span>Layanan press release di Kyu Media sifatnya publikasi dengan gaya pemberitaan ke media online, bukan promosi maupun hal-hal yang bersifat penjualan.</li><li data-list="ordered"><span class="ql-ui" contenteditable="false"></span>Peran Kyu Media menjembatani antara klien dengan media online, sehingga gaya, karakter dan kebijakan konten menjadi hak media online tersebut sepenuhnya.</li><li data-list="ordered"><span class="ql-ui" contenteditable="false"></span>Apabila konten press release yang dikirimkan oleh klien dirasa kurang sesuai dengan gaya dan karakter media yang dipilih, redaksi berhak untuk merevisi dan mengubahnya sesuai kebijakan media yang berlaku.</li></ol>',
            'created_at' => Carbon::create(2024, 12, 3, 12, 0, 0), // Format: (year, month, day, hour, minute, second)
            'updated_at' => Carbon::create(2024, 12, 3, 12, 0, 0) // Format: (year, month, day, hour, minute, second)
        ]);
        SyaratKetentuan2::create([
            'header' => 'Poin 7: Penolakan Revisi',
            'isi' => '<ol><li data-list="ordered"><span class="ql-ui" contenteditable="false"></span>Kami tidak menerima revisi perubahan judul pada press release yang sudah diterbitkan.</li><li data-list="ordered"><span class="ql-ui" contenteditable="false"></span>Kami tidak menerima revisi press release apabila instruksinya di luar detail instruksi yang dikirimkan sebelum press release diterbitkan.</li><li data-list="ordered"><span class="ql-ui" contenteditable="false"></span><strong>Pengajuan revisi melebihi mempunyai tenggat waktu, yaitu 1x24 jam </strong></li></ol>',
            'created_at' => Carbon::create(2024, 12, 3, 12, 0, 0), // Format: (year, month, day, hour, minute, second)
            'updated_at' => Carbon::create(2024, 12, 3, 12, 0, 0) // Format: (year, month, day, hour, minute, second)
        ]);
        SyaratKetentuan2::create([
            'header' => 'Poin 8: Pembatalan Order & Pengembalian Dana',
            'isi' => '<ol><li data-list="ordered"><span class="ql-ui" contenteditable="false"></span>Pembatalan order hanya dapat dilakukan sebelum konten press release dikirimkan ke redaksi media yang dipilih.</li><li data-list="ordered"><span class="ql-ui" contenteditable="false"></span>Pembatalan tidak dapat dilakukan apabila konten sudah tayang di Media Nasional dengan atau tanpa alasan apapun.</li><li data-list="ordered"><span class="ql-ui" contenteditable="false"></span>Pengembalian dana akibat pembatalan order tidak termasuk biaya edit &amp; pembuatan artikel.</li></ol>',
            'created_at' => Carbon::create(2024, 12, 3, 12, 0, 0), // Format: (year, month, day, hour, minute, second)
            'updated_at' => Carbon::create(2024, 12, 3, 12, 0, 0) // Format: (year, month, day, hour, minute, second)
        ]);
        SyaratKetentuan2::create([
            'header' => 'Poin 9: Gagal Terbit',
            'isi' => '<ol><li data-list="ordered"><span class="ql-ui" contenteditable="false"></span>Jika terjadi hal-hal yang mengakibatkan konten tidak jadi tayang, maka klien berhak mengajukan <strong>Pengembalian Dana</strong> atau <strong>Mengganti Media</strong> untuk Menerbitkan Konten</li><li data-list="ordered"><span class="ql-ui" contenteditable="false"></span>Pengajuan pengembalian dana akibat gagal terbit paling lambat 3×24 jam setelah redaksi memverifikasi kepada Tim Kyu Media.</li><li data-list="ordered"><span class="ql-ui" contenteditable="false"></span>Pengajuan perubahan media akibat gagal terbit paling lambat 3×24 jam setelah redaksi memverifikasi kepada tim.</li><li data-list="ordered"><span class="ql-ui" contenteditable="false"></span>Pengembalian dana lantaran pembatalan order akan dipotong 25% untuk semua layanan yang dipilih.</li></ol>',
            'created_at' => Carbon::create(2024, 12, 3, 12, 0, 0), // Format: (year, month, day, hour, minute, second)
            'updated_at' => Carbon::create(2024, 12, 3, 12, 0, 0) // Format: (year, month, day, hour, minute, second)
        ]);
        SyaratKetentuan2::create([
            'header' => 'Perubahan Syarat dan Ketentuan Layanan',
            'isi' => '<p>Syarat dan Ketentuan layanan ini dapat berubah sewaktu waktu, menyesuaikan dengan kondisi yang ada. Setiap perubahan Syarat dan Ketentuan tidak akan disampaikan kepada pembaca maupun pelanggan secara langsung.</p><p>Syarat dan Ketentuan layanan jasa press release kami dibangun untuk melindungi Anda. Maka dari itu, sebaiknya pahami betul Syarat dan Ketentuan agar Anda dapat memanfaatkan layanan Kyu Media secara maksimal.</p><p>Kyu Media menawarkan solusi efektif untuk meningkatkan visibilitas dan reputasi suatu merek. Dengan Syarat dan Ketentuan yang berlaku, kami memastikan setiap rilis berita yang kami buat disesuaikan dengan kebutuhan guna menjangkau audiens yang tepat, dan mematuhi standar industri.</p><p>Syarat dan Ketentuan layanan Kyu Media.com ini berlaku sejak pada 1 Oktober 2024.</p><p>Informasi selengkapnya bisa melalui Whatsapp : 085774548930</p>',
            'created_at' => Carbon::create(2024, 12, 3, 12, 0, 0), // Format: (year, month, day, hour, minute, second)
            'updated_at' => Carbon::create(2024, 12, 3, 12, 0, 0) // Format: (year, month, day, hour, minute, second)
        ]);

        // Cara Order
        CaraOrder::create([
            'header' => '1. Konsultasi',
            'isi' => '<p>Konsultasikan kebutuhan Anda agar kami dapat memberikan layanan yang tepat sesuai dengan anggaran Anda.</p>',
            'created_at' => Carbon::create(2024, 12, 3, 12, 0, 0), // Format: (year, month, day, hour, minute, second)
            'updated_at' => Carbon::create(2024, 12, 3, 12, 0, 0) // Format: (year, month, day, hour, minute, second)
        ]);
        CaraOrder::create([
            'header' => '2. Pengiriman Invoice',
            'isi' => '<p>Anda akan menerima invoice dari tim Kyu Media.</p>',
            'created_at' => Carbon::create(2024, 12, 3, 12, 0, 0), // Format: (year, month, day, hour, minute, second)
            'updated_at' => Carbon::create(2024, 12, 3, 12, 0, 0) // Format: (year, month, day, hour, minute, second)
        ]);
        CaraOrder::create([
            'header' => '3. Pembayaran',
            'isi' => '<p>Lakukan pembayaran sesuai layanan yang disepakati dalam waktu 1x24 jam setelah invoice dikirimkan.</p>',
            'created_at' => Carbon::create(2024, 12, 3, 12, 0, 0), // Format: (year, month, day, hour, minute, second)
            'updated_at' => Carbon::create(2024, 12, 3, 12, 0, 0) // Format: (year, month, day, hour, minute, second)
        ]);
        CaraOrder::create([
            'header' => '4. Proses Pengerjaan',
            'isi' => '<p>Setelah pembayaran diterima oleh bagian keuangan kami, layanan yang Anda pilih akan mulai dikerjakan sehari setelahnya.</p>',
            'created_at' => Carbon::create(2024, 12, 3, 12, 0, 0), // Format: (year, month, day, hour, minute, second)
            'updated_at' => Carbon::create(2024, 12, 3, 12, 0, 0) // Format: (year, month, day, hour, minute, second)
        ]);

        // FAQ
        Faq::create([
            'pertanyaan' => 'Mengapa memilih Jasa Press Release Murah dari Kami?',
            'jawaban' => '<p>Kami berpengalaman dalam penerbitan artikel, khususnya press release untuk perusahaan dan individu.</p>',
            'created_at' => Carbon::create(2024, 12, 3, 12, 0, 0), // Format: (year, month, day, hour, minute, second)
            'updated_at' => Carbon::create(2024, 12, 3, 12, 0, 0) // Format: (year, month, day, hour, minute, second)
        ]);
        Faq::create([
            'pertanyaan' => 'Siapa yang Membutuhkan Jasa Press Release?',
            'jawaban' => '<p>1. Perusahaan</p><p>Menyiarkan kegiatan perusahaan, perubahan struktur organisasi, menanggapi krisis, meningkatkan reputasi.</p><p><br></p><p>2. Startup</p><p>Meningkatkan visibilitas agar masyarakat luas mengetahui keberadaan startup di pasar Indonesia.</p><p><br></p><p>3. UMKM (Usaha Mikro, Kecil, dan Menengah)</p><p>Membangun dan meningkatkan kesadaran di tingkat lokal, menyiarkan produk, merespons perubahan signifikan dalam bisnis.</p><p><br></p><p>4. Pemerintah / BUMN</p><p>Menyiarkan berita tentang kebijakan dan program pemerintah atau BUMN agar diketahui masyarakat luas.</p><p><br></p><p>5. Influencer</p><p>Meningkatkan engagement, memperoleh popularitas, dan meningkatkan peluang untuk verifikasi centang biru di media sosial.</p><p><br></p><p>6. Artis/Seniman</p><p>Memperkenalkan karya terbaru, penampilan di acara besar, dan proyek yang sedang dikerjakan.</p><p><br></p><p>7. Tokoh Masyarakat</p><p>Berbagi pesan atau informasi yang dianggap penting untuk masyarakat.</p><p><br></p><p>8. Organisasi Nirlaba</p><p>Meningkatkan dukungan dan kesadaran masyarakat tentang kegiatan amal dan kampanye sosial yang sedang dijalankan.</p><p><br></p><p>9. Event Organizer</p><p>Memasarkan acara untuk meningkatkan partisipasi dan eksposur event.</p><p><br></p><p>10. Profesional dan Ahli</p><p>Membangun reputasi profesional dengan mengumumkan keberhasilan atau memberikan pandangan ahli melalui media nasional.</p><p><br></p><p>11. Lembaga Pendidikan</p><p>Sekolah, universitas, lembaga pelatihan, yang ingin menyampaikan informasi terkait program pendidikan dan prestasi mereka.</p>',
            'created_at' => Carbon::create(2024, 12, 3, 12, 0, 0), // Format: (year, month, day, hour, minute, second)
            'updated_at' => Carbon::create(2024, 12, 3, 12, 0, 0) // Format: (year, month, day, hour, minute, second)
        ]);
        Faq::create([
            'pertanyaan' => 'Berapa Hari Artikel Press Release Terbit?',
            'jawaban' => '<p>Proses tayang press release memerlukan waktu 3x24 jam tanpa pengerjaan artikel. Bahkan, bisa lebih cepat dari waktu tersebut.</p>',
            'created_at' => Carbon::create(2024, 12, 3, 12, 0, 0), // Format: (year, month, day, hour, minute, second)
            'updated_at' => Carbon::create(2024, 12, 3, 12, 0, 0) // Format: (year, month, day, hour, minute, second)
        ]);
        Faq::create([
            'pertanyaan' => 'Apakah Artikel Press Release Tayang Permanen?',
            'jawaban' => '<p>Selama konten press release tidak melanggar kebijakan media, artikel press release akan tetap tayang di media yang bersangkutan.</p>',
            'created_at' => Carbon::create(2024, 12, 3, 12, 0, 0), // Format: (year, month, day, hour, minute, second)
            'updated_at' => Carbon::create(2024, 12, 3, 12, 0, 0) // Format: (year, month, day, hour, minute, second)
        ]);
        Faq::create([
            'pertanyaan' => 'Bisa Sebar Rilis di Media Online Mana Saja?',
            'jawaban' => '<p>Kami dapat menyebarkan press release klien ke berbagai media online nasional, lokal, atau daerah, hingga media non-tier yang sudah terindeks di Google.</p>',
            'created_at' => Carbon::create(2024, 12, 3, 12, 0, 0), // Format: (year, month, day, hour, minute, second)
            'updated_at' => Carbon::create(2024, 12, 3, 12, 0, 0) // Format: (year, month, day, hour, minute, second)
        ]);
        Faq::create([
            'pertanyaan' => 'Topik Apa Saja yang Diperbolehkan untuk Press Release?',
            'jawaban' => '<p>Kami menerima semua topik, kecuali:</p><p>1. Judi</p><p>2. Porno</p><p>3. Ujaran Kebencian</p><p>4. Provokasi</p><p>5. Perbandingan Agama</p><p>6. Organisasi Ilegal</p><p>7. Obat dan Makanan yang belum resmi</p>',
            'created_at' => Carbon::create(2024, 12, 3, 12, 0, 0), // Format: (year, month, day, hour, minute, second)
            'updated_at' => Carbon::create(2024, 12, 3, 12, 0, 0) // Format: (year, month, day, hour, minute, second)
        ]);
        Faq::create([
            'pertanyaan' => 'Bagaimana Sistem Pembayaran Jasa Press Release?',
            'jawaban' => '<p>Pengguna layanan dapat melakukan pembayaran penuh di awal atau memberikan uang muka sebesar 50% (syarat dan ketentuan berlaku).</p>',
            'created_at' => Carbon::create(2024, 12, 3, 12, 0, 0), // Format: (year, month, day, hour, minute, second)
            'updated_at' => Carbon::create(2024, 12, 3, 12, 0, 0) // Format: (year, month, day, hour, minute, second)
        ]);

        // Layanan
        Layanan::create([
            'header' => 'Jasa Press Release Murah',
            'isi' => '<p>Tingkatkan reputasi bisnis kamu dengan Jasa Press Release Murah dari kami! Dapatkan kesempatan untuk melakukan publikasi media online secara masif yang akan membantu meningkatkan brand awareness kamu.</p>',
            'footer' => 'Garansi 100% Berita Tayang',
            'created_at' => Carbon::create(2024, 12, 3, 12, 0, 0), // Format: (year, month, day, hour, minute, second)
            'updated_at' => Carbon::create(2024, 12, 3, 12, 0, 0) // Format: (year, month, day, hour, minute, second)
        ]);
        Layanan::create([
            'header' => 'Jasa Backlink Media Nasional',
            'isi' => '<p>Backlink media nasional berguna untuk menaikkan visibilitas, kredibilitas, hingga peringkat SEO sebuah situs web pada mesin pencari. Cara kerja jasa backlink media adalah dengan menyediakan pembuatan serta penempatan backlink di situs-situs media nasional ternama.</p>',
            'footer' => 'Garansi 100% Berita Tayang',
            'created_at' => Carbon::create(2024, 12, 3, 12, 0, 0), // Format: (year, month, day, hour, minute, second)
            'updated_at' => Carbon::create(2024, 12, 3, 12, 0, 0) // Format: (year, month, day, hour, minute, second)
        ]);
        Layanan::create([
            'header' => 'Jasa Pengelolaan Media Sosial',
            'isi' => '<p>Kami berkomitmen untuk membantu bisnis bertumbuh, dengan mengembangkan branding dan strategi pemasaran media sosial secara menyeluruh melalui Jasa Pengelolaan Media Sosial.</p>',
            'footer' => ' ',
            'created_at' => Carbon::create(2024, 12, 3, 12, 0, 0), // Format: (year, month, day, hour, minute, second)
            'updated_at' => Carbon::create(2024, 12, 3, 12, 0, 0) // Format: (year, month, day, hour, minute, second)
        ]);
        Layanan::create([
            'header' => 'Jasa Penulis Artikel Profesional',
            'isi' => '<p>Apakah kamu memerlukan jasa penulis artikel untuk kebutuhan konten, press release, hingga annual report? PublikaLabs hadir untuk menjawab kebutuhanmu. Kami memiliki layanan penulisan artikel dengan berbagai pilihan.</p>',
            'footer' => ' ',
            'created_at' => Carbon::create(2024, 12, 3, 12, 0, 0), // Format: (year, month, day, hour, minute, second)
            'updated_at' => Carbon::create(2024, 12, 3, 12, 0, 0) // Format: (year, month, day, hour, minute, second)
        ]);
        Layanan::create([
            'header' => 'Media Monitoring',
            'isi' => '<p>Layanan Media Monitoring yang relevan meliputi media cetak, media online hingga media sosial. Kami hadir membantu Anda untuk selalu up-to-date dengan semua informasi media yang penting bagi bisnis Anda.</p>',
            'footer' => ' ',
            'created_at' => Carbon::create(2024, 12, 3, 12, 0, 0), // Format: (year, month, day, hour, minute, second)
            'updated_at' => Carbon::create(2024, 12, 3, 12, 0, 0) // Format: (year, month, day, hour, minute, second)
        ]);

        // Kontak
        Kontak::create([
            'kontak' => '085774548930',
            'created_at' => Carbon::create(2024, 12, 3, 12, 0, 0), // Format: (year, month, day, hour, minute, second)
            'updated_at' => Carbon::create(2024, 12, 3, 12, 0, 0) // Format: (year, month, day, hour, minute, second)
        ]);
        Kontak::create([
            'kontak' => 'Jl.',
            'created_at' => Carbon::create(2024, 12, 3, 12, 0, 0), // Format: (year, month, day, hour, minute, second)
            'updated_at' => Carbon::create(2024, 12, 3, 12, 0, 0) // Format: (year, month, day, hour, minute, second)
        ]);
        Kontak::create([
            'kontak' => 'kyumedia@gmail.com',
            'created_at' => Carbon::create(2024, 12, 3, 12, 0, 0), // Format: (year, month, day, hour, minute, second)
            'updated_at' => Carbon::create(2024, 12, 3, 12, 0, 0) // Format: (year, month, day, hour, minute, second)
        ]);
        Kontak::create([
            'kontak' => 'kyumedia.com',
            'created_at' => Carbon::create(2024, 12, 3, 12, 0, 0), // Format: (year, month, day, hour, minute, second)
            'updated_at' => Carbon::create(2024, 12, 3, 12, 0, 0) // Format: (year, month, day, hour, minute, second)
        ]);
    }
}
