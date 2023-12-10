@extends('layouts.dashboard')

@section('content')
    <a href="/dashboard/subscribtions/send-newsletter" class="mx-2 p-2 font-bold text-white bg-blue-500 rounded-lg">Kirim
        Newsletter</a>
    <table class="border-separate border-spacing-y-4 mb-8 mt-2 w-full">
        <thead>
            <tr>
                <th class="p-8">#</th>
                <th class="p-8">email</th>
                <th class="p-8">action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($subscribtions as $index => $subscribtion)
                <tr class="bg-white shadow-lg">
                    <th class="p-4 text-center">{{ $index + $subscribtions->firstItem() }}</th>
                    <td class="p-4 text-center">{{ $subscribtion->email }}</td>
                    <td class="p-4 text-center">
                        <form action="/dashboard/subscribtions/{{ $subscribtion->slug }}" method="post"
                            class="lg:inline block my-2">
                            @csrf
                            @method('DELETE')
                            <button class="p-2 text-white font-bold rounded-lg bg-red-500 lg:w-fit w-full">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    {{ $subscribtions->links() }}
@endsection
