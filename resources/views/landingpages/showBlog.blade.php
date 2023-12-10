@extends('layouts.landingpage')

@section('content')
    <section class="section-lg about pb-0">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2 class="section-title">{{ $blog->title }}</h2>
                </div>
                <div class="col-lg-12 mb-100">
                    <p>{{ $blog->description }}</p>
                </div>
                <div class="col-lg-12">
                    <!-- about video -->
                    <div class="about-video">
                        <img class="img-fluid w-100" src="{{ $blog->image }}" alt="video-thumb">
                    </div>
                </div>
            </div>
        </div>
        <!-- background shapes -->
        <img src="/images/background-shape/green-dot.png" alt="background-shape" class="about-bg-1 up-down-animation">
        <img src="/images/background-shape/blue-dot.png" alt="background-shape" class="about-bg-2 left-right-animation">
        <img src="/images/background-shape/green-half-cycle.png" alt="background-shape"
            class="about-bg-3 up-down-animation">
        <img src="/images/background-shape/seo-ball-1.png" alt="background-shape" class="about-bg-4 left-right-animation">
        <img src="/images/background-shape/team-bg-triangle.png" alt="background-shape"
            class="about-bg-5 up-down-animation">
        <img src="/images/background-shape/service-half-cycle.png" alt="background-shape"
            class="about-bg-6 left-right-animation">
    </section>
@endsection
