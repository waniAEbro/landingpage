@extends('layouts.dashboard')

@section('content')
    @dump($errors)
    <form action="/dashboard/subscribtions/send-newsletter" method="post" class="flex flex-col gap-8"
        enctype="multipart/form-data">
        @csrf
        <label for="subject">Subject</label>
        <input type="text" name="subject" id="subject" class="p-2 bg-white rounded-lg" required>
        <label for="attachment">Attachment Image</label>
        <input type="file" name="attachment" id="attachment" class="p-2 bg-white rounded-lg" required>
        <label for="content">Content</label>
        <textarea name="content" id="content" class="p-2 rounded-lg bg-white" required></textarea>
        <button class="bg-blue-500 p-2 rounded-lg font-bold text-white" type="submit">Kirim</button>
    </form>
@endsection
