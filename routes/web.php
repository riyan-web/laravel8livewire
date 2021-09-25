<?php

use App\Http\Livewire\Form;
use App\Http\Livewire\Home;
use App\Http\Livewire\Post;
use App\Http\Livewire\User;
use App\Http\Livewire\Action;
use App\Http\Livewire\Berita;
use App\Http\Livewire\Beranda;
use App\Http\Livewire\Contact;
use App\Http\Livewire\Product;
use App\Http\Livewire\Students;
use App\Http\Livewire\Konsultasi;
use App\Http\Livewire\Admin\Login;
use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Admin\Dashboard;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::get('/users', User::class);

Route::get('/yayasan', Beranda::class);

Route::get('/konsultasi', Konsultasi::class);

Route::get('/berita/{id}', Berita::class);


//admin


Route::get('/admin/login', \App\Http\Livewire\Admin\Login::class);

Route::get('/admin/dashboard', \App\Http\Livewire\Admin\Dashboard::class);

Route::get('/admin/profile', \App\Http\Livewire\Admin\Profile::class);

Route::get('/admin/program', \App\Http\Livewire\Admin\Program::class);

Route::get('/admin/layanan', \App\Http\Livewire\Admin\Layanan::class);

Route::get('/admin/galeri', \App\Http\Livewire\Admin\Galeri::class);

Route::get('/admin/berita', \App\Http\Livewire\Admin\Berita::class);
