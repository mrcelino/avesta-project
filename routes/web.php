<?php

use App\Http\Controllers\Home;
use App\Livewire\About;
use App\Livewire\Cariayam;
use App\Livewire\Checkout;
use App\Livewire\Contact;
use App\Livewire\Dashboard;
use App\Livewire\Emailverification;
use App\Livewire\Forgotpassword;
use App\Livewire\Login;
use App\Livewire\Register;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Request;

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



Route::get('/', [Home::class, 'index']);
Route::get('/login', Login::class)->name('login');
Route::get('/register', Register::class)->name('register');
Route::get('/dashboard', Dashboard::class)->name('dashboard');
Route::get('/forgotpassword', Forgotpassword::class)->name('forgotpassword');
Route::get('/mitra', Mitra::class)->name('mitra');
Route::get('/verification', Emailverification::class)->name('verification');
Route::get('/resetpassword', Resetpassword::class)->name('resetpassword');
Route::get('/cariayam', Cariayam::class)->name('cariayam');
Route::get('/product', Product::class)->name('product');
Route::get('/about', About::class)->name('about');
Route::get('/checkout', Checkout::class)->name('checkout');
Route::get('/contact', Contact::class)->name('contact');
Route::get('/payment', Payment::class)->name('payment');
Route::get('/detailspayment', Paymentdetails::class)->name('detailspayment');


Route::middleware('guest')->group(function () {
    // Menampilkan halaman login
    Route::get('/login', Login::class)->name('login');

    // Menampilkan halaman registrasi
    Route::get('/register', Register::class)->name('register');

    // Meng-handle penyimpanan data registrasi
    // Route::post('/store', [Register::class, 'register'])->name('store');

    // Meng-handle proses autentikasi login
    // Route::post('/authenticate', [Login::class, 'authenticate'])->name('authenticate');
});

Route::middleware('auth')->group(function () {
    // Menampilkan halaman dashboard setelah login
    Route::get('/dashboard', Dashboard::class)->name('dashboard');

    // Meng-handle logout user (GET request)
    Route::get('/logout', [Login::class, 'logout'])->name('logout');
});
