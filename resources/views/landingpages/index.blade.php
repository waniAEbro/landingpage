@extends('layouts.landingpage')

@section('content')
    <!-- hero area -->
    <section class="hero-section hero" id="home" data-background=""
        style="background-image: url(/images/hero-area/banner-bg.png);">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center zindex-1">
                    <h1 class="mb-3">Seluruh Kebutuhan Bisnis Anda<br>
                        Ada di Genggaman Anda</h1>
                    <p class="mb-4">Jangan biarkan sistem mengatur bisnis anda, biarkan bisnis yang mengatur sistem anda.
                        Rancang sistem informasi sesuai kebutuhan bisnis anda bersama kami</p>
                    <a href="https://wa.me/6285728334774?text=Halo%20Serpihan%20Tech%20Solution%2C%0A%0ASaya%20tertarik%20untuk%20mengetahui%20lebih%20lanjut%20tentang%20Serpihan%20Tech%20Solution.%20Bisakah%20Anda%20memberikan%20informasi%20lebih%20detail%20tentang%20perusahaan%2C%20produk%20atau%20layanan%20yang%20diberikan%20lebih%20lanjut%20%3F%0A%0ATerima%20kasih.%0A%0ASalam%20hangat%2C"
                        class="btn btn-secondary btn-lg" target="_blank">Contact Us</a>
                    <!-- banner image -->
                    <img class="img-fluid w-75 banner-image" src="/images/hero-area/banner-img.png" alt="banner-img">
                </div>
            </div>
        </div>
        <!-- background shapes -->
        <div id="scene">
            <img class="img-fluid hero-bg-1 up-down-animation" src="/images/background-shape/feature-bg-2.png"
                alt="">
            <img class="img-fluid hero-bg-2 left-right-animation" src="/images/background-shape/seo-ball-1.png"
                alt="">
            <img class="img-fluid hero-bg-3 left-right-animation" src="/images/background-shape/seo-half-cycle.png"
                alt="">
            <img class="img-fluid hero-bg-4 up-down-animation" src="/images/background-shape/green-dot.png" alt="">
            <img class="img-fluid hero-bg-5 left-right-animation" src="/images/background-shape/blue-half-cycle.png"
                alt="">
            <img class="img-fluid hero-bg-6 up-down-animation" src="/images/background-shape/seo-ball-1.png" alt="">
            <img class="img-fluid hero-bg-7 left-right-animation" src="/images/background-shape/yellow-triangle.png"
                alt="">
            <img class="img-fluid hero-bg-8 up-down-animation" src="/images/background-shape/service-half-cycle.png"
                alt="">
            <img class="img-fluid hero-bg-9 up-down-animation" src="/images/background-shape/team-bg-triangle.png"
                alt="">
        </div>
    </section>
    <!-- /hero-area -->

    <!-- feature -->
    <section class="section feature mb-0" id="feature">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-title">Kenapa Serpihan ?</h2>
                    <p class="mb-100">Serpihan Tech Solution menawarkan banyak keunggulan yang dapat menyokong bisnis anda
                    </p>
                </div>
                <!-- feature item -->
                <div class="col-md-4 mb-80">
                    <div class="d-flex align-items-center">
                        <div>
                            <i class="fa-solid fa-sliders feature-icon mr-4"></i>
                        </div>
                        <div>
                            <h4>Customizable</h4>
                            <p class="fs-6">Atur module sesuai dengan kebutuhan anda, sesuaikan modul dengan kebutuhan
                                anda</p>
                        </div>
                    </div>
                </div>
                <!-- feature item -->
                <div class="col-md-4 mb-80">
                    <div class="d-flex align-items-center">
                        <div>
                            <i class="fa-solid fa-bolt feature-icon mr-4"></i>
                        </div>
                        <div>
                            <h4>Full Support</h4>
                            <p class="fs-6">Modul mengalami masalah, tenang kami selalu ada untuk mengatasi masalah anda
                            </p>
                        </div>
                    </div>
                </div>
                <!-- feature item -->
                <div class="col-md-4 mb-80">
                    <div class="d-flex align-items-center">
                        <div>
                            <i class="fa-solid fa-wallet feature-icon mr-4"></i>
                        </div>
                        <div>
                            <h4>Best Value</h4>
                            <p class="fs-6">Atur pengeluaran anda sesuai dengan kebutuhan anda, pilih modul yang paling
                                cocok untuk
                                bisnis anda</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <img class="feature-bg-1 up-down-animation" src="/images/background-shape/feature-bg-1.png" alt="bg-shape">
        <img class="feature-bg-2 left-right-animation" src="/images/background-shape/feature-bg-2.png" alt="bg-shape">
    </section>
    <!-- /feature -->

    {{-- Apa Itu Sekolahin --}}
    <section class="section feature">
        <div class="container">
            <!-- feature item -->
            <div class="row align-items-center">
                <div class="col-md-6 text-justify">
                    <h2 class="section-title">Apa Itu Sekolah.in ?</h2>
                    <p class="mb-5 fs-6">Sekolah.in merupakan produk unggulan dari CV Serpihan Tech Solution yang bergerak
                        dibidang pengembangan sistem informasi berbasis web dan mobile. Sekolah.in akan membantu anda dalam
                        mengelola data sekolah anda dengan mudah dan cepat.
                    </p>
                    <div>
                        <p class="fs-6">
                            <i class="fa-solid fa-circle-check me-3 text-success"></i>Sekolah.in, aplikasi untuk <span
                                class="fw-bold">mengelola
                                data sekolah</span>
                        </p>
                        <p class="fs-6">
                            <i class="fa-solid fa-circle-check me-3 text-success"></i>Kelola seluruh sekolah dengan solusi
                            <span class="fw-bold">automasi, kapanpun & dimanapun</span>
                        </p>
                        <p class="fs-6">
                            <i class="fa-solid fa-circle-check me-3 text-success"></i>Membantu <span
                                class="fw-bold">administratif</span> sekolah menjadi <span class="fw-bold">mudah &
                                efisien</span>
                        </p>
                        <p class="fs-6">
                            <i class="fa-solid fa-circle-check me-3 text-success"></i><span class="fw-bold">Pembagian jam
                                pelajaran</span> lebih mudah
                            dengan <span class="fw-bold">otomasi penjadwalan</span>
                        </p>
                        <p class="fs-6">
                            <i class="fa-solid fa-circle-check me-3 text-success"></i><span class="fw-bold">Presensi
                                guru</span> menjadi lebih mudah
                            dengan <span class="fw-bold">"Sekali Tap" NFC</span>
                        </p>
                        <p class="fs-6">
                            <i class="fa-solid fa-circle-check me-3 text-success"></i>Pembuatan <span class="fw-bold">Rapor
                                siswa</span> yang lebih mudah
                        </p>
                    </div>
                </div>
                <div class="col-md-6 d-flex justify-content-center">
                    ini adalah gambar
                </div>
            </div>
        </div>
        <img class=" feature-bg-2 up-down-animation" src="/images/background-shape/feature-bg-2.png" alt="bg-shape">
        <img class=" feature-bg-1 left-right-animation" src="/images/background-shape/feature-bg-2.png" alt="bg-shape">
    </section>
    {{-- Apa Itu Sekolahin --}}

    <!-- marketing -->
    <section class="section-lg seo">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <div class="seo-image">
                        <img class="img-fluid" src="/images/marketing/marketing.png" alt="form-img">
                    </div>
                </div>
                <div class="col-md-5">
                    <h2 class="section-title">Manfaat Untuk Sekolah</h2>
                    <p class="fs-6 ">
                        <i class="fa-solid fa-circle-check me-3 text-success"></i>Manajemen <span class="fw-bold">Data
                            Sekolah</span> yang Tertata
                    </p>
                    <p class="fs-6 ">
                        <i class="fa-solid fa-circle-check me-3 text-success"></i>Kemudahan Pengaturan <span
                            class="fw-bold">Administrasi</span>
                    </p>
                    <p class="fs-6 ">
                        <i class="fa-solid fa-circle-check me-3 text-success"></i>Kemudahan <span
                            class="fw-bold">Pencatatan Tagihan dan Keuangan</span>
                    </p>
                    <p class="fs-6 ">
                        <i class="fa-solid fa-circle-check me-3 text-success"></i>Kemudahan <span
                            class="fw-bold">Pembagian Jam Pelajaran</span> pada
                        guru
                    </p>
                </div>
            </div>
        </div>
        <!-- background image -->
        <img class="img-fluid seo-bg" src="/images/backgrounds/seo-bg.png" alt="seo-bg">
        <!-- background-shape -->
        <img class="seo-bg-shape-1 left-right-animation" src="/images/background-shape/seo-ball-1.png" alt="bg-shape">
        <img class="seo-bg-shape-2 up-down-animation" src="/images/background-shape/seo-half-cycle.png" alt="bg-shape">
        <img class="seo-bg-shape-3 left-right-animation" src="/images/background-shape/seo-ball-2.png" alt="bg-shape">
    </section>
    <!-- /marketing -->

    <!-- service -->
    <section class="section-lg service">
        <div class="container">
            <div class="row justify-content-between align-items-center">
                <div class="col-md-5 order-2 order-md-1">
                    <h2 class="section-title">Manfaat Untuk Siswa</h2>
                    <p class="fs-6 ">
                        <i class="fa-solid fa-circle-check me-3 text-success"></i>Informasi <span
                            class="fw-bold">Keuangan</span> dan <span class="fw-bold">Biaya Akademik</span>
                    </p>
                    <p class="fs-6 ">
                        <i class="fa-solid fa-circle-check me-3 text-success"></i>Kemudahan <span
                            class="fw-bold">Berkomunikasi</span> dengan <span class="fw-bold">Pihak
                            Sekolah</span>
                    </p>
                    <p class="fs-6 ">
                        <i class="fa-solid fa-circle-check me-3 text-success"></i>Kemudahan Mendapatkan <span
                            class="fw-bold">Pemberitahuan
                            Pengumuman</span>
                    </p>
                    <p class="fs-6 ">
                        <i class="fa-solid fa-circle-check me-3 text-success"></i><span class="fw-bold">Penilaian</span>
                        yang transparan
                    </p>
                </div>
                <div class="col-md-7 order-1 order-md-2">
                    <img class="img-fluid layer-3" src="/images/service/service.png" alt="service">
                </div>
            </div>
        </div>
        <!-- background image -->
        <img class="img-fluid service-bg" src="/images/backgrounds/service-bg.png" alt="service-bg">
        <!-- background shapes -->
        <img class="service-bg-shape-1 up-down-animation" src="/images/background-shape/service-half-cycle.png"
            alt="background-shape">
        <img class="service-bg-shape-2 left-right-animation" src="/images/background-shape/feature-bg-2.png"
            alt="background-shape">
    </section>
    <!-- /service -->

    {{-- Pilihan Modul --}}
    <section class="section feature">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-12 text-center">
                    <h2 class="section-title">Pilihan Modul Sekolah.in</h2>
                    <p class="mb-100 fs-6">Sekolah.in menawarkan banyak pilihan modul yang dapat disesuaikan dengan
                        kebutuhan sekolah anda
                    </p>
                </div>
                <div class="col-md-6">
                    <div class="accordion" id="accordion1">
                        <div class="mb-2 border">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed fw-bold" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true"
                                    aria-controls="collapseOne">
                                    Kesiswaan
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordion1">
                                <div class="accordion-body text-justify">
                                    Modul yang berfokus pada pengolahan data siswa, mulai data diri siswa, kelas, hingga
                                    pengumuman penting yang bisa langsung masuk ke dalam ponsel orang tua wali. Modul ini
                                    sangat cocok untuk sekolah anda yang belum memiliki sistem pengelolaan siswa.
                                </div>
                            </div>
                        </div>
                        <div class="mb-2 border">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed fw-bold" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false"
                                    aria-controls="collapseTwo">
                                    Humas
                                </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordion1">
                                <div class="accordion-body text-justify">
                                    Modul ini berfokus pada pengelolaan data tamu serta keluar masuk surat sekolah. Modul
                                    ini sangat cocok untuk sekolah anda yang masih menyimpan data tamu dan surat secara
                                    manual.
                                </div>
                            </div>
                        </div>
                        <div class="mb-2 border">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed fw-bold" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false"
                                    aria-controls="collapseThree">
                                    Kepegawaian
                                </button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordion1">
                                <div class="accordion-body text-justify">
                                    Modul ini berfokus pada pengelolaan data diri pegawai, mulai dari nama hingga jabatan
                                    pegawai, modul ini juga menyertakan fitur presensi pegawai pada kelas harga tertentu.
                                    Jadi modul ini cocok untuk sekolah anda yang membutuhkan presensi digital untuk pegawai.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="accordion" id="accordion2">
                        <div class="mb-2 border">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed fw-bold" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#collapse2One" aria-expanded="true"
                                    aria-controls="collapse2One">
                                    Akademik
                                </button>
                            </h2>
                            <div id="collapse2One" class="accordion-collapse collapse" data-bs-parent="#accordion2">
                                <div class="accordion-body text-justify">
                                    Modul ini berfokus pada pengelolaan data akademik, mulai dari tahun ajaran, pembagian
                                    jam pelajaran untuk guru, hingga penilaian dan rapor. Jadi modul ini merupakan modul
                                    unggulan dari Sekolah.in, dengan otomasi penjadwalan hingga sistem penilaian dan rapor,
                                    modul ini bisa menjadi pilihan utama untuk sekolah anda.
                                </div>
                            </div>
                        </div>
                        <div class="mb-2 border">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed fw-bold" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#collapse2Two" aria-expanded="false"
                                    aria-controls="collapse2Two">
                                    Keuangan
                                </button>
                            </h2>
                            <div id="collapse2Two" class="accordion-collapse collapse" data-bs-parent="#accordion2">
                                <div class="accordion-body text-justify">
                                    Modul ini berofkus pada pengelolaan data keuangan sekolah, mulai dari pembayaran spp,
                                    ppdb yang sudah menggunakan metode digital mulai dari dompet digital, transfer bank,
                                    hingga QRIS, kemudian ada fitur pembukuan kas, hingga notifikasi pembayaran yang bisa
                                    terhubung dengan whatsapp maupun telegram. Modul ini sangat cocok untuk sekolah yang
                                    pengelolaan data keuangannya masih mengalami sering terjadi kesalahan.
                                </div>
                            </div>
                        </div>
                        <div class="mb-2 border">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed fw-bold" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#collapse2Three" aria-expanded="false"
                                    aria-controls="collapse2Three">
                                    Pimpinan
                                </button>
                            </h2>
                            <div id="collapse2Three" class="accordion-collapse collapse" data-bs-parent="#accordion2">
                                <div class="accordion-body text-jujstify">
                                    Modul ini berfokus pada laporan statistik dan performa sekolah untuk dapat dianalisa
                                    oleh kepala sekolah. Modul ini cocok untuk kepala sekolah anda yang ingin selalu
                                    mengetahui performa sekolah secara realtime.
                                </div>
                            </div>
                        </div>
                        <div class="mb-2 border">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed fw-bold" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#collapse2Four" aria-expanded="false"
                                    aria-controls="collapse2Four">
                                    Laporan
                                </button>
                            </h2>
                            <div id="collapse2Four" class="accordion-collapse collapse" data-bs-parent="#accordion2">
                                <div class="accordion-body text-justify">
                                    Modul ini berfokus pada pembuatan laporan, mulai dari laporan pembayaran, keuangan,
                                    kesiswaan, hingga laporan akademik secara praktis. Modul ini sangat cocok untuk sekolah
                                    yang kesulitan dalam membuat laporan secara manual dalam jumlah banyak.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <img class="feature-bg-1 up-down-animation" src="/images/background-shape/feature-bg-1.png" alt="bg-shape">
        <img class="feature-bg-2 left-right-animation" src="/images/background-shape/feature-bg-2.png" alt="bg-shape">
    </section>
    {{-- Pilihan Modul --}}

    <!-- pricing -->
    <section class="section-lg pb-0 pricing" id="pricing">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-title">Paket Harga</h2>
                    <p class="mb-50">Paket harga lengkap sesuai dengan kebutuhan anda
                    </p>
                </div>
                <div class="col-lg-12 mx-auto">
                    <div class="row justify-content-center">
                        <!-- pricing table -->
                        <div class=" col-lg-4 mb-5">
                            <div
                                class="rounded text-center pricing-table table-1 text-light d-flex flex-column justify-content-between gap-3 h-100">
                                <h3>Basic</h3>
                                <small><s>1.090.000</s><span class="badge bg-light text-dark ms-2">Diskon
                                        45%</span></small>
                                <h1><span>Rp</span>600 k <span>/bulan</span></h1>
                                <ol class="fs-6 list-group">
                                    <li>Paket standar</li>
                                    <li>Dukungan Maintenance</li>
                                    <li>Server dan Domain Default</li>
                                </ol>
                                <a target="_blank"
                                    href="https://wa.me/6285728334774?text=Halo%20Serpihan%20Tech%20Solution%2C%0A%0ASaya%20tertarik%20untuk%20membeli%20produk%20*Basic*%20sekolahin%2C%20mohon%20untuk%20bisa%20diproses%20lebih%20lanjut%0A%0ATerima%20kasih.%0A%0ASalam%20hangat%2C"
                                    class="btn btn-light fw-bold px-2 mt-5">Buy Now</a>
                                <div class="accordion" id="accordion-basic">
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="heading-basic">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#basic-collapse"
                                                aria-expanded="false" aria-controls="basic-collapse">
                                                Detail Fitur
                                            </button>
                                        </h2>
                                        <div id="basic-collapse" class="accordion-collapse collapse"
                                            aria-labelledby="heading-basic" data-bs-parent="#accordion-basic">
                                            <div class="accordion-body text-justify">

                                                <h5 class="text-center my-4">Fitur Kesiswaan</h5>
                                                <p><i class="fa-solid fa-circle-check me-3 text-success"></i>Unit, Kelas,
                                                    Siswa
                                                </p>
                                                <p><i class="fa-solid fa-circle-check me-3 text-success"></i>
                                                    Distribusi Siswa ke Kelas
                                                </p>
                                                <p><i class="fa-solid fa-circle-check me-3 text-success"></i>Buku Induk
                                                    Siswa (NIS)
                                                </p>
                                                <p><i class="fa-solid fa-circle-xmark me-3 text-danger"></i>Konseling dan
                                                    izin Keluar</p>
                                                <p><i class="fa-solid fa-circle-xmark me-3 text-danger"></i>Kesehatan</p>
                                                <p><i class="fa-solid fa-circle-xmark me-3 text-danger"></i>Pengumuman
                                                    Telegram</p>

                                                <h5 class="text-center my-4">Fitur Humas</h5>
                                                <p><i class="fa-solid fa-circle-check me-3 text-success"></i>Buku Tamu</p>
                                                <p><i class="fa-solid fa-circle-check me-3 text-success"></i>Surat
                                                    Masuk/Keluar</p>
                                                <p><i class="fa-solid fa-circle-xmark me-3 text-danger"></i>Buat Surat
                                                    Resmi</p>

                                                <h5 class="text-center my-4">Fitur Kepegawaian</h5>
                                                <p><i class="fa-solid fa-circle-check me-3 text-success"></i>Jabatan dan
                                                    daftar
                                                    Pegawai</p>
                                                <p><i class="fa-solid fa-circle-xmark me-3 text-danger"></i>Presensi
                                                    Pegawai</p>

                                                <h5 class="text-center my-4">Fitur Akademik</h5>
                                                <p><i class="fa-solid fa-circle-check me-3 text-success"></i>Setting tahun
                                                    Ajaran /
                                                    Semester</p>
                                                <p><i class="fa-solid fa-circle-check me-3 text-success"></i>Pindah Kelas
                                                    dan Kelulusan
                                                </p>
                                                <p><i class="fa-solid fa-circle-xmark me-3 text-danger"></i>Mata Pelajaran
                                                </p>
                                                <p><i class="fa-solid fa-circle-xmark me-3 text-danger"></i>Jam dan
                                                    Jadwal Pelajaran</p>
                                                <p><i class="fa-solid fa-circle-xmark me-3 text-danger"></i>Presensi Harian
                                                </p>
                                                <p><i class="fa-solid fa-circle-xmark me-3 text-danger"></i>Jurnal
                                                    Mengajar dan Alumni</p>
                                                <p><i class="fa-solid fa-circle-xmark me-3 text-danger"></i>Penilaian</p>
                                                <p><i class="fa-solid fa-circle-xmark me-3 text-danger"></i>Rapor,
                                                    Transkrip dan SKL</p>
                                                <p><i class="fa-solid fa-circle-xmark me-3 text-danger"></i>SIlabus dan RPP
                                                </p>
                                                <p><i class="fa-solid fa-circle-xmark me-3 text-danger"></i>Kalender
                                                    Pendidikan</p>

                                                <h5 class="text-center my-4">Fitur Keuangan</h5>
                                                <p><i class="fa-solid fa-circle-check me-3 text-success"></i>Pembayaran SPP
                                                </p>
                                                <p><i class="fa-solid fa-circle-check me-3 text-success"></i>Gaji
                                                    dan Slip Gaji</p>
                                                <p><i class="fa-solid fa-circle-check me-3 text-success"></i>Kwitansi Siswa
                                                    dan wali murid</p>
                                                <p><i class="fa-solid fa-circle-check me-3 text-success"></i>Kas & Bank</p>
                                                <p><i class="fa-solid fa-circle-check me-3 text-success"></i>Pembayaran</p>
                                                <p><i class="fa-solid fa-circle-xmark me-3 text-danger"></i>Perhitungan
                                                    Pajak dan Unit
                                                    POS</p>
                                                <p><i class="fa-solid fa-circle-xmark me-3 text-danger"></i>Notif Telegram
                                                </p>
                                                <p><i class="fa-solid fa-circle-xmark me-3 text-danger"></i>Notif Whatsapp
                                                </p>
                                                <p>
                                                    <i class="fa-solid fa-circle-xmark me-3 text-danger"></i>Transfer dan
                                                    Rekonsiliasi Bank
                                                </p>

                                                <h5 class="text-center my-4">Fitur Pimpinan</h5>
                                                <p><i class="fa-solid fa-circle-xmark me-3 text-danger"></i>Analisa dan
                                                    Performa</p>
                                                <p><i class="fa-solid fa-circle-xmark me-3 text-danger"></i>Statistik</p>

                                                <h5 class="text-center my-4">Fitur Laporan</h5>
                                                <p><i class="fa-solid fa-circle-check me-3 text-success"></i>Laporan
                                                    Pembayaran</p>
                                                <p><i class="fa-solid fa-circle-check me-3 text-success"></i>Laporan
                                                    Keuangan</p>
                                                <p><i class="fa-solid fa-circle-xmark me-3 text-danger"></i>Laporan
                                                    Kesiswaan</p>
                                                <p><i class="fa-solid fa-circle-xmark me-3 text-danger"></i>Laporan
                                                    Akademik</p>

                                                <h4 class="text-center my-4">Bonus</h4>
                                                <p><i class="fa-solid fa-circle-question me-3 text-warning"></i>Inventaris
                                                </p>
                                                <p><i
                                                        class="fa-solid fa-circle-question me-3 text-warning"></i>Perpustakaan
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- pricing table -->
                        <div class=" col-lg-4 mb-5">
                            <div
                                class="rounded text-center pricing-table table-2 text-light d-flex flex-column justify-content-between gap-3 h-100">
                                <h3>Premium</h3>
                                <small><s>2.180.000</s><span class="badge bg-light text-dark ms-2">Diskon
                                        45%</span></small>
                                <h1><span>Rp</span>1.200 k <span>/bulan</span></h1>
                                <ol class="fs-6 list-group">
                                    <li>Request Sistem Dasar</li>
                                    <li>Dukungan Fitur Dasar</li>
                                    <li>Domain Pilihan</li>
                                </ol>
                                <a target="_blank"
                                    href="https://wa.me/6285728334774?text=Halo%20Serpihan%20Tech%20Solution%2C%0A%0ASaya%20tertarik%20untuk%20membeli%20produk%20*Premium*%20sekolahin%2C%20mohon%20untuk%20bisa%20diproses%20lebih%20lanjut%0A%0ATerima%20kasih.%0A%0ASalam%20hangat%2C"
                                    class="btn btn-light fw-bold px-2 mt-5">Buy Now</a>
                                <div class="accordion" id="accordion-basic">
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="heading-basic">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#basic-collapse"
                                                aria-expanded="false" aria-controls="basic-collapse">
                                                Detail Fitur
                                            </button>
                                        </h2>
                                        <div id="basic-collapse" class="accordion-collapse collapse"
                                            aria-labelledby="heading-basic" data-bs-parent="#accordion-basic">
                                            <div class="accordion-body text-justify">

                                                <h5 class="text-center my-4">Fitur Kesiswaan</h5>
                                                <p><i class="fa-solid fa-circle-check me-3 text-success"></i>Unit, Kelas,
                                                    Siswa
                                                </p>
                                                <p><i class="fa-solid fa-circle-check me-3 text-success"></i>
                                                    Distribusi Siswa ke Kelas
                                                </p>
                                                <p><i class="fa-solid fa-circle-check me-3 text-success"></i>Buku Induk
                                                    Siswa (NIS)
                                                </p>
                                                <p><i class="fa-solid fa-circle-check me-3 text-success"></i>Konseling dan
                                                    izin Keluar</p>
                                                <p><i class="fa-solid fa-circle-xmark me-3 text-danger"></i>Kesehatan</p>
                                                <p><i class="fa-solid fa-circle-xmark me-3 text-danger"></i>Pengumuman
                                                    Telegram</p>

                                                <h5 class="text-center my-4">Fitur Humas</h5>
                                                <p><i class="fa-solid fa-circle-check me-3 text-success"></i>Buku Tamu</p>
                                                <p><i class="fa-solid fa-circle-check me-3 text-success"></i>Surat
                                                    Masuk/Keluar</p>
                                                <p><i class="fa-solid fa-circle-xmark me-3 text-danger"></i>Buat Surat
                                                    Resmi</p>

                                                <h5 class="text-center my-4">Fitur Kepegawaian</h5>
                                                <p><i class="fa-solid fa-circle-check me-3 text-success"></i>Jabatan dan
                                                    daftar
                                                    Pegawai</p>
                                                <p><i class="fa-solid fa-circle-check me-3 text-success"></i>Presensi
                                                    Pegawai</p>

                                                <h5 class="text-center my-4">Fitur Akademik</h5>
                                                <p><i class="fa-solid fa-circle-check me-3 text-success"></i>Setting tahun
                                                    Ajaran /
                                                    Semester</p>
                                                <p><i class="fa-solid fa-circle-check me-3 text-success"></i>Pindah Kelas
                                                    dan Kelulusan
                                                </p>
                                                <p><i class="fa-solid fa-circle-check me-3 text-success"></i>Mata Pelajaran
                                                </p>
                                                <p><i class="fa-solid fa-circle-check me-3 text-success"></i>Jam dan
                                                    Jadwal Pelajaran</p>
                                                <p><i class="fa-solid fa-circle-xmark me-3 text-danger"></i>Presensi Harian
                                                </p>
                                                <p><i class="fa-solid fa-circle-xmark me-3 text-danger"></i>Jurnal
                                                    Mengajar dan Alumni</p>
                                                <p><i class="fa-solid fa-circle-xmark me-3 text-danger"></i>Penilaian</p>
                                                <p><i class="fa-solid fa-circle-xmark me-3 text-danger"></i>Rapor,
                                                    Transkrip dan SKL</p>
                                                <p><i class="fa-solid fa-circle-xmark me-3 text-danger"></i>SIlabus dan RPP
                                                </p>
                                                <p><i class="fa-solid fa-circle-xmark me-3 text-danger"></i>Kalender
                                                    Pendidikan</p>

                                                <h5 class="text-center my-4">Fitur Keuangan</h5>
                                                <p><i class="fa-solid fa-circle-check me-3 text-success"></i>Pembayaran SPP
                                                </p>
                                                <p><i class="fa-solid fa-circle-check me-3 text-success"></i>Gaji
                                                    dan Slip Gaji</p>
                                                <p><i class="fa-solid fa-circle-check me-3 text-success"></i>Kwitansi Siswa
                                                    dan wali murid</p>
                                                <p><i class="fa-solid fa-circle-check me-3 text-success"></i>Kas & Bank</p>
                                                <p><i class="fa-solid fa-circle-check me-3 text-success"></i>Pembayaran</p>
                                                <p><i class="fa-solid fa-circle-check me-3 text-success"></i>Perhitungan
                                                    Pajak dan Unit
                                                    POS</p>
                                                <p><i class="fa-solid fa-circle-xmark me-3 text-danger"></i>Notif Telegram
                                                </p>
                                                <p><i class="fa-solid fa-circle-xmark me-3 text-danger"></i>Notif Whatsapp
                                                </p>
                                                <p><i class="fa-solid fa-circle-xmark me-3 text-danger"></i>Transfer dan
                                                    Rekonsiliasi Bank</p>

                                                <h5 class="text-center my-4">Fitur Pimpinan</h5>
                                                <p><i class="fa-solid fa-circle-xmark me-3 text-danger"></i>Analisa dan
                                                    Performa</p>
                                                <p><i class="fa-solid fa-circle-xmark me-3 text-danger"></i>Statistik</p>

                                                <h5 class="text-center my-4">Fitur Laporan</h5>
                                                <p><i class="fa-solid fa-circle-check me-3 text-success"></i>Laporan
                                                    Pembayaran</p>
                                                <p><i class="fa-solid fa-circle-check me-3 text-success"></i>Laporan
                                                    Keuangan</p>
                                                <p><i class="fa-solid fa-circle-check me-3 text-success"></i>Laporan
                                                    Kesiswaan</p>
                                                <p><i class="fa-solid fa-circle-xmark me-3 text-danger"></i>Laporan
                                                    Akademik</p>

                                                <h4 class="text-center my-4">Bonus</h4>
                                                <p><i class="fa-solid fa-circle-question me-3 text-warning"></i>Inventaris
                                                </p>
                                                <p><i
                                                        class="fa-solid fa-circle-question me-3 text-warning"></i>Perpustakaan
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- pricing table -->
                        <div class="col-lg-4 mb-5">
                            <div
                                class="rounded text-center pricing-table table-3 d-flex flex-column justify-content-between gap-3 h-100">
                                <h3>Profesional</h3>
                                <small><s>4.545.000</s><span class="badge bg-light text-dark ms-2">Diskon
                                        45%</span></small>
                                <h1><span>Rp</span>2.500 k <span>/bulan</span></h1>
                                <ol class="fs-6 list-group">
                                    <li>Request terstruktur</li>
                                    <li>Dukungan pelatihan</li>
                                    <li>Server dan domain pilihan</li>
                                </ol>
                                <a target="_blank"
                                    href="https://wa.me/6285728334774?text=Halo%20Serpihan%20Tech%20Solution%2C%0A%0ASaya%20tertarik%20untuk%20membeli%20produk%20*Profesional*%20sekolahin%2C%20mohon%20untuk%20bisa%20diproses%20lebih%20lanjut%0A%0ATerima%20kasih.%0A%0ASalam%20hangat%2C"
                                    class="btn btn-light fw-bold px-2 mt-5">Buy Now</a>
                                <div class="accordion" id="accordion-basic">
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="heading-basic">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#basic-collapse"
                                                aria-expanded="false" aria-controls="basic-collapse">
                                                Detail Fitur
                                            </button>
                                        </h2>
                                        <div id="basic-collapse" class="accordion-collapse collapse"
                                            aria-labelledby="heading-basic" data-bs-parent="#accordion-basic">
                                            <div class="accordion-body text-justify">

                                                <h5 class="text-center my-4">Fitur Kesiswaan</h5>
                                                <p><i class="fa-solid fa-circle-check me-3 text-success"></i>Unit, Kelas,
                                                    Siswa
                                                </p>
                                                <p><i class="fa-solid fa-circle-check me-3 text-success"></i>
                                                    Distribusi Siswa ke Kelas
                                                </p>
                                                <p><i class="fa-solid fa-circle-check me-3 text-success"></i>Buku Induk
                                                    Siswa (NIS)
                                                </p>
                                                <p><i class="fa-solid fa-circle-check me-3 text-success"></i>Konseling dan
                                                    izin Keluar</p>
                                                <p><i class="fa-solid fa-circle-check me-3 text-success"></i>Kesehatan</p>
                                                <p><i class="fa-solid fa-circle-check me-3 text-success"></i>Pengumuman
                                                    Telegram</p>

                                                <h5 class="text-center my-4">Fitur Humas</h5>
                                                <p><i class="fa-solid fa-circle-check me-3 text-success"></i>Buku Tamu</p>
                                                <p><i class="fa-solid fa-circle-check me-3 text-success"></i>Surat
                                                    Masuk/Keluar</p>
                                                <p><i class="fa-solid fa-circle-check me-3 text-success"></i>Buat Surat
                                                    Resmi</p>

                                                <h5 class="text-center my-4">Fitur Kepegawaian</h5>
                                                <p><i class="fa-solid fa-circle-check me-3 text-success"></i>Jabatan dan
                                                    daftar
                                                    Pegawai</p>
                                                <p><i class="fa-solid fa-circle-check me-3 text-success"></i>Presensi
                                                    Pegawai</p>

                                                <h5 class="text-center my-4">Fitur Akademik</h5>
                                                <p><i class="fa-solid fa-circle-check me-3 text-success"></i>Setting tahun
                                                    Ajaran /
                                                    Semester</p>
                                                <p><i class="fa-solid fa-circle-check me-3 text-success"></i>Pindah Kelas
                                                    dan Kelulusan
                                                </p>
                                                <p><i class="fa-solid fa-circle-check me-3 text-success"></i>Mata Pelajaran
                                                </p>
                                                <p><i class="fa-solid fa-circle-check me-3 text-success"></i>Jam dan
                                                    Jadwal Pelajaran</p>
                                                <p><i class="fa-solid fa-circle-check me-3 text-success"></i>Presensi
                                                    Harian</p>
                                                <p><i class="fa-solid fa-circle-check me-3 text-success"></i>Jurnal
                                                    Mengajar dan Alumni</p>
                                                <p><i class="fa-solid fa-circle-check me-3 text-success"></i>Penilaian</p>
                                                <p><i class="fa-solid fa-circle-check me-3 text-success"></i>Rapor,
                                                    Transkrip dan SKL</p>
                                                <p><i class="fa-solid fa-circle-check me-3 text-success"></i>SIlabus dan
                                                    RPP</p>
                                                <p><i class="fa-solid fa-circle-check me-3 text-success"></i>Kalender
                                                    Pendidikan</p>

                                                <h5 class="text-center my-4">Fitur Keuangan</h5>
                                                <p><i class="fa-solid fa-circle-check me-3 text-success"></i>Pembayaran SPP
                                                </p>
                                                <p><i class="fa-solid fa-circle-check me-3 text-success"></i>Gaji
                                                    dan Slip Gaji</p>
                                                <p><i class="fa-solid fa-circle-check me-3 text-success"></i>Kwitansi Siswa
                                                    dan wali murid</p>
                                                <p><i class="fa-solid fa-circle-check me-3 text-success"></i>Kas & Bank</p>
                                                <p><i class="fa-solid fa-circle-check me-3 text-success"></i>Pembayaran</p>
                                                <p><i class="fa-solid fa-circle-check me-3 text-success"></i>Perhitungan
                                                    Pajak dan Unit
                                                    POS</p>
                                                <p><i class="fa-solid fa-circle-check me-3 text-success"></i>Notif Telegram
                                                </p>
                                                <p><i class="fa-solid fa-circle-check me-3 text-success"></i>Notif Whatsapp
                                                </p>
                                                <p><i class="fa-solid fa-circle-check me-3 text-success"></i>Transfer dan
                                                    Rekonsiliasi Bank</p>

                                                <h5 class="text-center my-4">Fitur Pimpinan</h5>
                                                <p><i class="fa-solid fa-circle-check me-3 text-success"></i>Analisa dan
                                                    Performa</p>
                                                <p><i class="fa-solid fa-circle-check me-3 text-success"></i>Statistik</p>

                                                <h5 class="text-center my-4">Fitur Laporan</h5>
                                                <p><i class="fa-solid fa-circle-check me-3 text-success"></i>Laporan
                                                    Pembayaran</p>
                                                <p><i class="fa-solid fa-circle-check me-3 text-success"></i>Laporan
                                                    Keuangan</p>
                                                <p><i class="fa-solid fa-circle-check me-3 text-success"></i>Laporan
                                                    Kesiswaan</p>
                                                <p><i class="fa-solid fa-circle-check me-3 text-success"></i>Laporan
                                                    Akademik</p>

                                                <h4 class="text-center my-4">Bonus</h4>
                                                <p><i class="fa-solid fa-circle-question me-3 text-warning"></i>Inventaris
                                                </p>
                                                <p><i
                                                        class="fa-solid fa-circle-question me-3 text-warning"></i>Perpustakaan
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col mb-5 mb-lg-0">
                            <div class="rounded text-center pricing-table table-3 row gap-3">
                                <h3>Prioritas</h3>
                                <small><s>111.111.000</s><span class="badge bg-light text-dark ms-2">Diskon
                                        45%</span></small>
                                <h1><span>Rp</span>50 juta <span>/bulan</span></h1>
                                <a target="_blank"
                                    href="https://wa.me/6285728334774?text=Halo%20Serpihan%20Tech%20Solution%2C%0A%0ASaya%20tertarik%20untuk%20membeli%20produk%20*Prioritas*%20sekolahin%2C%20mohon%20untuk%20bisa%20diproses%20lebih%20lanjut%0A%0ATerima%20kasih.%0A%0ASalam%20hangat%2C"
                                    class="btn btn-light mt-5 px-2 fw-bold">Hubungi Kami Lebih Lanjut</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- background shapes -->
        <img class="pricing-bg-shape-1 up-down-animation" src="/images/background-shape/seo-ball-1.png"
            alt="background-shape">
        <img class="pricing-bg-shape-2 up-down-animation" src="/images/background-shape/seo-half-cycle.png"
            alt="background-shape">
        <img class="pricing-bg-shape-3 left-right-animation" src="/images/background-shape/team-bg-triangle.png"
            alt="background-shape">
    </section>
    <!-- /pricing -->

    <!-- client logo slider -->
    <section class="section">
        <div class="container">
            <div class="client-logo-slider align-self-center">
                <a href="#" class="text-center d-block outline-0 p-5"><img class="d-unset img-fluid"
                        src="/images/clients-logo/logo_kkj.png" alt="client-logo"></a>
                <a href="#" class="text-center d-block outline-0 p-5"><img class="d-unset img-fluid"
                        src="/images/clients-logo/allure.png" alt="client-logo"></a>
            </div>
        </div>
    </section>
    <!-- /client logo slider -->

    <!-- newsletter -->
    <section class="newsletter">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>Subscribe to our newsletter</h2>
                    <p class="mb-5">Receive updates, news and deals</p>
                </div>
                <div class="col-lg-8 col-sm-10 col-12 mx-auto">
                    <div class="input-wrapper position-relative">
                        <input type="email" class="newsletter-form" id="newsletter" placeholder="Enter your email">
                        <button onclick="subscribe()" value="send" class="btn newsletter-btn">subscribe</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- background shapes -->
        <img class="newsletter-bg-shape left-right-animation" src="/images/background-shape/seo-ball-2.png"
            alt="background-shape">
    </section>
    <!-- /newsletter -->
@endsection

@push('script')
    <script>
        function subscribe() {
            var email = document.getElementById('newsletter').value;
            fetch("/api/subscribtions", {
                method: "POST",
                headers: {
                    "Content-Type": "application/json",
                },
                body: JSON.stringify({
                    email: email
                }),
            }).then((response) => {
                return response.json();
            }).then((data) => {
                console.log(data);
            }).catch((err) => {
                console.log(err);
            })
        }
    </script>
@endpush
