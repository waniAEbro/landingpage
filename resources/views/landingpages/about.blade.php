@extends('layouts.landingpage')

@section('content')
    <section class="section pb-0">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2 class="section-title">About us</h2>
                </div>
                <div class="col-lg-12">
                    <p>CV. Serpihan Tech Solution merupakan perusahaan yang bergerak di bidang teknologi, kami siap membantu
                        memecahkan masalah perusahaan maupun sekolah anda dengan menggunakan solusi berbasis teknologi</p>
                </div>
                <div class="col-lg-12" style="height:480px;">
                    <img src="/images/about/about.jpg" class="card-img object-fit-cover h-100" alt="about">
                </div>
            </div>
        </div>
        <!-- background shapes -->
        <img src="images/background-shape/green-dot.png" alt="background-shape" class="about-bg-1 up-down-animation">
        <img src="images/background-shape/blue-dot.png" alt="background-shape" class="about-bg-2 left-right-animation">
        <img src="images/background-shape/green-half-cycle.png" alt="background-shape" class="about-bg-3 up-down-animation">
        <img src="images/background-shape/seo-ball-1.png" alt="background-shape" class="about-bg-4 left-right-animation">
        <img src="images/background-shape/team-bg-triangle.png" alt="background-shape" class="about-bg-5 up-down-animation">
        <img src="images/background-shape/service-half-cycle.png" alt="background-shape"
            class="about-bg-6 left-right-animation">
    </section>
    <section class="section" style="background-image: url(images/backgrounds/about-bg.png);">
        <div class="container mb-5">
            <div class="row">
                <div class="col-md-6">
                    <h2 class="section-title">Our Vision</h2>
                    <p class="text-justify">Menjadi pelopor inovasi dan keunggulan dalam teknologi digital di Indonesia,
                        dengan mendorong
                        pertumbuhan dan transformasi digital di berbagai sektor melalui solusi inovatif dan komprehensif.
                    </p>
                </div>
                <div class="col-md-6">
                    <img src="images/about/vision.png" alt="vision" class="img-fluid w-100">
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <img src="images/about/vision.png" alt="vision" class="img-fluid w-100">
                </div>
                <div class="col-md-6">
                    <h2 class="section-title">Our Mission</h2>
                    <p class="text-justify">
                        - Menyediakan platform digital komersial yang canggih, serta mengembangkan software dan aplikasi
                        yang mendorong efisiensi dan produktivitas Pelanggan
                    </p>
                    <br>
                    <p class="text-justify">
                        - Menerapkan Teknologi Mutakhir dalam menciptakan solusi yang adaptif dan cerdas, yang memenuhi
                        kebutuhan pasar yang terus berkembang
                    </p>
                    <br>
                    <p class="text-justify">
                        - Menawarkan layanan konsultasi terkait komputerisasi, serta desain dan perancangan solusi
                        Internet of Things (IoT) untuk memastikan pelanggan mendapatkan solusi teknologi terbaik
                    </p>
                    <br>
                    <p class="text-justify">
                        - Menyelenggarakan Pelatihan ataupun Edukasi dalam pemanfaatan teknologi informasi dan komunikasi
                        bagi Klien Secara maksimal
                    </p>
                    <br>
                    <p class="text-justify">
                        - Berkolaborasi dengan lembaga pemerintahan dalam bidang komunikasi dan informatika untuk
                        mendukung inisiatif pemerintah dalam teknologi dan komunikasi
                    </p>
                    <br>
                    <p class="text-justify">
                        - Memastikan dukungan teknis yang handal dan cepat bagi pelanggan kami dalam bentuk Maintenance
                        dan Upgrading
                    </p>
                </div>
            </div>
        </div>
    </section>
    <section class="section team" id="team">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-title">Our Team</h2>
                    <p class="mb-100">Tim kami yang akan mengeksekusi seluruh masalah anda</p>
                </div>
            </div>
            <div class="col-10 mx-auto">
                <div class="team-slider">
                    <div class="team-member">
                        <div class="d-flex mb-4">
                            <div class="mr-3">
                                <img class="rounded-circle img-fluid" src="images/team/team-1.jpg" alt="team-member">
                            </div>
                            <div class="align-self-center">
                                <h4>Kholiq Budiman</h4>
                                <h6 class="text-color">Komisaris</h6>
                            </div>
                        </div>
                    </div>
                    <!-- team-member -->
                    <div class="team-member">
                        <div class="d-flex mb-4">
                            <div class="mr-3">
                                <img class="rounded-circle img-fluid" src="images/team/team-1.jpg" alt="team-member">
                            </div>
                            <div class="align-self-center">
                                <h4>Arif Saifunnasrullah</h4>
                                <h6 class="text-color">Direktur</h6>
                            </div>
                        </div>
                    </div>
                    <!-- team-member -->
                    <div class="team-member">
                        <div class="d-flex mb-4">
                            <div class="mr-3">
                                <img class="rounded-circle img-fluid" src="images/team/team-2.jpg" alt="team-member">
                            </div>
                            <div class="align-self-center">
                                <h4>Muhammad Afifudin</h4>
                                <h6 class="text-color">Developer</h6>
                            </div>
                        </div>
                    </div>
                    <!-- team-member -->
                    <div class="team-member">
                        <div class="d-flex mb-4">
                            <div class="mr-3">
                                <img class="rounded-circle img-fluid" src="images/team/team-3.jpg" alt="team-member">
                            </div>
                            <div class="align-self-center">
                                <h4>Abdillah Azmi</h4>
                                <h6 class="text-color">Developer</h6>
                            </div>
                        </div>
                    </div>
                    <!-- team-member -->
                    <div class="team-member">
                        <div class="d-flex mb-4">
                            <div class="mr-3">
                                <img class="rounded-circle img-fluid" src="images/team/team-1.jpg" alt="team-member">
                            </div>
                            <div class="align-self-center">
                                <h4>Achmat Sodikkun</h4>
                                <h6 class="text-color">Developer</h6>
                            </div>
                        </div>
                    </div>
                    <!-- team-member -->
                    <div class="team-member">
                        <div class="d-flex mb-4">
                            <div class="mr-3">
                                <img class="rounded-circle img-fluid" src="images/team/team-2.jpg" alt="team-member">
                            </div>
                            <div class="align-self-center">
                                <h4>Ridwan Ridlo Nugroho</h4>
                                <h6 class="text-color">Developer</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- backgound image -->
        <img src="images/backgrounds/team-bg.png" alt="team-bg" class="img-fluid team-bg">
        <!-- background shapes -->
        <img class="team-bg-shape-1 up-down-animation" src="images/background-shape/seo-ball-1.png"
            alt="background-shape">
        <img class="team-bg-shape-2 left-right-animation" src="images/background-shape/seo-ball-1.png"
            alt="background-shape">
        <img class="team-bg-shape-3 left-right-animation" src="images/background-shape/team-bg-triangle.png"
            alt="background-shape">
        <img class="team-bg-shape-4 up-down-animation img-fluid" src="images/background-shape/team-bg-dots.png"
            alt="background-shape">
    </section>
@endsection
