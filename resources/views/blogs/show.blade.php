@extends('layouts.dashboard')

@section('content')
    <div class="w-full h-56">
        <img src="{{ $blog->image }}" class="w-full object-cover h-full" alt="">
        <h1 class="font-bold text-4xl text-center my-12">{{ $blog->title }}</h1>
        <p class="text-justify">{{ $blog->description }}</p>
    </div>
@endsection
