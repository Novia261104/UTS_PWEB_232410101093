@extends('layouts.app')

@section('content')
<div class="bg-white rounded-lg shadow-md p-6">
    <h1 class="text-2xl text-center font-bold text-violet-800 mb-6">Profile</h1>

    <div class="flex justify-center">
        <div class="w-full max-w-md">
            <label class="block text-sm font-medium text-gray-500 mb-1 text-left">
                Username
            </label>

            <div class="w-full border border-gray-300 rounded-md px-4 py-2 text-gray-800">
                {{ $user['username'] }}
            </div>
        </div>
    </div>
</div>
@endsection
