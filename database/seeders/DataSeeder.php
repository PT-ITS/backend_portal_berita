<?php

namespace Database\Seeders;

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

        // Info
        Info::create([
            'header' => 'Inilah yang Wajib Anda Tahu',
            'isi' => '<p>Organisasi Kepemudaan:</p><p>GP Ansor adalah organisasi yang berfokus pada pengembangan dan pemberdayaan pemuda, khususnya di kalangan Nahdlatul Ulama. </p><p>Badan Otonom NU:</p><p>GP Ansor adalah salah satu badan otonom di bawah NU, yang berarti organisasi ini memiliki otonomi dalam kegiatan dan pengelolaan, namun tetap berada di bawah koordinasi NU.</p>',
            'created_at' => Carbon::create(2024, 12, 3, 12, 0, 0), // Format: (year, month, day, hour, minute, second)
            'updated_at' => Carbon::create(2024, 12, 3, 12, 0, 0) // Format: (year, month, day, hour, minute, second)
        ]);

        // Manfaat
        Manfaat::create([
            'header' => 'Sejarah Berdiri',
            'isi' => '<p>GP Ansor didirikan pada tanggal 24 April 1934 di Banyuwangi, Jawa Timur.</p>',
            'created_at' => Carbon::create(2024, 12, 3, 12, 0, 0), // Format: (year, month, day, hour, minute, second)
            'updated_at' => Carbon::create(2024, 12, 3, 12, 0, 0) // Format: (year, month, day, hour, minute, second)
        ]);
        Manfaat::create([
            'header' => 'Peran Strategis',
            'isi' => '<p>GP Ansor memiliki peran strategis dalam perkembangan masyarakat Indonesia, termasuk dalam mendorong percepatan mobilitas sosial, politik, dan kebudayaan bagi anggotanya.</p>',
            'created_at' => Carbon::create(2024, 12, 3, 12, 0, 0), // Format: (year, month, day, hour, minute, second)
            'updated_at' => Carbon::create(2024, 12, 3, 12, 0, 0) // Format: (year, month, day, hour, minute, second)
        ]);
        Manfaat::create([
            'header' => 'Pengurus Wilayah',
            'isi' => '<p>GP Ansor memiliki pengurus wilayah yang tersebar di 34 provinsi di Indonesia.</p>',
            'created_at' => Carbon::create(2024, 12, 3, 12, 0, 0), // Format: (year, month, day, hour, minute, second)
            'updated_at' => Carbon::create(2024, 12, 3, 12, 0, 0) // Format: (year, month, day, hour, minute, second)
        ]);

        // Keunggulan
        Keunggulan::create([
            'header' => 'Kepemudaan',
            'isi' => '<p>Membangun karakter dan kepemimpinan pemuda.</p>',
            'created_at' => Carbon::create(2024, 12, 3, 12, 0, 0), // Format: (year, month, day, hour, minute, second)
            'updated_at' => Carbon::create(2024, 12, 3, 12, 0, 0) // Format: (year, month, day, hour, minute, second)
        ]);
        Keunggulan::create([
            'header' => 'Kemasyarakatan',
            'isi' => '<p>Melakukan kegiatan sosial dan pengabdian kepada masyarakat.</p>',
            'created_at' => Carbon::create(2024, 12, 3, 12, 0, 0), // Format: (year, month, day, hour, minute, second)
            'updated_at' => Carbon::create(2024, 12, 3, 12, 0, 0) // Format: (year, month, day, hour, minute, second)
        ]);
        Keunggulan::create([
            'header' => 'Kebangsaan',
            'isi' => '<p>Memupuk rasa nasionalisme dan cinta tanah air.</p>',
            'created_at' => Carbon::create(2024, 12, 3, 12, 0, 0), // Format: (year, month, day, hour, minute, second)
            'updated_at' => Carbon::create(2024, 12, 3, 12, 0, 0) // Format: (year, month, day, hour, minute, second)
        ]);
        Keunggulan::create([
            'header' => 'Keagamaan',
            'isi' => '<p>Meningkatkan pemahaman dan praktik agama.</p>',
            'created_at' => Carbon::create(2024, 12, 3, 12, 0, 0), // Format: (year, month, day, hour, minute, second)
            'updated_at' => Carbon::create(2024, 12, 3, 12, 0, 0) // Format: (year, month, day, hour, minute, second)
        ]);

        // Tentang Kami
        TentangKami::create([
            'header' => 'Tentang GP Ansor',
            'isi' => '<p>Sebuah organisasi kemasyaratan pemuda di Indonesia, yang berafiliasi dengan Nahdathul Ulama (NU). Organisasi ini didirikan pada tanggal 24 April 1934. GP Ansor juga mengelola Barisan Ansor Serbaguna (Banser). GP Ansor selalu memiliki peran strategis dalam perkembangan Indonesia.</p>',
            'visi' => '<ol><li data-list="bullet"><span class="ql-ui" contenteditable="false"></span>Revitialisasi Nilai dan Tradisi</li><li data-list="bullet"><span class="ql-ui" contenteditable="false"></span>Penguatan Sistem Kaderisasi</li><li data-list="bullet"><span class="ql-ui" contenteditable="false"></span>Pemberdayaan Potensi Kader</li><li data-list="bullet"><span class="ql-ui" contenteditable="false"></span>Kemandirian Organisasi</li></ol>',
            'misi' => '<ol><li data-list="bullet"><span class="ql-ui" contenteditable="false"></span>Internalisasi Nilai ASWAJA dan Sifatur Rasul dalam Gerakan GP Ansor</li><li data-list="bullet"><span class="ql-ui" contenteditable="false"></span>Membangun Disiplin Organisasi dan Kadersasi bebasis Profesi.</li><li data-list="bullet"><span class="ql-ui" contenteditable="false"></span>Menjadi sentrum lalulintas informasi dan peluang usaha antar kader dengan stakeholder.</li><li data-list="bullet"><span class="ql-ui" contenteditable="false"></span>Mempercepat kemandirian ekonomi kader dan organisasi</li></ol>',
            'nilai_perusahaan' => '<ol><li data-list="bullet"><span class="ql-ui" contenteditable="false"></span>Membentuk dan mengembangkan generasi muda Indonesia sebagai kader bangsa yang cerdas dan tangguh, memiliki keimanan dan ketaqwaan kepada Allah SWT, berkepribadian luhur, berakhlak mulia, sehat, terampil, patriotik, ikhlas dan beramal shalih.</li><li data-list="bullet"><span class="ql-ui" contenteditable="false"></span>Menegakkan ajaran Islam Ahlussunnah Wal Jama’ah dengan menempuh manhaj salah satu madzhab empat di dalam wadah Negara Kesatuan Republik Indonesia.</li><li data-list="bullet"><span class="ql-ui" contenteditable="false"></span>Berperan secara aktif dan kritis dalam pembangunan nasional demi terwujudnya cita-cita kemerdekaan Indonesia yang berkeadilan, berkemakmuran, berkemanusiaan dan bermartabat bagi seluruh rakyat Indonesia yang diridhoi Allah SWT.</li></ol>',
            'project_complete' => '-',
            'happy_client' => '-',
            'awards_winning' => '-',
            'success_rate' => '-',
            'created_at' => Carbon::create(2024, 12, 3, 12, 0, 0), // Format: (year, month, day, hour, minute, second)
            'updated_at' => Carbon::create(2024, 12, 3, 12, 0, 0) // Format: (year, month, day, hour, minute, second)
        ]);

        // Syarat dan Ketentuan
        SyaratKetentuan::create([
            'syarat' => 'Kewarganegaraan dan Agama',
            'created_at' => Carbon::create(2024, 12, 3, 12, 0, 0), // Format: (year, month, day, hour, minute, second)
            'updated_at' => Carbon::create(2024, 12, 3, 12, 0, 0) // Format: (year, month, day, hour, minute, second)
        ]);
        SyaratKetentuan::create([
            'syarat' => 'Usia',
            'created_at' => Carbon::create(2024, 12, 3, 12, 0, 0), // Format: (year, month, day, hour, minute, second)
            'updated_at' => Carbon::create(2024, 12, 3, 12, 0, 0) // Format: (year, month, day, hour, minute, second)
        ]);
        SyaratKetentuan::create([
            'syarat' => 'Persetujuan PD/PDRT',
            'created_at' => Carbon::create(2024, 12, 3, 12, 0, 0), // Format: (year, month, day, hour, minute, second)
            'updated_at' => Carbon::create(2024, 12, 3, 12, 0, 0) // Format: (year, month, day, hour, minute, second)
        ]);
        SyaratKetentuan::create([
            'syarat' => 'Kesediaan dan Kepastian',
            'created_at' => Carbon::create(2024, 12, 3, 12, 0, 0), // Format: (year, month, day, hour, minute, second)
            'updated_at' => Carbon::create(2024, 12, 3, 12, 0, 0) // Format: (year, month, day, hour, minute, second)
        ]);
        SyaratKetentuan::create([
            'syarat' => 'Anggota Khusus',
            'created_at' => Carbon::create(2024, 12, 3, 12, 0, 0), // Format: (year, month, day, hour, minute, second)
            'updated_at' => Carbon::create(2024, 12, 3, 12, 0, 0) // Format: (year, month, day, hour, minute, second)
        ]);
        SyaratKetentuan::create([
            'syarat' => 'Pendidikan dan Pelatihan',
            'created_at' => Carbon::create(2024, 12, 3, 12, 0, 0), // Format: (year, month, day, hour, minute, second)
            'updated_at' => Carbon::create(2024, 12, 3, 12, 0, 0) // Format: (year, month, day, hour, minute, second)
        ]);
        SyaratKetentuan::create([
            'syarat' => 'Kualifikasi Kader Banser',
            'created_at' => Carbon::create(2024, 12, 3, 12, 0, 0), // Format: (year, month, day, hour, minute, second)
            'updated_at' => Carbon::create(2024, 12, 3, 12, 0, 0) // Format: (year, month, day, hour, minute, second)
        ]);

        // Syarat dan Ketentuan 2
        SyaratKetentuan2::create([
            'header' => 'JENIS ANGGOTA GP ANSOR',
            'isi' => '<p>Anggota GP Ansor terdiri dari:</p><p>1. Anggota biasa, selanjutnya disebut anggota ialah pemuda warga negara Indonesia yang beragama Islam, berusia antara 20 tahun hingga 45 tahun.</p><p>2. Anggota kehormatan, ialah setiap orang yang dianggap telah berjasa kepada oganisasi dan disetujui penetapannya sera disahkan dalam Rapat Pengurus Harian Pimpinan Pusat Gerakan Pemuda Ansor.</p>',
            'created_at' => Carbon::create(2024, 12, 3, 12, 0, 0), // Format: (year, month, day, hour, minute, second)
            'updated_at' => Carbon::create(2024, 12, 3, 12, 0, 0) // Format: (year, month, day, hour, minute, second)
        ]);
        SyaratKetentuan2::create([
            'header' => 'SYARAT-SYARAT ANGGOTA',
            'isi' => '<p>1. Pemuda warga negara Indonesia.</p><p>2. Beragama Islam</p><p>3. Berusia 20 tahun hingga 45 tahun</p><p>4. Menyetujui Peraturan Dasar dan Peraturan Rumah Tangga</p><p>5. Sanggup mentaati dan melaksanakan semua keputusan dan peraturan organisasi.</p>',
            'created_at' => Carbon::create(2024, 12, 3, 12, 0, 0), // Format: (year, month, day, hour, minute, second)
            'updated_at' => Carbon::create(2024, 12, 3, 12, 0, 0) // Format: (year, month, day, hour, minute, second)
        ]);
        SyaratKetentuan2::create([
            'header' => 'TATA CARA PENERIMAAN ANGGOTA',
            'isi' => '<p>1. Penerimaan angota dapat dilakukan di tingkat ranting, anak cabang, cabang dan wilayah domisili calon anggota.</p><p>2. Tatacara dan pengelolaan administrasi penerimaan anggota diatur oleh Pimpinan Pusat.</p><p>3. Pegusulan anggota kehormatan dilakukan atas usul rapat harian Pimpinan Cabang, rapat harian Pimpinan Wilayah, atau rapat harian Pimpinan Pusat. Setelah usulan memperoleh persetujuan Pimpinan Pusat kepadanya diberikan keputusan penetapan.</p>',
            'created_at' => Carbon::create(2024, 12, 3, 12, 0, 0), // Format: (year, month, day, hour, minute, second)
            'updated_at' => Carbon::create(2024, 12, 3, 12, 0, 0) // Format: (year, month, day, hour, minute, second)
        ]);
        SyaratKetentuan2::create([
            'header' => 'KEWAJIBAN ANGGOTA',
            'isi' => '<p>Anggota Gerakan Pemuda Ansor berkewajiban:</p><p>1. Memiliki keterikatan secara formal maupun moral serta menjunjung tinggi nama baik, tujuan dan kehormatan organisasi.</p><p>2. Menunjukkan kesetiaan kepada organisasi.</p><p>3. Tunduk dan patuh terhadap Peraturan Dasar, Peraturan Rumah Tangga, Peraturan dan keputusan organisasi Gerakan Pemuda Ansor.</p><p>4. Mengikuti secara aktif dalam kegiatan-kegiatan organisasi.</p><p>5. Mendukung dan mensukseskan seluruh pelaksanaan program organisasi.</p>',
            'created_at' => Carbon::create(2024, 12, 3, 12, 0, 0), // Format: (year, month, day, hour, minute, second)
            'updated_at' => Carbon::create(2024, 12, 3, 12, 0, 0) // Format: (year, month, day, hour, minute, second)
        ]);
        SyaratKetentuan2::create([
            'header' => 'HAK ANGGOTA',
            'isi' => '<p>Anggota Gerakan Pemuda Ansor berhak:</p><p>1. Memperoleh perlakuan yang sama dari organisasi.</p><p>2. Memperoleh pelayanan, pembelaan, pendidikan dan pelatihan serta bimbingan dari organisasi.</p><p>3. Menghadiri rapat anggota, mengemukakan pendapat, mengajukan pertanyaan, memberikan usul dan saran yang bersifat membangun.</p><p>4. Memilih dan dipilih menjadi pengurus atau memegang jabatan lain yang diamanatkan kepadanya.</p><p>5. Mengadakan pembelaan terhadap keputusan organisasi tentang dirinya.</p>',
            'created_at' => Carbon::create(2024, 12, 3, 12, 0, 0), // Format: (year, month, day, hour, minute, second)
            'updated_at' => Carbon::create(2024, 12, 3, 12, 0, 0) // Format: (year, month, day, hour, minute, second)
        ]);
        SyaratKetentuan2::create([
            'header' => 'BERHENTI DARI KEANGGOTAAN',
            'isi' => '<p>1. Anggota biasa dan anggota kehormatan Gerakan Pemuda Ansor keanggotaannya karena:</p><p>a. Meninggal dunia.</p><p>b. Atas permintaan sendiri.</p><p>c. Diberhentikan sementara.</p><p>d. Diberhentikan tetap.</p><p>2. Surat keputusan pemberhentian anggota dikeluarkan oleh Pimpinan Cabang tempat domisili yang bersangkutan atas keputusan Rapat Pleno Pimpinan Cabang.</p><p>3. Seseorang berhenti dari keanggotaan Gerakan Pemuda Ansor atas permintaan sendiri yang diajukan kepada Pimpinan Pengurus yang menandatangani kartu anggotanya secara tertulis, atau dapat dilakukan secara lisan dengan disaksikan oleh sekurang-kurangnya 2 (dua) orang pimpinan yang menandatangani kartu anggotanya.</p>',
            'created_at' => Carbon::create(2024, 12, 3, 12, 0, 0), // Format: (year, month, day, hour, minute, second)
            'updated_at' => Carbon::create(2024, 12, 3, 12, 0, 0) // Format: (year, month, day, hour, minute, second)
        ]);
        SyaratKetentuan2::create([
            'header' => 'PEMBERHENTIAN DARI KEANGGOTAAN',
            'isi' => '<p>1. Anggota Gerakan Pemuda Ansor dapat diberhentikan sementara atau tetap apabila:</p><p>a. Dengan sengaja tidak melaksanakan kewajiban sebagai anggota.</p><p>b. Melakukan perbuatan yang mencemarkan nama baik organisasi baik ditinjau dari segi syarat, peraturan perundang-undangan maupun keputusan dan peraturan organisasi.</p><p>2. Sebelum diberhentikan sementara, anggota yang bersangkutan diberikan peringatan tertulis oleh Pengurus Cabang dimana ia berdomisili yang merupakan hasil dari Rapat Pleno Pimpinan Cabang yang khusus diadakan untuk itu.</p><p>3. Apabila dalam waktu 15 (lima belas) hari peringatan tidak diindahkan, maka Pimpinan Cabang dapat memberhentikan sementara secara tertulis selama jangka waktu 1 (satu) bulan.</p><p>4. Apabila selama waktu pemberhentian sementara anggota yang bersangkutan tidak memperbaiki kesalahannya dan tingkah lakunya, maka dilakukan pemberhentian tetap dan kepadanya diberikan surat keputusan pemberhentian oleh Pimpinan Cabang.</p><p>5. Anggota yang diberhentikan sementara atau diberhentikan tetap dapat membela diri atau naik banding kepada Pimpinan Wilayah. Pimpinan Wilayah mengadakan rapat pleno khusus untuk itu dan mengambil keputusan atas permintaan banding itu paling lama 1 (satu) bulan setelah permintaan banding tersebut.</p><p>6. Dalam keadaan tertentu Pimpinan Pusat dapat melakukan pemberhentian sementara atau tetap terhadap seorang anggota melalui Rapat Pleno Pimpinan Pusat yang khusus diadakan untuk itu. Surat keputusan tentang pemberhentian itu dikirim kepada yang bersangkutan dan tembusannya kepada Pimpinan Cabang tempat dia berdomisili.</p><p>7. Anggota yang diberhentikan sementara atau diberhentikan tetap oleh Pimpinan Pusat diberi hak melakukan pembelaan diri dalam Konferensi Besar atau Kongres. (Hernoe R)</p>',
            'created_at' => Carbon::create(2024, 12, 3, 12, 0, 0), // Format: (year, month, day, hour, minute, second)
            'updated_at' => Carbon::create(2024, 12, 3, 12, 0, 0) // Format: (year, month, day, hour, minute, second)
        ]);

        // Layanan
        Layanan::create([
            'header' => 'GP Ansor',
            'isi' => '<p>Organisasi kepemudaan yang merupakan badan otonom dibawah Nahdlatul Ulama. GP Ansor didirikan pada tahun 1934 dan fokus pada kegiatan kepemudaan, kemasyrakatan, kebangsaan dan keagamaan.</p>',
            'footer' => 'Nahdlatul Ulama',
            'created_at' => Carbon::create(2024, 12, 3, 12, 0, 0), // Format: (year, month, day, hour, minute, second)
            'updated_at' => Carbon::create(2024, 12, 3, 12, 0, 0) // Format: (year, month, day, hour, minute, second)
        ]);

        // Kontak
        Kontak::create([
            'kontak' => '0812-6544-8523',
            'created_at' => Carbon::create(2024, 12, 3, 12, 0, 0), // Format: (year, month, day, hour, minute, second)
            'updated_at' => Carbon::create(2024, 12, 3, 12, 0, 0) // Format: (year, month, day, hour, minute, second)
        ]);
        Kontak::create([
            'kontak' => 'Jl. Kusuma Merdeka, No.34, Indonesia',
            'created_at' => Carbon::create(2024, 12, 3, 12, 0, 0), // Format: (year, month, day, hour, minute, second)
            'updated_at' => Carbon::create(2024, 12, 3, 12, 0, 0) // Format: (year, month, day, hour, minute, second)
        ]);
        Kontak::create([
            'kontak' => 'ansornews@gmail.com',
            'created_at' => Carbon::create(2024, 12, 3, 12, 0, 0), // Format: (year, month, day, hour, minute, second)
            'updated_at' => Carbon::create(2024, 12, 3, 12, 0, 0) // Format: (year, month, day, hour, minute, second)
        ]);
        Kontak::create([
            'kontak' => 'ansornews.com',
            'created_at' => Carbon::create(2024, 12, 3, 12, 0, 0), // Format: (year, month, day, hour, minute, second)
            'updated_at' => Carbon::create(2024, 12, 3, 12, 0, 0) // Format: (year, month, day, hour, minute, second)
        ]);
    }
}
