<?php
use App\Http\Controllers\Home;
use App\Livewire\Login;
use App\Livewire\Register;
use App\Livewire\Dashboard;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

Route::middleware('guest')->group(function () {
    // Menampilkan halaman login
    Route::get('/login', Login::class)->name('login'); 
    
    // Menampilkan halaman registrasi
    Route::get('/register', Register::class)->name('register');
    
    // Meng-handle penyimpanan data registrasi
    Route::post('/store', [Register::class, 'register'])->name('store');
    
    // Meng-handle proses autentikasi login
    Route::post('/authenticate', [Login::class, 'authenticate'])->name('authenticate');
});  

Route::middleware('auth')->group(function() {
    // Menampilkan halaman dashboard setelah login
    Route::get('/dashboard', [Dashboard::class, 'dashboard'])->name('dashboard');
    
    // Meng-handle logout user (GET request)
    Route::get('/logout', [Login::class, 'logout']);
    
    // Meng-handle logout user (POST request)
    Route::post('/logout', [Login::class, 'logout'])->name('logout');
});
