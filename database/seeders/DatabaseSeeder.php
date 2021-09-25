<?php

namespace Database\Seeders;

use App\Models\Berita;
use App\Models\Gallery;
use App\Models\Layanan;
use App\Models\Program;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory(10)->create();

        Gallery::create([
            'judul_gallery' => 'gambar pertama',
            'kategori' => 'yatim&dhuafa',
            'image' => 'yatim3.png'
        ]);

        Gallery::create([
            'judul_gallery' =>  'gambar_kedua',
            'kategori' => 'pendidikan',
            'image' => 'pendidikan3.png'
        ]);

        Gallery::create([
            'judul_gallery' =>  'gambar_ketiga',
            'kategori' => 'kesehatan',
            'image' => 'kesehatan2.png'
        ]);

        Gallery::create([
            'judul_gallery' =>  'gambar_keempat',
            'kategori' => 'ekonomi',
            'image' => 'ekonomi2.png'
        ]);

        Gallery::create([
            'judul_gallery' =>  'gambar_kelima',
            'kategori' => 'dakwah',
            'image' => 'dakwah2.png'
        ]);

        Gallery::create([
            'judul_gallery' =>  'gambar_keenam',
            'kategori' => 'kemanusiaan',
            'image' => 'kemanusiaan2.png'
        ]);


        //Tabel Layanan
        Layanan::create([
            'judul_layanan' =>  'Layanan Konsultasi',
            'deskripsi' => 'layanan kami akan membantu anda dalam hal keraguan untuk berdonasi di yayasan peduli',
            'logo' => 'service-icon1.png',
            'link' =>  'konsultasi'
        ]);

        Layanan::create([
            'judul_layanan' => 'Alur Daftar',
            'deskripsi' => 'Proses untuk pendaftaran masuk di yayasan peduli',
            'logo' => 'service-icon2.png',
            'link' => 'alurDaftar'
        ]);

        Layanan::create([
            'judul_layanan' => 'Buku Islam',
            'deskripsi' => 'Terdapat bahan bacaan islam yang menganjurkan anda untuk bersodaqoh',
            'logo' => 'service-icon3.png',
            'link' => 'bukuIslam'
        ]);

        Layanan::create([
            'judul_layanan' => 'Cara Donasi',
            'deskripsi' => 'Bagaimana cara untuk berdonasi di berbagai platform resmi yayasan peduli',
            'logo' => 'service-icon4.png',
            'link' => 'caraDonasi'
        ]);

        //tabel Program
        Program::create([
            'judul_program' => 'Pembangunan Gedung Sekolah Yayasan Peduli',
            'deskripsi' => 'Di Kabupaten Pasuruan Jawa Timur, SIG membantu pembangunan sepuluh lembaga pendidikan yaitu Gedung Yayasan Al Furqon, Gedung Miftahul Huda II, Ruang Kelas MTs Miftahul Ulum Bajangan, RA Abu Sofyan Tsaury, RA Muslimat NU 102 Raden Rahmat, Madrasah Aliyah Darul Ulum Pacarkeling, MA Miftahul Ulum Puntir dan Rehabilitasi Gedung Kelas MI Talimus Shibiyan, Yayasan Pendidikan Al-Falah serta Gedung Madin Tsamtorul Afkar.

            Sedangkan di Bogor, Jawa Barat,  SIG memberikan bantuan kepada tiga lembaga pendidikan diantaranya Yayasan Al Ittihaadul Jadiid, Pabuaran Mekar, Cibinong, Pembangunan Majlis Ta’lim Al-Hidayah, Cibanteng, Kecamatan Ciampea; dan Yayasan Pendidikan Al-Madinah Sanja, Citeureup.',
            'image' =>  'pembangunan.jpg'
        ]);

        Program::create([
            'judul_program' => 'Program Penanganan Anak Yatim Terdampak Covid',
            'deskripsi' => 'BAZNAS Sleman Santuni Anak Yatim Piatu Terdampak COVID-19
                            08/09/2021 Media Center Sleman
                            Sleman – Badan Amil Zakat Nasional (BAZNAS) Kabupaten Sleman bekerja sama dengan Lembaga Amil Zakat dan Sodaqoh Muhmmadiyah (LAZISMU) menyalurkan santunan bagi anak-anak yatim piatu di Kabupaten Sleman Sleman pada Selasa (7/9/2021) di Pendopo Parasamya  Seketariat Daerah Kabupaten Sleman.
                            Muhyi Darmaji, Wakil Ketua 3 Baznas Bidang Perencanaan, Keuangan dan Pelaporan  menyampaikan satunan anak yatim ini merupakan progam rutin dari Baznas di Bulan Muharam, dan bertujuan untuk membantu anak yatim yang orang tuanya meninggal karena COVID-19
                            “Pada saat ini ada anak kita yang betul-betul kondisinya sangat mengkhawatirkan karena ditinggal oleh orang tuanya dan saat ini mereka butuh bantuan dari kita semua,” ungkap Muhyi Darmaji.
                            Ia menyampaikan dalam program acara satunan bagi anak yatim ini, Baznas telah menyiapkan 300 paket, dengan nominal 1 paketnya senilai Rp.250.000, yang nantinya akan dibagikan kepada NU, Muhammadiyah, serta Pokjalu
                            “Untuk NU 100 paket, untuk Muhammadiyah 100 paket, dan untuk Pokjalu 100 paket,” jelasnya.',
            'image' => 'slide2.jpg'
        ]);

        Program::create([
            'judul_program' => 'Sedekahmu adalah Naungan akhiratmu',
            'deskripsi' => 'Memberikan sebagian harta benda dengan tujuan untuk mendekatkan diri kepada Allah adalah merupakan salah satu bentuk sedekah.
                            Maka dapat dikatakan semua kebaikan yang dilakukan bagi kemashlahatan umum seperti membantu orang lain yang membutuhkannya dengan maksud mengharap ridho Allah dapat menjadi bagian dari sedekah.
                            Dengan bersedekah, kekayaan seorang muslim tidak akan berkurang justru menghasilkan banyak keuntungan dan keberkahan baginya di dunia dan akhirat sebagaimana yang telah Allah Azza wa Jalla janjikan.
                            Allah Ta’ala berfirman:
                            Siapakah yang mau memberi pinjaman kepada Allah, pinjaman yang baik (menafkahkan harta-nya di jalan Allah), maka Allah akan melipat-gandakan pembayaran kepadanya dengan lipat ganda yang banyak… [Al-Baqarah: 245]',
            'image' =>   'sedekah.jpg'
        ]);

        //Tabel Berita
        Berita::create([
            'judul_berita' => 'Melalui Bantuan Wakaf Al-Quran, Rumah Yatim Padang Dukung Semangat Santri TPA Ruhul Islam Jadi Hafidz',
            'author' => 'Riyan',
            'deskripsi' => '',
            'image' => 'berita/S8pHjZU5yKpfgdJjlV6LLET4qgTovLeUorRITpqQ.png'
        ]);

        Berita::create([
            'judul_berita' => 'Siswa Yatim dan Kurang Mampu di SD Negeri 22 Pekanbaru Terima Bantuan Pendidikan Rumah Yatim',
            'author' => 'Yudis', 
            'deskripsi' => '',
            'image' => 'berita/ZWF8v4JFDqMtpIXV9BKHIENhSLVdGXLKVc6Re9OW.png'
        ]);

        Berita::create([
            'judul_berita' => 'Gandeng Rumah Yatim, DPP INSA Adakan Bakti Sosial Bersama 250 Anak Yatim Akibat Covid',
            'author' => 'Ansori',
            'deskripsi' => '',
            'image' => 'berita/CRYGQtutb5QxZHtOYgeo71FjYxUAjp1RIzelnbQR.png',
        ]);
    }
}
