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

Route::view('/', 'dashboard')->name('dashboard');
Route::view('/profil', 'profil')->name('profil');
Route::view('/leadership', 'leadership')->name('leadership');
Route::view('/sub-organisasi', 'sub-organisasi')->name('sub-organisasi');
Route::view('/visi-misi', 'vision-mission')->name('visi-misi');
Route::view('/struktur', 'struktur')->name('struktur');
Route::view('/programs', 'programs')->name('programs');
Route::view('/kegiatan', 'kegiatan')->name('kegiatan');
Route::view('/galeri', 'galeri')->name('galeri');
Route::view('/kontak', 'kontak')->name('kontak');
