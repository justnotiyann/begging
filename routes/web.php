<?php

use App\Http\Controllers\LogOut;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', \App\Livewire\Auth\Login::class)->name('login');
Route::get('/register', \App\Livewire\Auth\Register::class)->name('register');

Route::get('/dashboard/admin/products', \App\Livewire\Dashboard\Admin\Product::class)->name('dashboard.admin.products');

// Logout
Route::post('/logout', LogOut::class)->name('logout');
