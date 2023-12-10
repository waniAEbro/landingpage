@extends('layouts.landingpage')

@section('content')
    <section class="section-lg service-bg-image position-relative"
        style="background-image: url(images/backgrounds/service-page.png);">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <h2 class="section-title">Artikel Terbaru</h2>
                    <p class="mb-100">Baca dan dapatkan penawaran menarik dari kami</p>
                </div>
                @foreach ($blogs as $index => $blog)
                    <a href="/blogs/{{ $blog->slug }}" class="col-sm-6 mb-4 {{ $index % 2 != 0 ? 'translate-y-150' : '' }}">
                        <div class="rounded bg-white p-4 shadow-primary">
                            <img class="img-fluid mb-4" src="{{ $blog->image }}" alt="">
                            <span>{{ $blog->created_at->formatLocalized('%A, %d %B %Y') }}</span>
                            <h4>{{ $blog->title }}</h4>
                            <p>{{ $blog->description }}</p>
                        </div>
                    </a>
                @endforeach
            </div>
        </div>
        <!-- background shapes -->
        <img class="service-bg-1 up-down-animation" src="/images/background-shape/feature-bg-2.png" alt="">
        <img class="service-bg-2 left-right-animation" src="images/background-shape/seo-half-cycle.png" alt="">
        <img class="service-bg-3 up-down-animation" src="images/background-shape/team-bg-triangle.png" alt="">
        <img class="service-bg-4 left-right-animation" src="images/background-shape/green-dot.png" alt="">
        <img class="service-bg-5 up-down-animation" src="images/background-shape/team-bg-triangle.png" alt="">
    </section>
@endsection
