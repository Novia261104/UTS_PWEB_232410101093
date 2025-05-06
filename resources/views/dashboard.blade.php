@extends('layouts.app')

@section('content')
<div class="bg-white rounded-lg shadow-md p-6">
    <h1 class="text-2xl text-center font-bold text-violet-800 mb-6">Dashboard</h1>

    <div class="mb-8">
        <div class="bg-violet-50 border-l-4 border-violet-500 p-4">
            <div class="flex ml-3">
                <p class="text-sm text-violet-800">
                    Selamat Datang, <span class="font-medium">{{ $username }}</span>!
                </p>
            </div>
        </div>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-6 px-6 py-8">
        @foreach($bouquets as $bouquet)
            <div class="bg-white rounded-xl shadow-lg p-6 text-center hover:shadow-xl hover:scale-105">
                <img src="{{ asset('images/' . $bouquet['image']) }}" class="mx-auto h-48 object-contain">
                <h2 class="text-xl font-semibold text-violet-800 mt-4">{{ $bouquet['title'] }}</h2>
                <p class="text-gray-600 mt-2">{{ $bouquet['desc'] }}</p>
            </div>
        @endforeach
    </div>
</div>
@endsection
