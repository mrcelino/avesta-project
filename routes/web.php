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
use App\Livewire\Mitra;
use App\Livewire\Payment;
use App\Livewire\Paymentdetails;
use App\Livewire\Pickup;
use App\Livewire\Product;
use App\Livewire\Purchasehistory;
use App\Livewire\Resetpassword;
use App\Livewire\Settings;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Request;


Route::get('/', [Home::class, 'index'])->name('home');
Route::get('/product', Product::class)->name('product');
Route::get('/about', About::class)->name('about');
Route::get('/contact', Contact::class)->name('contact');
Route::get('/mitra', Mitra::class)->name('mitra');

Route::middleware('guest')->group(function () {
    Route::get('/login', Login::class)->name('login');
    Route::get('/register/{role?}', Register::class)->name('register');

    // Meng-handle penyimpanan data registrasi
    // Route::post('/store', [Register::class, 'register'])->name('store');

    // Meng-handle proses autentikasi login
    // Route::post('/authenticate', [Login::class, 'authenticate'])->name('authenticate');

    Route::get('/forgotpassword', Forgotpassword::class)->name('forgotpassword');
    Route::get('/verification', Emailverification::class)->name('verification');
    Route::get('/resetpassword', ResetPassword::class)->name('resetpassword');
});


Route::middleware('auth')->group(function () {
    // Menampilkan halaman dashboard setelah login
    Route::get('/dashboard', Dashboard::class)->name('dashboard');
    Route::get('/logout', [Login::class, 'logout'])->name('logout');
    Route::get('/settings', Settings::class)->name('settings'); 
    // Route::get('/resetpassword', Resetpassword::class)->name('resetpassword');
    Route::get('/cariayam', Cariayam::class)->name('cariayam');
    Route::get('/checkout', Checkout::class)->name('checkout');
    Route::get('/payment', Payment::class)->name('payment');
    Route::get('/detailspayment', Paymentdetails::class)->name('detailspayment');
    Route::get('/history', Purchasehistory::class)->name('purchasehistory');
    Route::get('/pickup', Pickup::class)->name('pickup');
});
