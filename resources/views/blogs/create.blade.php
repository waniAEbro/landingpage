@extends('layouts.dashboard')

@section('content')
    <form action="/dashboard/blogs" method="post" enctype="multipart/form-data" class="flex flex-col gap-8">
        @csrf
        <label for="image">Image</label>
        <input type="file" name="image" id="image" class="bg-white p-4 rounded-lg" required />
        <label for="title">Title</label>
        <input type="text" class="p-4 rounded-lg" name="title" id="title" required />
        <label for="description">Blog</label>
        <textarea type="text" name="description" id="description" class="p-4 rounded-lg" required></textarea>
        <button class="p-2 text-white font-bold bg-blue-500 rounded-lg" type="submit">Buat</button>
    </form>
@endsection
