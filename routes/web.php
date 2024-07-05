<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

/*-------------HOME--------------*/

Route::get('/', function () {
    return view('home');
})->name('home');

/*-----------------------------MENU NAVBAR-------------------------------*/
/*-------------PROFIL--------------*/
Route::get('/profile', function () {
    return view('navbar-menu.profile');
})->name('profile');

/*-------------VISI MISI--------------*/
Route::get('/visiMisi', function () {
    return view('navbar-menu.visi-misi');
})->name('visiMisi');

/*-------------PRODUK KAMI--------------*/
Route::get('/produk', function () {
    return view('navbar-menu.produk-kami');
})->name('produk');

/*-------------KONTAK KAMI--------------*/
Route::get('/kontak', function () {
    return view('navbar-menu.kontak-kami');
})->name('kontak');

/*-------------ABOUT US--------------*/
Route::get('/aboutUs', function () {
    return view('navbar-menu.about-us');
})->name('aboutUs');




/*-----------------------------MENU SIDEBAR-------------------------------*/
/*-------------ARTIKEL--------------*/
Route::get('/artikel', function () {
    return view('sidebar-menu.artikel');
})->name('artikel');

/*-------------EVENT--------------*/
Route::get('/event', function () {
    return view('sidebar-menu.event');
})->name('event');

/*-------------GALLERY--------------*/
Route::get('/gallery', function () {
    return view('sidebar-menu.galery');
})->name('gallery');

/*-------------KLIEN KAMI--------------*/
Route::get('/klienKami', function () {
    return view('sidebar-menu.klien-kami');
})->name('klienKami');

/*-------------SIGN IN--------------*/
Route::get('/signIn', function () {
    return view('sidebar-menu.sign-in');
})->name('signIn');
