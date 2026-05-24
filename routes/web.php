<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
})->name('home');

Route::get('/products', function () {
    $products = [
        [
            'title' => 'Golda Prawn',
            'subtitle' => 'গলদা চিংড়ি',
            'image' => 'https://nahidsworld.com/upload/fish001/IMG_5780%20Medium.jpeg',
            'price' => '৳1,250',
            'old_price' => '৳1,420',
            'unit' => 'per kg',
            'badge' => 'In Stock',
        ],
        [
            'title' => 'Fresh River Fish',
            'subtitle' => 'Ready to cook',
            'image' => 'https://nahidsworld.com/upload/fishes/6900dd4421e25_1761664324.jpg',
            'price' => '৳890',
            'old_price' => '৳980',
            'unit' => 'per kg',
            'badge' => 'In Stock',
        ],
        [
            'title' => 'River Pangash Fish',
            'subtitle' => 'নদীর পাঙ্গাস',
            'image' => 'https://nahidsworld.com/upload/fishes/fishes/690091463625e_1761644870.jpg',
            'price' => '৳1,250',
            'old_price' => '৳1,360',
            'unit' => 'per kg',
            'badge' => 'In Stock',
        ],
        [
            'title' => 'Tapshi Fish',
            'subtitle' => 'তাপসি মাছ',
            'image' => 'https://nahidsworld.com/upload/fishes/6900c8eebe570_1761659118.jpg',
            'price' => '৳780',
            'old_price' => '৳850',
            'unit' => 'per kg',
            'badge' => 'In Stock',
        ],
        [
            'title' => 'Mixed Fish Pack',
            'subtitle' => '2kg ready to cook',
            'image' => 'https://nahidsworld.com/upload/others/other_1776507024_69e358907d849.jpeg',
            'price' => '৳650',
            'old_price' => '৳720',
            'unit' => 'per kg',
            'badge' => 'In Stock',
        ],
        [
            'title' => 'Fresh Seafood Cut',
            'subtitle' => 'Cleaned and packed',
            'image' => 'https://nahidsworld.com/upload/fish001/IMG_5905%20Medium.jpeg',
            'price' => '৳930',
            'old_price' => '৳1,020',
            'unit' => 'per kg',
            'badge' => 'In Stock',
        ],
    ];

    return view('pages.category', [
        'category' => [
            'name' => 'Fish & Seafood',
            'description' => 'Fresh fish and seafood products',
            'count' => count($products),
            'icon' => 'https://nahidsworld.com/upload/fish001/IMG_5780%20Medium.jpeg',
        ],
        'products' => $products,
    ]);
})->name('products');

Route::get('/category/fish-seafood', function () {
    return redirect()->route('products');
})->name('category.fish-seafood');

Route::get('/cart', function () {
    return view('index');
})->name('cart');

Route::get('/checkout', function () {
    return view('pages.checkout');
})->name('checkout');

Route::get('/login', function () {
    return view('pages.login');
})->name('login');

Route::get('/register', function () {
    return view('pages.signup');
})->name('register');

Route::get('/signup', function () {
    return view('pages.signup');
})->name('signup');

Route::get('/contact-us', function () {
    return view('pages.contact-us');
})->name('contact-us');

Route::get('/contactus', function () {
    return redirect()->route('contact-us');
})->name('contactus');

Route::get('/about-us', function () {
    return view('pages.about-us');
})->name('about-us');

Route::get('/order-success', function () {
    return view('pages.order-success');
})->name('order-success');
