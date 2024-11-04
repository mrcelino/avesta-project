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
use App\View\Components\aboutavesta;
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


Route::get('/', [Home::class, 'index'])->name('home');


Route::name('')->group(function() {
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
    Route::get('/history', Purchasehistory::class)->name('purchasehistory');
    Route::get('/pickup', Pickup::class)->name('pickup');
});