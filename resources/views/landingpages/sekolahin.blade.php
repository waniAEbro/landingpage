@extends('layouts.landingpage')

@section('content')
    <!-- hero area -->
    <section class="hero-section hero" id="home" data-background=""
        style="background-image: url(/images/hero-area/banner-bg.png);">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center zindex-1">
                    <h1 class="mb-5">Seluruh Kebutuhan Bisnis Anda<br>
                        Ada di Genggaman Anda</h1>
                    <p class="mb-5">Jangan biarkan sistem mengatur bisnis anda, biarkan bisnis yang mengatur sistem anda.
                        Rancang sistem informasi sesuai kebutuhan bisnis anda bersama kami</p>
                    <a href="https://wa.me/6285728334774?text=Halo%20Serpihan%20Tech%20Solution%2C%0A%0ASaya%20tertarik%20untuk%20mengetahui%20lebih%20lanjut%20tentang%20Serpihan%20Tech%20Solution.%20Bisakah%20Anda%20memberikan%20informasi%20lebih%20detail%20tentang%20perusahaan%2C%20produk%20atau%20layanan%20yang%20diberikan%20lebih%20lanjut%20%3F%0A%0ATerima%20kasih.%0A%0ASalam%20hangat%2C"
                        class="btn btn-secondary btn-lg mb-5" target="_blank">Contact Us</a>
                    <!-- banner image -->
                    <img class="img-fluid w-50 banner-image" src="/images/hero-area/banner-img.png" alt="banner-img">
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

    <!-- marketing -->
    <section class="section-lg seo">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="seo-image">
                        <img class="img-fluid" src="/images/marketing/marketing.png" alt="form-img">
                    </div>
                </div>
                <div class="col-md-5">
                    <h2 class="section-title">Manfaat Untuk Sekolah</h2>
                    <ul class="list-group">
                        <li class="mb-4">- Manajemen Data Sekolah yang Tertata</li>
                        <li class="mb-4">- Kemudahan Pengaturan Administrasi</li>
                        <li>- Kemudahan Pencatatan Tagihan dan Keuangan</li>
                    </ul>
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
            <div class="row justify-content-between">
                <div class="col-md-5 order-2 order-md-1">
                    <h2 class="section-title">Manfaat Untuk Siswa</h2>
                    <ul class="list-group">
                        <li class="mb-4">- Informasi Keuangan Biaya Akademik</li>
                        <li class="mb-4">- Kemudahan Berkomunikasi dengan Pihak Ssekolah</li>
                        <li>- Kemudahan Mendapatkan Pemberitahuan Pengumuman</li>
                    </ul>
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
                        <div class="col mb-5">
                            <div class="rounded text-center pricing-table table-1 text-light">
                                <h3>Basic</h3>
                                <h1><span>Rp</span>600.000 <span>/bulan</span></h1>
                                <ol class="fs-6">
                                    <li>paket standar</li>
                                    <li>Dukungan Maintenance Bug</li>
                                    <li>Server dan Domain Default</li>
                                </ol>
                                <a href="https://wa.me/6285728334774?text=Halo%20Serpihan%20Tech%20Solution%2C%0A%0ASaya%20tertarik%20untuk%20membeli%20produk%20*Basic*%20sekolahin%2C%20mohon%20untuk%20bisa%20diproses%20lebih%20lanjut%0A%0ATerima%20kasih.%0A%0ASalam%20hangat%2C"
                                    class="btn pricing-btn px-2 mb-3">Buy Now</a>
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
                                                <p><i class="fa-solid fa-circle-check me-3"></i>Unit, Kelas, Siswa,
                                                    Distribusi Siswa ke Kelas dan Buku Induk Siswa (NIS)
                                                </p>

                                                <h5 class="text-center my-4">Fitur Humas</h5>
                                                <p><i class="fa-solid fa-circle-check me-3"></i>Buku Tamu</p>
                                                <p><i class="fa-solid fa-circle-check me-3"></i>Surat Masuk/Keluar</p>

                                                <h5 class="text-center my-4">Fitur Kepegawaian</h5>
                                                <p><i class="fa-solid fa-circle-check me-3"></i>Jabatan Pegawai, List
                                                    Pegawai</p>

                                                <h5 class="text-center my-4">Fitur Akademik</h5>
                                                <p><i class="fa-solid fa-circle-check me-3"></i>Setting tahun Ajaran /
                                                    Semester</p>
                                                <p><i class="fa-solid fa-circle-check me-3"></i>Pindah Kelas dan Kelulusan
                                                </p>

                                                <h5 class="text-center my-4">Fitur Keuangan</h5>
                                                <p><i class="fa-solid fa-circle-check me-3"></i>Pembayaran SPP</p>
                                                <p><i class="fa-solid fa-circle-check me-3"></i>Penggajian : Setting Gaji
                                                    dan Slip Gaji</p>
                                                <p><i class="fa-solid fa-circle-check me-3"></i>Bukti Transfer Wali Murid
                                                    dan Tabungan Siswa (Kwitansi)</p>
                                                <p><i class="fa-solid fa-circle-check me-3"></i>Kas & Bank : Saldo Awal,
                                                    Kas Masuk dan Keluar</p>
                                                <p><i class="fa-solid fa-circle-check me-3"></i>Setting Pembayaran : Akun
                                                    biaya, POS dan Jenis Pembayaran</p>

                                                <h5 class="text-center my-4">Fitur Laporan</h5>
                                                <p><i class="fa-solid fa-circle-check me-3"></i>Laporan Pembayaran :
                                                    Berdasarkan kelas / tanggal, tagihan siswa dan rekap
                                                    pembayaran</p>
                                                <p><i class="fa-solid fa-circle-check me-3"></i>Laporan Keuangan : Jurnal,
                                                    Kas Tunai dan Kas Bank</p>

                                                <h4 class="text-center my-4">Bonus</h4>
                                                <p><i class="fa-solid fa-circle-question me-3"></i>Inventaris</p>
                                                <p><i class="fa-solid fa-circle-question me-3"></i>Perpustakaan</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- pricing table -->
                        <div class="col mb-5">
                            <div class="rounded text-center pricing-table table-2">
                                <h3>Premium</h3>
                                <h1><span>Rp</span>1.200.000 <span>/bulan</span></h1>
                                <ol class="fs-6">
                                    <li>Terima Request Sistem Dasar</li>
                                    <li>Dukungan Request Fitur Dasar</li>
                                    <li>Domain Pilihan</li>
                                </ol>
                                <a href="https://wa.me/6285728334774?text=Halo%20Serpihan%20Tech%20Solution%2C%0A%0ASaya%20tertarik%20untuk%20membeli%20produk%20*Premium*%20sekolahin%2C%20mohon%20untuk%20bisa%20diproses%20lebih%20lanjut%0A%0ATerima%20kasih.%0A%0ASalam%20hangat%2C"
                                    class="btn pricing-btn px-2 mb-3">Buy Now</a>
                                <div class="accordion" id="accordion-premium">
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="heading-premium">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#premium-collapse"
                                                aria-expanded="false" aria-controls="premium-collapse">
                                                Detail Fitur
                                            </button>
                                        </h2>
                                        <div id="premium-collapse" class="accordion-collapse collapse"
                                            aria-labelledby="heading-premium" data-bs-parent="#accordion-premium">
                                            <div class="accordion-body text-justify">

                                                <h5 class="text-center my-4">Fitur Kesiswaan</h5>
                                                <p><i class="fa-solid fa-circle-check me-3"></i>Unit, Kelas, Siswa,
                                                    Distribusi Siswa ke Kelas dan Buku Induk Siswa (NIS)
                                                </p>
                                                <p><i class="fa-solid fa-circle-check me-3"></i>Konseling, Izin Keluar</p>

                                                <h5 class="text-center my-4">Fitur Humas</h5>
                                                <p><i class="fa-solid fa-circle-check me-3"></i>Buku Tamu</p>
                                                <p><i class="fa-solid fa-circle-check me-3"></i>Surat Masuk/Keluar</p>

                                                <h5 class="text-center my-4">Fitur Kepegawaian</h5>
                                                <p><i class="fa-solid fa-circle-check me-3"></i>Jabatan Pegawai, List
                                                    Pegawai</p>

                                                <h5 class="text-center my-4">Fitur Akademik</h5>
                                                <p><i class="fa-solid fa-circle-check me-3"></i>Setting tahun Ajaran /
                                                    Semester</p>
                                                <p><i class="fa-solid fa-circle-check me-3"></i>Pindah Kelas dan Kelulusan
                                                </p>
                                                <p><i class="fa-solid fa-circle-check me-3"></i>Mata Pelajaran, Jam dan
                                                    Jadwal Pelajaran</p>

                                                <h5 class="text-center my-4">Fitur Keuangan</h5>
                                                <p><i class="fa-solid fa-circle-check me-3"></i>Pembayaran SPP</p>
                                                <p><i class="fa-solid fa-circle-check me-3"></i>Penggajian : Setting Gaji
                                                    dan Slip Gaji</p>
                                                <p><i class="fa-solid fa-circle-check me-3"></i>Bukti Transfer Wali Murid
                                                    dan Tabungan Siswa (Kwitansi)</p>
                                                <p><i class="fa-solid fa-circle-check me-3"></i>Kas & Bank : Saldo Awal,
                                                    Kas Masuk dan Keluar</p>
                                                <p><i class="fa-solid fa-circle-check me-3"></i>Setting Pembayaran : Akun
                                                    biaya, POS dan Jenis Pembayaran</p>
                                                <p><i class="fa-solid fa-circle-check me-3"></i>Perhitungan Pajak dan Unit
                                                    POS</p>
                                                <p><i class="fa-solid fa-circle-check me-3"></i>Notif Telegram (Pembayaran,
                                                    Gaji dan Tagihan)</p>

                                                <h5 class="text-center my-4">Fitur Laporan</h5>
                                                <p><i class="fa-solid fa-circle-check me-3"></i>Laporan Pembayaran :
                                                    Berdasarkan kelas / tanggal, tagihan siswa dan rekap
                                                    pembayaran</p>
                                                <p><i class="fa-solid fa-circle-check me-3"></i>Laporan Keuangan : Jurnal,
                                                    Kas Tunai dan Kas Bank</p>
                                                <p><i class="fa-solid fa-circle-check me-3"></i>Laporan Kesiswaan : Rekap
                                                    Konseling, Izin Keluar</p>

                                                <h4 class="text-center my-4">Bonus</h4>
                                                <p><i class="fa-solid fa-circle-question me-3"></i>Inventaris</p>
                                                <p><i class="fa-solid fa-circle-question me-3"></i>Perpustakaan</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- pricing table -->
                        <div class="col mb-5">
                            <div class="rounded text-center pricing-table table-3">
                                <h3>Profesional</h3>
                                <h1><span>Rp</span>2.500.000 <span>/bulan</span></h1>
                                <ol class="fs-6">
                                    <li>Request terpadu dan terstruktur</li>
                                    <li>Dukungan request dan pelatihan</li>
                                    <li>Server mandiri dan domain pilihan</li>
                                </ol>
                                <a href="https://wa.me/6285728334774?text=Halo%20Serpihan%20Tech%20Solution%2C%0A%0ASaya%20tertarik%20untuk%20membeli%20produk%20*Profesional*%20sekolahin%2C%20mohon%20untuk%20bisa%20diproses%20lebih%20lanjut%0A%0ATerima%20kasih.%0A%0ASalam%20hangat%2C"
                                    class="btn pricing-btn px-2 mb-3">Buy Now</a>
                                <div class="accordion" id="accordion-profesional">
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="heading-professional">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#professional-collapse"
                                                aria-expanded="false" aria-controls="professional-collapse">
                                                Detail Fitur
                                            </button>
                                        </h2>
                                        <div id="professional-collapse" class="accordion-collapse collapse"
                                            aria-labelledby="heading-professional"
                                            data-bs-parent="#accordion-profesional">
                                            <div class="accordion-body text-justify">

                                                <h5 class="text-center my-4">Fitur Kesiswaan</h5>
                                                <p><i class="fa-solid fa-circle-check me-3"></i>Unit, Kelas, Siswa,
                                                    Distribusi Siswa ke Kelas dan Buku Induk Siswa (NIS)
                                                </p>
                                                <p><i class="fa-solid fa-circle-check me-3"></i>Konseling, Izin Keluar</p>
                                                <p><i class="fa-solid fa-circle-check me-3"></i>Kesehatan</p>
                                                <p><i class="fa-solid fa-circle-check me-3"></i>Pengumuman Telegram</p>

                                                <h5 class="text-center my-4">Fitur Humas</h5>
                                                <p><i class="fa-solid fa-circle-check me-3"></i>Buku Tamu</p>
                                                <p><i class="fa-solid fa-circle-check me-3"></i>Konseling, Izin Keluar</p>
                                                <p><i class="fa-solid fa-circle-check me-3"></i>Surat Masuk/Keluar</p>
                                                <p><i class="fa-solid fa-circle-check me-3"></i>Buat Surat Resmi</p>

                                                <h5 class="text-center my-4">Fitur Kepegawaian</h5>
                                                <p><i class="fa-solid fa-circle-check me-3"></i>Jabatan Pegawai, List
                                                    Pegawai</p>
                                                <p><i class="fa-solid fa-circle-check me-3"></i>Presensi Pegawai</p>

                                                <h5 class="text-center my-4">Fitur Akademik</h5>
                                                <p><i class="fa-solid fa-circle-check me-3"></i>Setting tahun Ajaran /
                                                    Semester</p>
                                                <p><i class="fa-solid fa-circle-check me-3"></i>Pindah Kelas dan Kelulusan
                                                </p>
                                                <p><i class="fa-solid fa-circle-check me-3"></i>Mata Pelajaran, Jam dan
                                                    Jadwal Pelajaran</p>
                                                <p><i class="fa-solid fa-circle-check me-3"></i>Presensi Harian, Jurnal
                                                    Mengajar dan Alumni</p>
                                                <p><i class="fa-solid fa-circle-check me-3"></i>Penilaian Perilaku, Harian,
                                                    Mid, Semester</p>
                                                <p><i class="fa-solid fa-circle-check me-3"></i>Rapor Mid Semester, Akhir
                                                    Semester, Transkrip Nilai dan SKL</p>
                                                <p><i class="fa-solid fa-circle-check me-3"></i>SIlabus, RPP</p>
                                                <p><i class="fa-solid fa-circle-check me-3"></i>Kalender Pendidikan</p>

                                                <h5 class="text-center my-4">Fitur Keuangan</h5>
                                                <p><i class="fa-solid fa-circle-check me-3"></i>Pembayaran SPP</p>
                                                <p><i class="fa-solid fa-circle-check me-3"></i>Penggajian : Setting Gaji
                                                    dan Slip Gaji</p>
                                                <p><i class="fa-solid fa-circle-check me-3"></i>Bukti Transfer Wali Murid
                                                    dan Tabungan Siswa (Kwitansi)</p>
                                                <p><i class="fa-solid fa-circle-check me-3"></i>Kas & Bank : Saldo Awal,
                                                    Kas Masuk dan Keluar</p>
                                                <p><i class="fa-solid fa-circle-check me-3"></i>Setting Pembayaran : Akun
                                                    biaya, POS dan Jenis Pembayaran</p>
                                                <p><i class="fa-solid fa-circle-check me-3"></i>Perhitungan Pajak dan Unit
                                                    POS</p>
                                                <p><i class="fa-solid fa-circle-check me-3"></i>Notif Telegram (Pembayaran,
                                                    Gaji dan Tagihan)</p>
                                                <p><i class="fa-solid fa-circle-check me-3"></i>Notif Whatsapp (Pembayaran,
                                                    Gaji, dan Tagihan)</p>
                                                <p><i class="fa-solid fa-circle-check me-3"></i>Hutang: POS, Setting dan
                                                    Bayar Hutang</p>
                                                <p><i class="fa-solid fa-circle-check me-3"></i>Transfer Bank dan
                                                    Rekonsiliasi Bank</p>

                                                <h5 class="text-center my-4">Fitur Pimpinan</h5>
                                                <p><i class="fa-solid fa-circle-check me-3"></i>Analisa dan Performa</p>
                                                <p><i class="fa-solid fa-circle-check me-3"></i>Statistik</p>

                                                <h5 class="text-center my-4">Fitur Laporan</h5>
                                                <p><i class="fa-solid fa-circle-check me-3"></i>Laporan Pembayaran :
                                                    Berdasarkan kelas / tanggal, tagihan siswa dan rekap
                                                    pembayaran</p>
                                                <p><i class="fa-solid fa-circle-check me-3"></i>Laporan Keuangan : Jurnal,
                                                    Kas Tunai dan Kas Bank</p>
                                                <p><i class="fa-solid fa-circle-check me-3"></i>Laporan Kesiswaan : Rekap
                                                    Konseling, Izin Keluar</p>
                                                <p><i class="fa-solid fa-circle-check me-3"></i>Laporan Akademik : Rekap
                                                    Presensi Harian dan Rekap Presensi Pelajaran</p>
                                                <p><i class="fa-solid fa-circle-check me-3"></i>Laporan Neraca, Rugi Laba,
                                                    Arus Kas dan Modal</p>

                                                <h4 class="text-center my-4">Bonus</h4>
                                                <p><i class="fa-solid fa-circle-question me-3"></i>Inventaris</p>
                                                <p><i class="fa-solid fa-circle-question me-3"></i>Perpustakaan</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col mb-5">
                            <div class="rounded text-center pricing-table table-3">
                                <h3>Prioritas</h3>
                                <h1><span>Rp</span>50.000.000 <span>/bulan</span></h1>
                                <ol class="fs-6">
                                    <li>Sesuai request client</li>
                                    <li>Dukungan maintenance prioritas</li>
                                    <li>Server mandiri dan domain pilihan</li>
                                </ol>
                                <a href="https://wa.me/6285728334774?text=Halo%20Serpihan%20Tech%20Solution%2C%0A%0ASaya%20tertarik%20untuk%20membeli%20produk%20*Prioritas*%20sekolahin%2C%20mohon%20untuk%20bisa%20diproses%20lebih%20lanjut%0A%0ATerima%20kasih.%0A%0ASalam%20hangat%2C"
                                    class="btn pricing-btn px-2 mb-3">Buy Now</a>
                                <div class="accordion" id="accordion-prioritas">
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="heading-prioritas">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#prioritas-collapse"
                                                aria-expanded="false" aria-controls="prioritas-collapse">
                                                Detail Fitur
                                            </button>
                                        </h2>
                                        <div id="prioritas-collapse" class="accordion-collapse collapse"
                                            aria-labelledby="heading-prioritas" data-bs-parent="#accordion-prioritas">
                                            <div class="accordion-body text-justify row">
                                                <div class="col-md-4 p-4">
                                                    <h5 class="text-center my-4">Fitur Kesiswaan</h5>
                                                    <p><i class="fa-solid fa-circle-check me-3"></i>Unit, Kelas, Siswa,
                                                        Distribusi Siswa ke Kelas dan Buku Induk Siswa (NIS)
                                                    </p>
                                                    <p><i class="fa-solid fa-circle-check me-3"></i>Konseling, Izin Keluar
                                                    </p>
                                                    <p><i class="fa-solid fa-circle-check me-3"></i>Kesehatan</p>
                                                    <p><i class="fa-solid fa-circle-check me-3"></i>Pengumuman Telegram</p>
                                                </div>

                                                <div class="col-md-4 p-4">
                                                    <h5 class="text-center my-4">Fitur Humas</h5>
                                                    <p><i class="fa-solid fa-circle-check me-3"></i>Buku Tamu</p>
                                                    <p><i class="fa-solid fa-circle-check me-3"></i>Konseling, Izin Keluar
                                                    </p>
                                                    <p><i class="fa-solid fa-circle-check me-3"></i>Surat Masuk/Keluar</p>
                                                    <p><i class="fa-solid fa-circle-check me-3"></i>Buat Surat Resmi</p>
                                                </div>

                                                <div class="col-md-4 p-4">
                                                    <h5 class="text-center my-4">Fitur Kepegawaian</h5>
                                                    <p><i class="fa-solid fa-circle-check me-3"></i>Jabatan Pegawai, List
                                                        Pegawai</p>
                                                    <p><i class="fa-solid fa-circle-check me-3"></i>Presensi Pegawai</p>
                                                </div>

                                                <div class="col-md-4 p-4">
                                                    <h5 class="text-center my-4">Fitur Akademik</h5>
                                                    <p><i class="fa-solid fa-circle-check me-3"></i>Setting tahun Ajaran /
                                                        Semester</p>
                                                    <p><i class="fa-solid fa-circle-check me-3"></i>Pindah Kelas dan
                                                        Kelulusan
                                                    </p>
                                                    <p><i class="fa-solid fa-circle-check me-3"></i>Mata Pelajaran, Jam dan
                                                        Jadwal Pelajaran</p>
                                                    <p><i class="fa-solid fa-circle-check me-3"></i>Presensi Harian, Jurnal
                                                        Mengajar dan Alumni</p>
                                                    <p><i class="fa-solid fa-circle-check me-3"></i>Penilaian Perilaku,
                                                        Harian,
                                                        Mid, Semester</p>
                                                    <p><i class="fa-solid fa-circle-check me-3"></i>Rapor Mid Semester,
                                                        Akhir
                                                        Semester, Transkrip Nilai dan SKL</p>
                                                    <p><i class="fa-solid fa-circle-check me-3"></i>SIlabus, RPP</p>
                                                    <p><i class="fa-solid fa-circle-check me-3"></i>Kalender Pendidikan</p>
                                                </div>

                                                <div class="col-md-4 p-4">
                                                    <h5 class="text-center my-4">Fitur Keuangan</h5>
                                                    <p><i class="fa-solid fa-circle-check me-3"></i>Pembayaran SPP</p>
                                                    <p><i class="fa-solid fa-circle-check me-3"></i>Penggajian : Setting
                                                        Gaji
                                                        dan Slip Gaji</p>
                                                    <p><i class="fa-solid fa-circle-check me-3"></i>Bukti Transfer Wali
                                                        Murid
                                                        dan Tabungan Siswa (Kwitansi)</p>
                                                    <p><i class="fa-solid fa-circle-check me-3"></i>Kas & Bank : Saldo
                                                        Awal,
                                                        Kas Masuk dan Keluar</p>
                                                    <p><i class="fa-solid fa-circle-check me-3"></i>Setting Pembayaran :
                                                        Akun
                                                        biaya, POS dan Jenis Pembayaran</p>
                                                    <p><i class="fa-solid fa-circle-check me-3"></i>Perhitungan Pajak dan
                                                        Unit
                                                        POS</p>
                                                    <p><i class="fa-solid fa-circle-check me-3"></i>Notif Telegram
                                                        (Pembayaran,
                                                        Gaji dan Tagihan)</p>
                                                    <p><i class="fa-solid fa-circle-check me-3"></i>Notif Whatsapp
                                                        (Pembayaran,
                                                        Gaji, dan Tagihan)</p>
                                                    <p><i class="fa-solid fa-circle-check me-3"></i>Hutang: POS, Setting
                                                        dan
                                                        Bayar Hutang</p>
                                                    <p><i class="fa-solid fa-circle-check me-3"></i>Transfer Bank dan
                                                        Rekonsiliasi Bank</p>
                                                </div>

                                                <div class="col-md-4 p-4">
                                                    <h5 class="text-center my-4">Fitur Pimpinan</h5>
                                                    <p><i class="fa-solid fa-circle-check me-3"></i>Analisa dan Performa
                                                    </p>
                                                    <p><i class="fa-solid fa-circle-check me-3"></i>Statistik</p>

                                                    <h5 class="text-center my-4">Fitur Laporan</h5>
                                                    <p><i class="fa-solid fa-circle-check me-3"></i>Laporan Pembayaran :
                                                        Berdasarkan kelas / tanggal, tagihan siswa dan rekap
                                                        pembayaran</p>
                                                    <p><i class="fa-solid fa-circle-check me-3"></i>Laporan Keuangan :
                                                        Jurnal,
                                                        Kas Tunai dan Kas Bank</p>
                                                    <p><i class="fa-solid fa-circle-check me-3"></i>Laporan Kesiswaan :
                                                        Rekap
                                                        Konseling, Izin Keluar</p>
                                                    <p><i class="fa-solid fa-circle-check me-3"></i>Laporan Akademik :
                                                        Rekap
                                                        Presensi Harian dan Rekap Presensi Pelajaran</p>
                                                    <p><i class="fa-solid fa-circle-check me-3"></i>Laporan Neraca, Rugi
                                                        Laba,
                                                        Arus Kas dan Modal</p>
                                                </div>

                                                <div class="col p-4">
                                                    <h4 class="text-center my-4">Bonus</h4>
                                                    <p><i class="fa-solid fa-circle-question me-3"></i>Inventaris</p>
                                                    <p><i class="fa-solid fa-circle-question me-3"></i>Perpustakaan</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
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
@endsection
