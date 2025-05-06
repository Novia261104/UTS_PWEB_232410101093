<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function login() {
        return view('login');
    }

    public function ProsesLogin(Request $request) {
        $usernameInput = $request->input('username');
        $passwordInput = $request->input('password');

        $akun = [
            [
                'username' => 'admin',
                'password' => '111'
            ]
            ];

        foreach ($akun as $user) {
            if ($user['username'] === $usernameInput && $user['password'] === $passwordInput) {
                session(['user' => $user]);
                return redirect()->route('dashboard', ['username' => $usernameInput]);
            }
        }

        return redirect()->route('login');
    }

    public function dashboard(Request $request) {
        $username = $request->query('username');

        $bouquets = [
            [
                'image' => 'simple.png',
                'title' => 'Simple Bouquet',
                'desc' => 'Simple bouquet that contains 1 to 3 flowers.',
            ],
            [
                'image' => 'basket.png',
                'title' => 'Basket Flower',
                'desc' => 'Easy to bring, charm with the new style.',
            ],
            [
                'image' => 'medium.png',
                'title' => 'Medium Bouquet',
                'desc' => 'Medium size for your pretty flowers.',
            ],
        ];

        return view('dashboard', compact('username', 'bouquets'));
    }


    public function pengelolaan(Request $request) {
        $produk = [
            ['kategori' => 'Simple Bouquet', 'jenis' => 'Krisan Kuning', 'keterangan' => '1 Tangkai', 'harga' => 10000],
            ['kategori' => 'Simple Bouquet', 'jenis' => 'Krisan Kuning', 'keterangan' => '2 Tangkai', 'harga' => 15000],
            ['kategori' => 'Simple Bouquet', 'jenis' => 'Krisan Kuning', 'keterangan' => '3 Tangkai', 'harga' => 17000],
            ['kategori' => 'Simple Bouquet', 'jenis' => 'Krisan Putih', 'keterangan' => '1 Tangkai', 'harga' => 10000],
            ['kategori' => 'Simple Bouquet', 'jenis' => 'Krisan Putih', 'keterangan' => '2 Tangkai', 'harga' => 15000],
            ['kategori' => 'Simple Bouquet', 'jenis' => 'Krisan Putih', 'keterangan' => '3 Tangkai', 'harga' => 17000],
            ['kategori' => 'Basket Flower', 'jenis' => 'Mix-Small', 'keterangan' => '3 jenis bunga', 'harga' => 40000],
            ['kategori' => 'Basket Flower', 'jenis' => 'Mix-Medium', 'keterangan' => '5 jenis bunga', 'harga' => 70000],
            ['kategori' => 'Basket Flower', 'jenis' => 'Mix-Large', 'keterangan' => '7 jenis bunga', 'harga' => 100000],
            ['kategori' => 'Medium Bouquet', 'jenis' => 'Single', 'keterangan' => '1 jenis bunga', 'harga' => 100000],
            ['kategori' => 'Medium Bouquet', 'jenis' => 'Mix-3', 'keterangan' => '3 jenis bunga', 'harga' => 170000],
            ['kategori' => 'Medium Bouquet', 'jenis' => 'Mix-5', 'keterangan' => '5 jenis bunga', 'harga' => 210000],
        ];

        return view('pengelolaan', ['produk' => $produk]);
    }

    public function profile() {
        $user = session('user');
        return view('profile', compact('user'));
    }
}
