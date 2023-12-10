@extends('layouts.dashboard')

@section('content')
    <a href="/dashboard/blogs/create" class="p-2 font-bold text-white bg-blue-500 rounded-lg">Create</a>
    <table class="border-separate border-spacing-y-4 my-8 w-full">
        <thead>
            <tr>
                <th class="pb-8">#</th>
                <th class="pb-8 w-1/4">Image</th>
                <th class="pb-8 w-1/4">Title</th>
                <th class="pb-8 w-1/4">Description</th>
                <th class="pb-8 w-1/4">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($blogs as $index => $blog)
                <tr class="bg-white shadow-lg">
                    <th class="p-4">{{ $index + $blogs->firstItem() }}</th>
                    <td class="p-4"><img src="{{ $blog->image }}"></td>
                    <td class="p-4">
                        <p class="line-clamp-1 text-center">
                            {{ $blog->title }}
                        </p>
                    </td>
                    <td class="p-4">
                        <p class="line-clamp-2 text-center">
                            {{ $blog->description }}
                        </p>
                    </td>
                    <td class="p-4">
                        <a href="/dashboard/blogs/{{ $blog->slug }}" class="p-2 block lg:inline text-white bg-blue-500 rounded-lg text-center font-bold my-2">Show</a>
                        <a href="/dashboard/blogs/{{ $blog->slug }}/edit"
                            class=" my-2 p-2 text-white font-bold rounded-lg bg-yellow-500 text-center block lg:inline">Edit</a>
                        <form action="/dashboard/blogs/{{ $blog->slug }}" method="post" class="my-2 lg:inline block">
                            @csrf
                            @method('DELETE')
                            <button class="p-2 text-white font-bold rounded-lg bg-red-500 lg:w-fit w-full">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    {{ $blogs->links() }}
@endsection
