<?php

use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Auth;
use App\Livewire\Auth\Register as Registeracc;


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

Route::view ('/', 'dashboard');

Route::view('dashboard', 'dashboard')
    // ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::get('/register-account', Registeracc::class)
->name('registeracc');

Auth::routes(['verify' => true]);

// Membuat Admid
Route::get('/make-admin', [ContactController::class, 'makeAdmin']);
Route::get('crud', [HomeController::class, 'admin']);

Route::view('profile', 'profile')
    ->middleware(['auth', 'verified' => true])
    ->middleware(['auth', 'verified'])
    ->name('profile');


// Route::group(['middleware' => 'guest'], function(){

//     //register
//     Route::livewire('/register', 'auth.register')
//     ->layout('layouts.app')->name('auth.register');

// });

// Route::middleware('auth')->group(function () {
//     Route::get('/email/verify', [VerifiedController::class, 'show'])->name('verification.notice');
//     Route::get('/email/verify/{id}/{hash}', [VerifiedController::class, 'verify'])->name('verification.verify');
// });

Auth::routes(['verify' => true]);  // This will automatically include routes for email verification 

Route::get('/login', [AuthenticatedSessionController::class, 'create'])
->name('login');

Route::post('/logout', [AuthenticatedSessionController::class, 'destroy'])
->name('logout');


Route::view('product', 'product')
    ->name('product'); 

Route::view('about', 'about')
    ->name('about'); 

Route::view('pdetail1', 'pdetail1')
    ->middleware(['auth'])
    ->name('pdetail1'); 

Route::view('pdetail2', 'pdetail2')
    ->middleware(['auth'])
    ->name('pdetail2');
    
Route::view('pdetail3', 'pdetail3')
    ->middleware(['auth'])
    ->name('pdetail3'); 

Route::view('cart', 'cart')
    ->middleware(['auth'])
    ->name('cart');


Route::view('order', 'order')
    ->middleware(['auth'])
    ->name('order');


Route::view('admin', 'admin')
    ->middleware(['auth'])
    ->name('admin');


Route::middleware('auth')->group(function () {
    Route::view('/profile', 'profile')->name('profile');
    Route::put('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::put('/password', [ProfileController::class, 'updatePassword'])->name('password.update');
    Route::post('/logout', [AuthenticatedSessionController::class, 'destroy'])->name('logout');
});


Route::get('/contact', function () {
    return view('contact'); // Menggunakan file contact.blade.php
})->name('contact');

Route::post('/contact/store', [ContactController::class, 'store'])->name('contact.store');







Route::get('contact', [ContactController::class, 'showForm'])->name('contact.form');
Route::post('contact', [ContactController::class, 'store'])->name('contact.store');

Route::prefix('contacts')->name('contacts.')->group(function() {
    Route::get('/', [ContactController::class, 'index'])->name('index');
    Route::get('create', [ContactController::class, 'create'])->name('create');
    Route::post('store', [ContactController::class, 'store'])->name('store');
    Route::get('edit/{id}', [ContactController::class, 'edit'])->name('edit');
    Route::put('update/{id}', [ContactController::class, 'update'])->name('update');
    Route::delete('destroy/{id}', [ContactController::class, 'destroy'])->name('destroy');
});

    require __DIR__.'/auth.php';
