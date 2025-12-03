<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\RegisBinaanUKM; //sesuai model dari database yang akan ditarik

class TenantSeeder extends Seeder
{
    public function run()
    {
        RegisBinaanUKM::truncate();
        RegisBinaanUKM::insert(array (
  0 =>
  array (
    'id' => 1,
    'Name' => 'Budi Rizki Romadon, Dede Reza Nugraha dan Nanda Rizki Kurniawan',
    'Age' => 25,
    'Gender' => 'Laki-Laki',
    'Email' => 'brp@inkubator.com',
    'NoContactTenant' => '081122223333',
    'nameTenant' => 'BRB_Photographer_Palembang',
    'sectorTenant' => 'Jasa Komputer & Perangkatnya',
    'addreasTenant' => 'Jln. Sekip Bendung lr Nang Agung Palembang',
    'aboutTenant' => '<p><strong>Nama Usaha:</strong>&nbsp;BRB_Photographer_Palembang</p>
<p><strong>Jenis Usaha:</strong>&nbsp;Jasa Fotografi</p>
<p><strong>Lokasi:</strong>&nbsp;Palembang, Sumatera Selatan, Indonesia</p>
<p><strong>Visi:</strong>&nbsp;Menjadi penyedia jasa fotografi terdepan di Palembang yang menghadirkan kualitas dan keindahan dalam setiap momen yang diabadikan.</p>
<p><strong>Misi:</strong></p>
<ol>
<li>Memberikan pelayanan fotografi profesional yang kreatif dan berkualitas tinggi.</li>
<li>Menangkap momen spesial dengan kepekaan artistik dan teknologi terkini.</li>
<li>Menciptakan pengalaman pelanggan yang memuaskan melalui pelayanan yang ramah dan responsif.</li>
<li>Selalu berinovasi dalam teknik dan gaya fotografi untuk memenuhi kebutuhan pasar yang berkembang.</li>
</ol>
<p><strong>Layanan Utama:</strong></p>
<ol>
<li><strong>Fotografi Pernikahan:</strong>&nbsp;Menyediakan paket lengkap untuk mendokumentasikan setiap momen penting dalam acara pernikahan, mulai dari pre-wedding hingga resepsi.</li>
<li><strong>Fotografi Keluarga:</strong>&nbsp;Mengabadikan kebersamaan dan kehangatan keluarga dalam berbagai momen spesial.</li>
<li><strong>Fotografi Komersial:</strong>&nbsp;Menawarkan layanan fotografi untuk keperluan bisnis, termasuk foto produk, foto iklan, dan dokumentasi acara perusahaan.</li>
<li><strong>Fotografi Potret:</strong>&nbsp;Layanan untuk potret pribadi, profesional, dan seni yang menampilkan karakter unik setiap individu.</li>
<li><strong>Fotografi Acara:</strong>&nbsp;Mengabadikan berbagai acara seperti ulang tahun, konser, pameran, dan acara komunitas lainnya.</li>
</ol>
<p><strong>Keunggulan:</strong></p>
<ul>
<li><strong>Tim Profesional:</strong>&nbsp;Didukung oleh tim fotografer yang berpengalaman dan berbakat.</li>
<li><strong>Peralatan Mutakhir:</strong>&nbsp;Menggunakan peralatan fotografi dan teknologi editing terbaru untuk hasil maksimal.</li>
<li><strong>Pelayanan Personalisasi:</strong>&nbsp;Menyediakan layanan yang disesuaikan dengan kebutuhan dan keinginan setiap klien.</li>
<li><strong>Portofolio Teruji:</strong>&nbsp;Memiliki portofolio yang luas dengan berbagai proyek fotografi yang sukses dan memuaskan pelanggan.</li>
</ul>
<p><strong>Target Pasar:</strong></p>
<ul>
<li>Pasangan yang akan menikah</li>
<li>Keluarga yang ingin mengabadikan momen spesial</li>
<li>Perusahaan yang membutuhkan foto untuk keperluan komersial</li>
<li>Individu yang membutuhkan foto potret profesional</li>
<li>Penyelenggara acara yang memerlukan dokumentasi visual</li>
</ul>',
    'Logo' => 'Logo_BRB_Photographer_Palembang.png',
    'LNIB' => 'FileRegistTenant/2025/02-01-2025/BRB_Photographer_Palembang/NIB_BRB_Photographer_Palembang.pdf',
    'LHALAL' => 'FileRegistTenant/2025/02-01-2025/BRB_Photographer_Palembang/HALAL_BRB_Photographer_Palembang.pdf',
    'LPIRT' => 'FileRegistTenant/2025/02-01-2025/BRB_Photographer_Palembang/PIRT_BRB_Photographer_Palembang.pdf',
    'LHKI' => 'FileRegistTenant/2025/02-01-2025/BRB_Photographer_Palembang/HKI_BRB_Photographer_Palembang.pdf',
    'LBPOM' => 'FileRegistTenant/2025/02-01-2025/BRB_Photographer_Palembang/BPOM_BRB_Photographer_Palembang.pdf',
    'LSNI' => 'FileRegistTenant/2025/02-01-2025/BRB_Photographer_Palembang/SNI_BRB_Photographer_Palembang.pdf',
    'FB' => NULL,
    'IG' => NULL,
    'statusTenant' => 'Diterima',
    'DateRegist' => '2025-01-02',
    'yearTenant' => '2025',
    'Slug' => 'brb-photographer-palembangjasa-komputer-perangkatnyabudi-rizki-romadon-dede-reza-nugraha-dan-nanda-rizki-kurniawan',
    'created_at' => '2025-01-02 09:19:03',
    'updated_at' => '2025-01-02 09:55:27',
  ),
  1 =>
  array (
    'id' => 2,
    'Name' => 'Dinni Febrianti',
    'Age' => 25,
    'Gender' => 'Perempuan',
    'Email' => 'difebya@inkubator.com',
    'NoContactTenant' => '081122223333',
    'nameTenant' => 'DIFEBYA',
    'sectorTenant' => 'Makanan & Minuman',
    'addreasTenant' => 'Jln. Jend A yani Palembang',
    'aboutTenant' => '<p class="MsoNormal">Nama Usaha : 𝙳𝙸𝙵𝙴𝙱𝚈𝙰</p>
<p class="MsoNormal">Jenis Usaha : Produksi dan penjualan makanan ringan (snack).</p>
<p class="MsoNormal">Produk Utama : Variasi Snack 𝔻𝕀𝔽𝔼𝔹𝕐𝔸</p>
<p class="MsoNormal">Kerupuk Bantet Original</p>
<p class="MsoNormal">Deskripsi : Kerupuk Bantet Original adalah pilihan yang sempurna bagi para pecinta snack tradisional dengan rasa yang autentik. Dibuat dari bahan-bahan berkualitas tinggi, kerupuk ini memiliki tekstur renyah dan rasa gurih yang khas, menjadikannya camilan yang ideal untuk segala kesempatan.</p>
<p class="MsoNormal">Keunggulan:</p>
<ol>
<li class="MsoNormal">Tekstur renyah dan gurih.</li>
<li class="MsoNormal">Bahan-bahan alami dan berkualitas.</li>
<li class="MsoNormal">Bebas dari bahan pengawet dan pewarna buatan.</li>
</ol>
<p class="MsoNormal">Target Pasar : Semua kalangan usia, khususnya para pecinta camilan tradisional.</p>
<p class="MsoNormal">Kerupuk Bantet Pedas</p>
<p class="MsoNormal">Deskripsi : Kerupuk Bantet Pedas adalah variasi dari kerupuk tradisional dengan sentuhan rasa pedas yang menggugah selera. Camilan ini dibuat dengan bumbu pedas alami yang memberikan sensasi rasa yang kuat namun tetap seimbang dengan kerenyahan kerupuk.</p>
<p class="MsoNormal">Keunggulan:</p>
<ol>
<li class="MsoNormal">Rasa pedas yang menggugah selera.</li>
<li class="MsoNormal">Bahan-bahan alami dan berkualitas.</li>
<li class="MsoNormal">Bebas dari bahan pengawet dan pewarna buatan.</li>
</ol>
<p class="MsoNormal">Target Pasar : Pecinta camilan pedas dan semua kalangan usia yang menyukai sensasi rasa pedas.</p>',
    'Logo' => 'Logo_DIFEBYA.png',
    'LNIB' => 'FileRegistTenant/2025/02-01-2025/DIFEBYA/NIB_DIFEBYA.pdf',
    'LHALAL' => 'FileRegistTenant/2025/02-01-2025/DIFEBYA/HALAL_DIFEBYA.pdf',
    'LPIRT' => 'FileRegistTenant/2025/02-01-2025/DIFEBYA/PIRT_DIFEBYA.pdf',
    'LHKI' => 'FileRegistTenant/2025/02-01-2025/DIFEBYA/HKI_DIFEBYA.pdf',
    'LBPOM' => 'FileRegistTenant/2025/02-01-2025/DIFEBYA/BPOM_DIFEBYA.pdf',
    'LSNI' => 'FileRegistTenant/2025/02-01-2025/DIFEBYA/SNI_DIFEBYA.pdf',
    'FB' => NULL,
    'IG' => NULL,
    'statusTenant' => 'Diterima',
    'DateRegist' => '2025-01-02',
    'yearTenant' => '2025',
    'Slug' => 'difebyamakanan-minumandinni-febrianti',
    'created_at' => '2025-01-02 09:40:04',
    'updated_at' => '2025-01-02 09:55:35',
  ),
  2 =>
  array (
    'id' => 3,
    'Name' => 'Muhammad Jumantoro',
    'Age' => 25,
    'Gender' => 'Laki-Laki',
    'Email' => 'genzikonveksi@inkubator.com',
    'NoContactTenant' => '081122223333',
    'nameTenant' => 'Gen Zi Konveksi',
    'sectorTenant' => 'Periklanan, Percetakan, dan Media',
    'addreasTenant' => 'Jl. Ki Anwar Mangku Sentosa Plaju Kota Palembang.',
    'aboutTenant' => '<p><strong>Nama Usaha:</strong>&nbsp;Konveksi Gen Zi</p>
<p><strong>Slogan:</strong>&nbsp;HARGA PAS ANDA PUAS</p>
<p><strong>Deskripsi:</strong>&nbsp;Konveksi Gen Zi adalah pilihan terbaik untuk Anda yang mencari layanan konveksi terjangkau dengan kualitas bahan premium. Kami menyediakan berbagai macam produk, mulai dari Pakaian Dinas Harian (PDH), kaos, jaket, dan banyak lagi. Dengan komitmen pada kepuasan pelanggan, kami menawarkan harga yang kompetitif tanpa mengorbankan kualitas.</p>
<p>Di Konveksi Gen Zi, kami memahami pentingnya penampilan dan kenyamanan. Oleh karena itu, kami hanya menggunakan bahan-bahan berkualitas tinggi untuk setiap produk yang kami hasilkan. Tim profesional kami siap membantu Anda dari tahap desain hingga produksi, memastikan setiap detail sesuai dengan keinginan Anda.</p>
<h3>Layanan Kami:</h3>
<ul>
<li><strong>Pakaian Dinas Harian (PDH):</strong>&nbsp;Pilihan ideal untuk seragam kerja yang nyaman dan tahan lama.</li>
<li><strong>Kaos:</strong>&nbsp;Beragam desain kaos untuk keperluan sehari-hari, promosi, maupun event khusus.</li>
<li><strong>Jaket:</strong>&nbsp;Jaket berkualitas dengan berbagai model dan bahan yang dapat disesuaikan dengan kebutuhan Anda.</li>
</ul>
<p>Kami bangga dengan hasil kerja kami dan selalu berusaha memberikan yang terbaik. Percayakan kebutuhan konveksi Anda pada Konveksi Gen Zi dan rasakan sendiri kepuasan dengan produk-produk kami.</p>',
    'Logo' => 'Logo_Gen Zi Konveksi.png',
    'LNIB' => 'FileRegistTenant/2025/02-01-2025/Gen Zi Konveksi/NIB_Gen Zi Konveksi.pdf',
    'LHALAL' => 'FileRegistTenant/2025/02-01-2025/Gen Zi Konveksi/HALAL_Gen Zi Konveksi.pdf',
    'LPIRT' => 'FileRegistTenant/2025/02-01-2025/Gen Zi Konveksi/PIRT_Gen Zi Konveksi.pdf',
    'LHKI' => 'FileRegistTenant/2025/02-01-2025/Gen Zi Konveksi/HKI_Gen Zi Konveksi.pdf',
    'LBPOM' => 'FileRegistTenant/2025/02-01-2025/Gen Zi Konveksi/BPOM_Gen Zi Konveksi.pdf',
    'LSNI' => 'FileRegistTenant/2025/02-01-2025/Gen Zi Konveksi/SNI_Gen Zi Konveksi.pdf',
    'FB' => NULL,
    'IG' => NULL,
    'statusTenant' => 'Diterima',
    'DateRegist' => '2025-01-02',
    'yearTenant' => '2025',
    'Slug' => 'gen-zi-konveksiperiklanan-percetakan-dan-mediamuhammad-jumantoro',
    'created_at' => '2025-01-02 09:47:15',
    'updated_at' => '2025-01-02 09:55:42',
  ),
  3 =>
  array (
    'id' => 4,
    'Name' => 'Ilham Saleh',
    'Age' => 25,
    'Gender' => 'Laki-Laki',
    'Email' => 'ilyunstore@inkubator.com',
    'NoContactTenant' => '081122223333',
    'nameTenant' => 'ilyunstore',
    'sectorTenant' => 'Jasa Komputer & Perangkatnya',
    'addreasTenant' => 'Jl. Syakyakirti Lrg. Pancasila, Karang Anyar, Kec. Gandus, Kota Palembang, Sumatera Selatan, Palembang 30148',
    'aboutTenant' => '<p>Ilyunstore adalah pusat layanan reparasi terpercaya yang menawarkan berbagai solusi perbaikan untuk perangkat elektronik Anda, termasuk HP, laptop, dan printer. Dengan tim teknisi berpengalaman yang dipimpin oleh Ilham Saleh (@ilhamsalehofficial), kami siap membantu Anda memperbaiki perangkat yang bermasalah dengan cepat dan efisien.</p>
<p><strong>Layanan yang Ditawarkan:</strong></p>
<ul>
<li><strong>Servis HP:</strong>&nbsp;Perbaikan segala jenis kerusakan pada ponsel, mulai dari masalah layar, baterai, hingga kerusakan perangkat lunak.</li>
<li><strong>Servis Laptop:</strong>&nbsp;Solusi lengkap untuk berbagai masalah laptop seperti kerusakan hardware, perbaikan sistem operasi, dan peningkatan performa.</li>
<li><strong>Servis Printer:</strong>&nbsp;Penanganan masalah printer dari berbagai merek, termasuk perbaikan mekanis, penggantian cartridge, dan pemeliharaan rutin.</li>
</ul>
<p><strong>Penjualan:</strong></p>
<ul>
<li><strong>Sparepart HP:</strong>&nbsp;Kami menyediakan berbagai jenis sparepart HP asli dan berkualitas untuk memastikan perbaikan yang optimal.</li>
<li><strong>Aksesoris HP:</strong>&nbsp;Temukan beragam aksesoris HP seperti casing, screen protector, charger, dan earphone dengan harga terjangkau.</li>
</ul>
<p><strong>Keunggulan Ilyunstore:</strong></p>
<ul>
<li><strong>Teknisi Profesional:</strong>&nbsp;Dipimpin oleh Ilham Saleh, teknisi kami berpengalaman dan terlatih dalam menangani berbagai kerusakan perangkat elektronik.</li>
<li><strong>Layanan Cepat:</strong>&nbsp;Kami mengutamakan kecepatan dan efisiensi dalam setiap layanan perbaikan.</li>
<li><strong>Harga Terjangkau:</strong>&nbsp;Menawarkan harga yang kompetitif tanpa mengurangi kualitas layanan.</li>
<li><strong>Garansi Layanan:</strong>&nbsp;Setiap perbaikan yang dilakukan di Ilyunstore dilengkapi dengan garansi untuk memberikan kepuasan dan kepercayaan kepada pelanggan.</li>
</ul>
<p>Untuk informasi lebih lanjut atau konsultasi, Anda bisa menghubungi teknisi kami langsung melalui Instagram @ilhamsalehofficial. Percayakan perbaikan perangkat Anda kepada Ilyunstore dan dapatkan pelayanan terbaik untuk segala kebutuhan elektronik Anda.</p>',
    'Logo' => 'Logo_ilyunstore.png',
    'LNIB' => 'FileRegistTenant/2025/02-01-2025/ilyunstore/NIB_ilyunstore.pdf',
    'LHALAL' => 'FileRegistTenant/2025/02-01-2025/ilyunstore/HALAL_ilyunstore.pdf',
    'LPIRT' => 'FileRegistTenant/2025/02-01-2025/ilyunstore/PIRT_ilyunstore.pdf',
    'LHKI' => 'FileRegistTenant/2025/02-01-2025/ilyunstore/HKI_ilyunstore.pdf',
    'LBPOM' => 'FileRegistTenant/2025/02-01-2025/ilyunstore/BPOM_ilyunstore.pdf',
    'LSNI' => 'FileRegistTenant/2025/02-01-2025/ilyunstore/SNI_ilyunstore.pdf',
    'FB' => NULL,
    'IG' => NULL,
    'statusTenant' => 'Diterima',
    'DateRegist' => '2025-01-02',
    'yearTenant' => '2025',
    'Slug' => 'ilyunstorejasa-komputer-perangkatnyailham-saleh',
    'created_at' => '2025-01-02 09:50:27',
    'updated_at' => '2025-01-02 09:55:50',
  ),
  4 =>
  array (
    'id' => 5,
    'Name' => 'Eem Prakas',
    'Age' => 25,
    'Gender' => 'Laki-Laki',
    'Email' => 'orekepr@inkubator.com',
    'NoContactTenant' => '081122223333',
    'nameTenant' => 'OReK EPr',
    'sectorTenant' => 'Makanan & Minuman',
    'addreasTenant' => 'Desa Bumi Pratama Mandira Blok 04 Jalur 84 No. 07 Kec. Sungai Menag OKI',
    'aboutTenant' => '<p>ORek EPr adalah usaha yang bergerak dibidang kuliner dengan memproduksi</p>
<p>olahan bumbu masakan sacara bubuk atau instan menjadi bumbu masakan yang</p>
<p>siap saji. Keunggulan dari usaha ini yaitu bahan baku mudah didapatkan dan tahan</p>
<p>lama serta memudahkan para konsumen dalam memasak masakan dengan bumbu</p>
<p>lebih praktis, serta produk yang dijual merupakan produk yang dibuat dengan</p>
<p>rempah rempah terbaik. Nama OReK sendiri adalah singkatan dari Olahan Rempah</p>
<p>Kreasi Eem Prakas.</p>',
    'Logo' => 'Logo_OReK EPr.png',
    'LNIB' => 'FileRegistTenant/2025/02-01-2025/OReK EPr/NIB_OReK EPr.pdf',
    'LHALAL' => 'FileRegistTenant/2025/02-01-2025/OReK EPr/HALAL_OReK EPr.pdf',
    'LPIRT' => 'FileRegistTenant/2025/02-01-2025/OReK EPr/PIRT_OReK EPr.pdf',
    'LHKI' => 'FileRegistTenant/2025/02-01-2025/OReK EPr/HKI_OReK EPr.pdf',
    'LBPOM' => 'FileRegistTenant/2025/02-01-2025/OReK EPr/BPOM_OReK EPr.pdf',
    'LSNI' => 'FileRegistTenant/2025/02-01-2025/OReK EPr/SNI_OReK EPr.pdf',
    'FB' => NULL,
    'IG' => NULL,
    'statusTenant' => 'Diterima',
    'DateRegist' => '2025-01-02',
    'yearTenant' => '2025',
    'Slug' => 'orek-eprmakanan-minumaneem-prakas',
    'created_at' => '2025-01-02 09:54:41',
    'updated_at' => '2025-01-02 09:55:58',
  ),
  5 =>
  array (
    'id' => 6,
    'Name' => 'Fauzan Aziman',
    'Age' => 25,
    'Gender' => 'Laki-Laki',
    'Email' => 'sidespin@inkubator.com',
    'NoContactTenant' => '081122223333',
    'nameTenant' => 'SIDESPIN',
    'sectorTenant' => 'Jasa Komputer & Perangkatnya',
    'addreasTenant' => 'Jln. Jend Ahmad Yani Plaju Palembang',
    'aboutTenant' => '<p class="text-justify">Sistem Informasi Desa Pintar adalah sebuah platform digital desa yang dirancang khusus untuk membantu mempercepat perkembangan teknologi di daerah-daerah khususnya daerah desa 3T ( Terdepan, Terluar dan Terdalam) yang sampai saat ini potensi-potensi desanya yang besar tapi sayang informasi bagi desa sangat minim.</p>
<p class="text-justify">Kami menyediakan sebuah sistem yang kaya akan fitur, diantaranya : Page Desa sebagai pondasinya (sejarah,adat dan budaya, infografis serta demografis desa) selaku penyedia informasi seputar desa, Produk desa pendukung ekonomi UMKM masyarakat, Wisata desa pendukung pariwisata yang ada didesa, Sekolah digital sebagai pendukung penyedia informasi pendidikan yang ada di desa, berita desa sebagai media branding dari desa membantu publikasi semua kegiatan yang ada di desa.</p>
Sejarah SIDESPIN
<p class="text-justify">Sidespin sendiri didedikasi oleh Dr. Edi Surya Negara, M.Kom selaku pembina dan sekumpulan mahasiswa aktif Fakultas Ilmu Komputer Universitas Bina Darma pada tanggal 15 juni 2021 untuk melakukan sebuah perubahan dengan ide sistem digital desa yang diharapkan menjadi salah satu tumpuan untuk menciptakan suatu konsep Desa maju, Rakyat Makmur Demi Indonesia Emas 2045.</p>
<p class="text-justify">Pada tanggal 12 Desember 2021 Sistem Informasi Desa Pintar di launching oleh Dr.Sunda Ariana, M.Pd, M.M selaku Rektor Universitas Bina Darma sebagai pengimplementasian Transformasi Digital bagi Desa dengan harapan untuk mempermudah penyebaran informasi seputar desa dan peningkatan perekonomian Masyarakat desa.</p>
<h5 class="text-center fw-bold">Visi</h5>
<p>Mewujudkan desa maju, Rakyat makmur demi terciptanya konsep Indonesia Emas 2045</p>
<h5 class="text-center fw-bold">Misi</h5>
<ol>
<li>Menyediakan platform/media Informatif seputar tentang desa</li>
<li>Meningkatkan kualitas teknologi daerah serta memajukan daerah dengan transformasi digital desa</li>
<li>Memberikan kesempatan bagi masyarakat untuk ikut berkerja sama dalam memajukan desa secara digital</li>
<li>Membantu meningkatkan perekonomian masyarakat dengan fitur yang akan kaya dari sidespin (Sejarah Desa, Adat dan Budaya desa, Produk Desa, Wisata Desa Pendidikan dan Berita Desa)</li>
</ol>',
    'Logo' => 'Logo_SIDESPIN.png',
    'LNIB' => 'FileRegistTenant/2025/02-01-2025/SIDESPIN/NIB_SIDESPIN.pdf',
    'LHALAL' => 'FileRegistTenant/2025/02-01-2025/SIDESPIN/HALAL_SIDESPIN.pdf',
    'LPIRT' => 'FileRegistTenant/2025/02-01-2025/SIDESPIN/PIRT_SIDESPIN.pdf',
    'LHKI' => 'FileRegistTenant/2025/02-01-2025/SIDESPIN/HKI_SIDESPIN.pdf',
    'LBPOM' => 'FileRegistTenant/2025/02-01-2025/SIDESPIN/BPOM_SIDESPIN.pdf',
    'LSNI' => 'FileRegistTenant/2025/02-01-2025/SIDESPIN/SNI_SIDESPIN.pdf',
    'FB' => NULL,
    'IG' => NULL,
    'statusTenant' => 'Diterima',
    'DateRegist' => '2025-01-02',
    'yearTenant' => '2025',
    'Slug' => 'sidespinjasa-komputer-perangkatnyafauzan-aziman',
    'created_at' => '2025-01-02 10:03:09',
    'updated_at' => '2025-01-02 10:03:52',
  ),
  6 =>
  array (
    'id' => 7,
    'Name' => 'Sella Oktania',
    'Age' => 25,
    'Gender' => 'Perempuan',
    'Email' => 'soniaflower@inkubator.com',
    'NoContactTenant' => '081122223333',
    'nameTenant' => 'Sonia Flowers',
    'sectorTenant' => 'Properti dan Real Estat',
    'addreasTenant' => 'Jl. Perikanan 3 no.288 Palembang',
    'aboutTenant' => '<p><strong>Nama Usaha:</strong>&nbsp;Sonia Flowers</p>
<p><strong>Deskripsi Usaha:</strong>&nbsp;Sonia Flowers adalah penyedia layanan sewa Flowers Box dan Papan Ucapan yang berlokasi di Palembang. Kami berkomitmen untuk membantu Anda menyampaikan pesan dan perasaan melalui rangkaian bunga yang indah dan papan ucapan yang elegan. Dengan dedikasi dan sentuhan seni yang tinggi, kami memastikan setiap produk yang kami tawarkan dapat memberikan kesan yang mendalam dan mengesankan.</p>
<p><strong>Layanan Kami:</strong></p>
<ol>
<li>
<p><strong>Flowers Box:</strong></p>
<ul>
<li>Menyediakan berbagai macam pilihan flowers box yang cantik dan eksklusif untuk berbagai acara seperti ulang tahun, pernikahan, hari jadi, dan lainnya.</li>
<li>Menggunakan bunga-bunga segar berkualitas tinggi yang dirangkai oleh tenaga ahli kami.</li>
<li>Desain flowers box yang elegan dan mewah, tersedia dalam berbagai ukuran dan warna sesuai kebutuhan dan selera pelanggan.</li>
</ul>
</li>
<li>
<p><strong>Papan Ucapan:</strong></p>
<ul>
<li>Menyediakan papan ucapan dengan desain yang beragam dan dapat disesuaikan dengan tema acara seperti pernikahan, ulang tahun, grand opening, dan acara spesial lainnya.</li>
<li>Tersedia dalam berbagai ukuran dan model, mulai dari yang klasik hingga modern.</li>
<li>Papan ucapan kami dibuat dengan material berkualitas tinggi dan dirancang untuk memberikan pesan yang jelas dan indah.</li>
</ul>
</li>
</ol>
<p><strong>Keunggulan Sonia Flowers:</strong></p>
<ul>
<li><strong>Kualitas Terbaik:</strong>&nbsp;Kami hanya menggunakan bunga segar pilihan yang dirangkai dengan teknik terbaik oleh tim florist profesional.</li>
<li><strong>Desain Eksklusif:</strong>&nbsp;Setiap produk kami dirancang secara eksklusif dan dapat disesuaikan dengan keinginan pelanggan.</li>
<li><strong>Pelayanan Prima:</strong>&nbsp;Kami mengutamakan kepuasan pelanggan dengan memberikan layanan konsultasi dan pengiriman yang cepat dan tepat waktu.</li>
<li><strong>Harga Kompetitif:</strong>&nbsp;Menawarkan harga yang bersaing dengan kualitas yang tidak tertandingi, memastikan nilai terbaik untuk setiap anggaran.</li>
</ul>
<p><strong>Visi:</strong>&nbsp;Menjadi penyedia layanan sewa flowers box dan papan ucapan terdepan di [Nama Kota/Daerah Anda] dengan menghadirkan produk-produk yang berkualitas dan layanan yang memuaskan.</p>
<p><strong>Misi:</strong></p>
<ol>
<li>Menghadirkan rangkaian bunga dan papan ucapan yang dapat menyampaikan pesan dengan sempurna.</li>
<li>Memberikan pelayanan terbaik dan mendengarkan kebutuhan setiap pelanggan.</li>
<li>Menjaga kualitas dan kesegaran bunga agar selalu memuaskan pelanggan.</li>
<li>Mengembangkan inovasi dalam desain dan layanan agar selalu sesuai dengan tren dan kebutuhan pasar.</li>
</ol>',
    'Logo' => 'Logo_Sonia Flowers.png',
    'LNIB' => 'FileRegistTenant/2025/02-01-2025/Sonia Flowers/NIB_Sonia Flowers.pdf',
    'LHALAL' => 'FileRegistTenant/2025/02-01-2025/Sonia Flowers/HALAL_Sonia Flowers.pdf',
    'LPIRT' => 'FileRegistTenant/2025/02-01-2025/Sonia Flowers/PIRT_Sonia Flowers.pdf',
    'LHKI' => 'FileRegistTenant/2025/02-01-2025/Sonia Flowers/HKI_Sonia Flowers.pdf',
    'LBPOM' => 'FileRegistTenant/2025/02-01-2025/Sonia Flowers/BPOM_Sonia Flowers.pdf',
    'LSNI' => 'FileRegistTenant/2025/02-01-2025/Sonia Flowers/SNI_Sonia Flowers.pdf',
    'FB' => NULL,
    'IG' => NULL,
    'statusTenant' => 'Diterima',
    'DateRegist' => '2025-01-02',
    'yearTenant' => '2025',
    'Slug' => 'sonia-flowersproperti-dan-real-estatsella-oktania',
    'created_at' => '2025-01-02 10:11:30',
    'updated_at' => '2025-01-02 10:11:48',
  ),
  7 =>
  array (
    'id' => 8,
    'Name' => 'Eem Prakas',
    'Age' => 25,
    'Gender' => 'Laki-Laki',
    'Email' => 'spark@inkubator.com',
    'NoContactTenant' => '081122223333',
    'nameTenant' => 'SPARK',
    'sectorTenant' => 'Peralatan Rumah Tangga',
    'addreasTenant' => 'Jl. Desa Pegayut Dusun II No 252',
    'aboutTenant' => '<p><strong>Nama Usaha:</strong>&nbsp;SPARK</p>
<p><strong>Tagline:</strong>&nbsp;"Memasak Dimanapun, Kapanpun!"</p>
<p><strong>Deskripsi Usaha:</strong></p>
<p>SPARK adalah penyedia layanan sewa kompor portabel dan grill yang bertujuan untuk memberikan solusi praktis dan efisien bagi kebutuhan memasak di luar ruangan. Kami menyediakan berbagai jenis kompor portabel dan grill berkualitas tinggi yang cocok untuk berbagai aktivitas, seperti piknik, berkemah, acara keluarga, pesta, dan kegiatan outdoor lainnya.</p>
<p><strong>Visi:</strong></p>
<p>Menjadi penyedia layanan sewa peralatan masak portabel terkemuka di Indonesia yang dikenal karena kualitas produk dan pelayanan yang prima.</p>
<p><strong>Misi:</strong></p>
<ol>
<li>Menyediakan berbagai pilihan kompor portabel dan grill dengan kualitas terbaik.</li>
<li>Memberikan kemudahan akses penyewaan melalui platform online dan offline.</li>
<li>Menjamin kepuasan pelanggan melalui pelayanan yang cepat, ramah, dan profesional.</li>
<li>Mendukung kegiatan outdoor dengan peralatan masak yang aman dan ramah lingkungan.</li>
<li>Mengedukasi masyarakat mengenai penggunaan peralatan masak portabel secara efektif dan efisien.</li>
</ol>
<p><strong>Layanan yang Ditawarkan:</strong></p>
<ol>
<li>
<p><strong>Sewa Kompor Portabel:</strong></p>
<ul>
<li>Berbagai tipe dan ukuran kompor sesuai kebutuhan.</li>
<li>Kompor dengan bahan bakar gas, listrik, atau bahan bakar alternatif lainnya.</li>
<li>Kompor multifungsi yang dapat digunakan untuk memasak, menggoreng, dan merebus.</li>
</ul>
</li>
<li>
<p><strong>Sewa Grill:</strong></p>
<ul>
<li>Grill portabel untuk berbagai jenis masakan, seperti BBQ, steak, dan seafood.</li>
<li>Berbagai ukuran grill, dari yang kecil untuk pasangan hingga yang besar untuk acara keluarga atau pesta.</li>
<li>Grill dengan teknologi terbaru yang memastikan masakan matang merata dan lezat.</li>
</ul>
</li>
<li>
<p><strong>Aksesoris Masak:</strong></p>
<ul>
<li>Penyewaan aksesoris pendukung seperti spatula, penjepit, sikat grill, dan lainnya.</li>
<li>Tersedia juga perlengkapan memasak tambahan seperti panci, wajan, dan alat-alat makan portabel.</li>
</ul>
</li>
<li>
<p><strong>Layanan Antar Jemput:</strong></p>
<ul>
<li>Pengantaran dan pengambilan peralatan ke lokasi pelanggan.</li>
<li>Layanan tersedia untuk wilayah yang lebih luas dengan biaya tambahan sesuai jarak.</li>
</ul>
</li>
<li>
<p><strong>Panduan dan Dukungan Pelanggan:</strong></p>
<ul>
<li>Buku panduan penggunaan yang disertakan dengan setiap sewa.</li>
<li>Layanan dukungan teknis melalui telepon atau chat untuk membantu pelanggan dalam penggunaan peralatan.</li>
</ul>
</li>
</ol>
<p><strong>Keunggulan SPARK:</strong></p>
<ul>
<li><strong>Kualitas Terjamin:</strong>&nbsp;Semua kompor dan grill yang disewakan telah melewati proses seleksi dan uji coba ketat.</li>
<li><strong>Harga Terjangkau:</strong>&nbsp;Tarif sewa kompetitif dengan berbagai paket menarik untuk pelanggan.</li>
<li><strong>Fleksibilitas:</strong>&nbsp;Pilihan sewa harian, mingguan, hingga bulanan sesuai kebutuhan.</li>
<li><strong>Kemudahan Akses:</strong>&nbsp;Proses pemesanan yang mudah melalui situs web dan aplikasi mobile SPARK.</li>
<li><strong>Pelayanan Prima:</strong>&nbsp;Tim SPARK yang profesional dan siap membantu memastikan pengalaman memasak Anda menjadi menyenangkan.</li>
</ul>
<p><strong>Target Pasar:</strong></p>
<ul>
<li>Pecinta kegiatan outdoor seperti camping, hiking, dan piknik.</li>
<li>Keluarga yang mengadakan acara atau pesta di luar ruangan.</li>
<li>Komunitas dan organisasi yang menyelenggarakan event outdoor.</li>
<li>Para penghobi kuliner yang ingin mencoba memasak di alam terbuka.</li>
</ul>
<p>Dengan SPARK, memasak di luar ruangan menjadi lebih mudah, praktis, dan menyenangkan. Segera bergabung dengan ribuan pelanggan kami yang telah merasakan kenyamanan dan keunggulan layanan SPARK.</p>',
    'Logo' => 'Logo_SPARK.png',
    'LNIB' => 'FileRegistTenant/2025/02-01-2025/SPARK/NIB_SPARK.pdf',
    'LHALAL' => 'FileRegistTenant/2025/02-01-2025/SPARK/HALAL_SPARK.pdf',
    'LPIRT' => 'FileRegistTenant/2025/02-01-2025/SPARK/PIRT_SPARK.pdf',
    'LHKI' => 'FileRegistTenant/2025/02-01-2025/SPARK/HKI_SPARK.pdf',
    'LBPOM' => 'FileRegistTenant/2025/02-01-2025/SPARK/BPOM_SPARK.pdf',
    'LSNI' => 'FileRegistTenant/2025/02-01-2025/SPARK/SNI_SPARK.pdf',
    'FB' => NULL,
    'IG' => NULL,
    'statusTenant' => 'Diterima',
    'DateRegist' => '2025-01-02',
    'yearTenant' => '2025',
    'Slug' => 'sparkperalatan-rumah-tanggaeem-prakas',
    'created_at' => '2025-01-02 10:13:56',
    'updated_at' => '2025-01-02 10:14:08',
  ),
  8 =>
  array (
    'id' => 9,
    'Name' => 'Budi Rizki Romadon dan Nanda Rizki Kurniawan',
    'Age' => 25,
    'Gender' => 'Laki-Laki',
    'Email' => 'ternaklele@inkubator.com',
    'NoContactTenant' => '081122223333',
    'nameTenant' => 'Ternak Lele 2 Sekawan',
    'sectorTenant' => 'Bibit dan Pangan Hewan',
    'addreasTenant' => 'Jalan mayor Zen depan lorong terusan laut RT.12 Rw.03 kel.sel lais kecamatan Kalidoni, Palembang 30119',
    'aboutTenant' => '<p><strong>Nama Usaha:</strong>&nbsp;Ternak Lele 2Sekawan</p>
<p><strong>Jenis Usaha:</strong>&nbsp;Budidaya dan Penjualan Ikan Lele</p>
<p><strong>Visi:</strong>&nbsp;Menjadi penyedia ikan lele berkualitas tinggi yang mendukung ketahanan pangan lokal dan meningkatkan kesejahteraan peternak lele di Indonesia.</p>
<p><strong>Misi:</strong></p>
<ol>
<li>Menghasilkan ikan lele berkualitas dengan menggunakan teknik budidaya yang ramah lingkungan.</li>
<li>Menyediakan pasokan ikan lele yang kontinu dan stabil untuk memenuhi kebutuhan pasar lokal dan nasional.</li>
<li>Meningkatkan keterampilan dan pengetahuan peternak melalui pelatihan dan konsultasi.</li>
<li>Membangun jaringan pemasaran yang luas dan efisien untuk memudahkan distribusi hasil budidaya.</li>
</ol>
<p><strong>Deskripsi Usaha:</strong>&nbsp;Ternak Lele 2Sekawan adalah usaha yang bergerak di bidang budidaya ikan lele dengan fokus pada kualitas dan keberlanjutan. Kami mengelola kolam-kolam ikan dengan teknologi modern dan ramah lingkungan, memastikan ikan lele yang dihasilkan memiliki kualitas terbaik.</p>
<p><strong>Produk dan Layanan:</strong></p>
<ol>
<li><strong>Penjualan Ikan Lele Segar:</strong>&nbsp;Menyediakan ikan lele segar yang siap konsumsi bagi pasar lokal dan regional.</li>
<li><strong>Bibit Ikan Lele:</strong>&nbsp;Menjual bibit lele unggul bagi peternak lain yang ingin memulai atau mengembangkan usaha budidaya lele.</li>
<li><strong>Pelatihan dan Konsultasi:</strong>&nbsp;Memberikan pelatihan budidaya ikan lele dan konsultasi manajemen kolam kepada peternak baru dan yang sudah berpengalaman.</li>
<li><strong>Paket Kemitraan:</strong>&nbsp;Menyediakan paket kemitraan untuk investor atau individu yang tertarik dalam bisnis budidaya ikan lele.</li>
</ol>
<p><strong>Keunggulan:</strong></p>
<ol>
<li><strong>Kualitas Produk:</strong>&nbsp;Ikan lele yang dihasilkan memiliki rasa yang lezat dan tekstur daging yang kenyal, bebas dari bahan kimia berbahaya.</li>
<li><strong>Teknologi Modern:</strong>&nbsp;Menggunakan sistem resirkulasi air dan manajemen pakan yang efisien untuk memastikan pertumbuhan ikan optimal dan lingkungan kolam yang bersih.</li>
<li><strong>Pengalaman dan Keahlian:</strong>&nbsp;Didukung oleh tim ahli yang berpengalaman dalam budidaya ikan lele, memastikan proses produksi berjalan dengan baik dan efisien.</li>
<li><strong>Kepuasan Pelanggan:</strong>&nbsp;Mengutamakan kepuasan pelanggan dengan menyediakan produk yang konsisten dan layanan yang responsif.</li>
</ol>
<p><strong>Pasar dan Pelanggan:</strong></p>
<ul>
<li><strong>Pasar Lokal:</strong>&nbsp;Warung makan, restoran, pasar tradisional, dan konsumen rumah tangga di sekitar lokasi usaha.</li>
<li><strong>Pasar Regional:</strong>&nbsp;Supermarket, distributor ikan, dan pasar grosir di kota-kota terdekat.</li>
</ul>
<p><strong>Rencana Pengembangan:</strong></p>
<ol>
<li><strong>Ekspansi Kolam:</strong>&nbsp;Menambah jumlah kolam budidaya untuk meningkatkan kapasitas produksi.</li>
<li><strong>Diversifikasi Produk:</strong>&nbsp;Mengembangkan produk olahan dari ikan lele seperti fillet lele, abon lele, dan nugget lele.</li>
<li><strong>Peningkatan Teknologi:</strong>&nbsp;Menerapkan teknologi IoT untuk monitoring kondisi kolam secara real-time guna meningkatkan efisiensi produksi.</li>
<li><strong>Pemasaran Digital:</strong> Memanfaatkan platform digital untuk meningkatkan pemasaran dan penjualan online, menjangkau lebih banyak konsumen potensial.</li>
</ol>',
    'Logo' => 'Logo_Ternak Lele 2 Sekawan.png',
    'LNIB' => 'FileRegistTenant/2025/02-01-2025/Ternak Lele 2 Sekawan/NIB_Ternak Lele 2 Sekawan.pdf',
    'LHALAL' => 'FileRegistTenant/2025/02-01-2025/Ternak Lele 2 Sekawan/HALAL_Ternak Lele 2 Sekawan.pdf',
    'LPIRT' => 'FileRegistTenant/2025/02-01-2025/Ternak Lele 2 Sekawan/PIRT_Ternak Lele 2 Sekawan.pdf',
    'LHKI' => 'FileRegistTenant/2025/02-01-2025/Ternak Lele 2 Sekawan/HKI_Ternak Lele 2 Sekawan.pdf',
    'LBPOM' => 'FileRegistTenant/2025/02-01-2025/Ternak Lele 2 Sekawan/BPOM_Ternak Lele 2 Sekawan.pdf',
    'LSNI' => 'FileRegistTenant/2025/02-01-2025/Ternak Lele 2 Sekawan/SNI_Ternak Lele 2 Sekawan.pdf',
    'FB' => NULL,
    'IG' => NULL,
    'statusTenant' => 'Diterima',
    'DateRegist' => '2025-01-02',
    'yearTenant' => '2025',
    'Slug' => 'ternak-lele-2-sekawanbibit-dan-pangan-hewanbudi-rizki-romadon-dan-nanda-rizki-kurniawan',
    'created_at' => '2025-01-02 10:16:27',
    'updated_at' => '2025-01-02 10:16:42',
  ),
));
    }
}
