@extends('layouts.app')

@section('content')
<div class="bg-white rounded-lg shadow-md p-6">
    <h2 class="text-2xl text-center font-bold mb-4 text-violet-800">Pengelolaan Bunga</h2>
    <table class="table-auto border border-gray-400 w-full text-left">
        <thead class="bg-gray-100">
            <tr>
                <th class="border border-gray-400 px-4 py-2">Kategori</th>
                <th class="border border-gray-400 px-4 py-2">Jenis</th>
                <th class="border border-gray-400 px-4 py-2">Keterangan</th>
                <th class="border border-gray-400 px-4 py-2">Harga</th>
            </tr>
        </thead>

        <tbody>
            @foreach($produk as $item)
                <tr>
                    <td class="border border-gray-400 px-4 py-2">{{ $item['kategori'] }}</td>
                    <td class="border border-gray-400 px-4 py-2">{{ $item['jenis'] }}</td>
                    <td class="border border-gray-400 px-4 py-2">{{ $item['keterangan'] }}</td>
                    <td class="border border-gray-400 px-4 py-2">Rp {{ number_format($item['harga'], 0, ',', '.') }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
