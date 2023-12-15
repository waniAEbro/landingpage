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
                    <div class="d-flex feature-item">
                        <div>
                            <i class="fa-solid fa-sliders feature-icon mr-4"></i>
                        </div>
                        <div>
                            <h4>Customizable</h4>
                            <p>Atur module sesuai dengan kebutuhan anda, sesuaikan modul dengan kebutuhan anda</p>
                        </div>
                    </div>
                </div>
                <!-- feature item -->
                <div class="col-md-4 mb-80">
                    <div class="d-flex feature-item">
                        <div>
                            <i class="fa-solid fa-bolt feature-icon mr-4"></i>
                        </div>
                        <div>
                            <h4>Full Support</h4>
                            <p>Modul mengalami masalah, tenang kami selalu ada untuk mengatasi masalah anda</p>
                        </div>
                    </div>
                </div>
                <!-- feature item -->
                <div class="col-md-4 mb-80">
                    <div class="d-flex feature-item">
                        <div>
                            <i class="fa-solid fa-wallet feature-icon mr-4"></i>
                        </div>
                        <div>
                            <h4>Best Value</h4>
                            <p>Atur pengeluaran anda sesuai dengan kebutuhan anda, pilih modul yang paling cocok untuk
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
                        <div class=" col-lg-4 mb-5">
                            <div
                                class="rounded text-center pricing-table table-1 text-light d-flex flex-column justify-content-between gap-3 h-100">
                                <h3>Basic</h3>
                                <small><s>1.090.000</s><span class="badge bg-light text-dark ms-2">Diskon 45%</span></small>
                                <h1><span>Rp</span>600 k <span>/bulan</span></h1>
                                <ol class="fs-6 list-group">
                                    <li>Paket standar</li>
                                    <li>Dukungan Maintenance</li>
                                    <li>Server dan Domain Default</li>
                                </ol>
                                <a target="_blank"
                                    href="https://wa.me/6285728334774?text=Halo%20Serpihan%20Tech%20Solution%2C%0A%0ASaya%20tertarik%20untuk%20membeli%20produk%20*Basic*%20sekolahin%2C%20mohon%20untuk%20bisa%20diproses%20lebih%20lanjut%0A%0ATerima%20kasih.%0A%0ASalam%20hangat%2C"
                                    class="btn btn-light fw-bold px-2 mt-5">Buy Now</a>
                            </div>
                        </div>
                        <!-- pricing table -->
                        <div class=" col-lg-4 mb-5">
                            <div
                                class="rounded text-center pricing-table table-2 text-light d-flex flex-column justify-content-between gap-3 h-100">
                                <h3>Premium</h3>
                                <small><s>2.180.000</s><span class="badge bg-light text-dark ms-2">Diskon 45%</span></small>
                                <h1><span>Rp</span>1.200 k <span>/bulan</span></h1>
                                <ol class="fs-6 list-group">
                                    <li>Request Sistem Dasar</li>
                                    <li>Dukungan Fitur Dasar</li>
                                    <li>Domain Pilihan</li>
                                </ol>
                                <a target="_blank"
                                    href="https://wa.me/6285728334774?text=Halo%20Serpihan%20Tech%20Solution%2C%0A%0ASaya%20tertarik%20untuk%20membeli%20produk%20*Premium*%20sekolahin%2C%20mohon%20untuk%20bisa%20diproses%20lebih%20lanjut%0A%0ATerima%20kasih.%0A%0ASalam%20hangat%2C"
                                    class="btn btn-light fw-bold px-2 mt-5">Buy Now</a>
                            </div>
                        </div>
                        <!-- pricing table -->
                        <div class="col-lg-4 mb-5">
                            <div
                                class="rounded text-center pricing-table table-3 d-flex flex-column justify-content-between gap-3 h-100">
                                <h3>Profesional</h3>
                                <small><s>4.545.000</s><span class="badge bg-light text-dark ms-2">Diskon 45%</span></small>
                                <h1><span>Rp</span>2.500 k <span>/bulan</span></h1>
                                <ol class="fs-6 list-group">
                                    <li>Request terstruktur</li>
                                    <li>Dukungan pelatihan</li>
                                    <li>Server dan domain pilihan</li>
                                </ol>
                                <a target="_blank"
                                    href="https://wa.me/6285728334774?text=Halo%20Serpihan%20Tech%20Solution%2C%0A%0ASaya%20tertarik%20untuk%20membeli%20produk%20*Profesional*%20sekolahin%2C%20mohon%20untuk%20bisa%20diproses%20lebih%20lanjut%0A%0ATerima%20kasih.%0A%0ASalam%20hangat%2C"
                                    class="btn btn-light fw-bold px-2 mt-5">Buy Now</a>
                            </div>
                        </div>
                        <div class="col mb-5 mb-lg-0">
                            <div class="rounded text-center pricing-table table-3 row gap-3">
                                <h3>Prioritas</h3>
                                <small><s>111.111.000</s><span class="badge bg-light text-dark ms-2">Diskon
                                        45%</span></small>
                                <h1><span>Rp</span>50 juta <span>/bulan</span></h1>
                                <a target="_blank" href="https://wa.me/6285728334774?text=Halo%20Serpihan%20Tech%20Solution%2C%0A%0ASaya%20tertarik%20untuk%20membeli%20produk%20*Prioritas*%20sekolahin%2C%20mohon%20untuk%20bisa%20diproses%20lebih%20lanjut%0A%0ATerima%20kasih.%0A%0ASalam%20hangat%2C"
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
