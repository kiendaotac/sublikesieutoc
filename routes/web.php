<?php

use App\Services\VietQrService;
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

Route::group(['namespace' => 'App\Livewire'], function () {
    Route::get('/', 'HomePage')->name('home-page');
});

Route::group(['namespace' => 'App\Livewire', 'middleware' => 'auth'], function () {
    Route::get('dashboard', 'Dashboard')->name('dashboard');
    Route::get('profile', 'Profile')->name('profile');
    Route::get('payment', 'Payment')->name('payment');
    Route::get('dich-vu/{slug}', 'Service')->name('service');
});

Route::group(['namespace' => 'App\Livewire', 'middleware' => 'guest'], function () {
    Route::get('login', 'Authentication\\Login')->name('login');
    Route::get('register', 'Authentication\\Register')->name('register');
});

Route::get('logout', function () {
    \Filament\Facades\Filament::auth()->logout();
    return redirect()->route('home-page');
})->middleware('auth')->name('logout');
