<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HealthController;
use App\Http\Controllers\PoliticalController;
use App\Http\Controllers\SportController;
use App\Http\Controllers\TravelController;
use App\Http\Controllers\WorldController;


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

Route::get('/', function () {
    return view('login');
});

Route::get('/login', [LoginController::class, 'show'])->name('login');
Route::post('/login', [LoginController::class, 'auth'])->name('login.auth');
Route::get('/logout', [LoginController::class, 'logout'])->name('login.logout');

Route::get('/register', [RegisterController::class, 'show'])->name('register');
Route::post('/register', [RegisterController::class, 'store'])->name('register.store');

Route::get('/dashboard', [DashboardController::class, 'show'])->name('dashboard');

Route::middleware('auth')->group(function () {

    Route::get('/logout', [LoginController::class, 'logout'])->name('login.logout');
    // Route::delete('/remove-from-cart', [ProductController::class, 'remove'])->name('remove_from_cart');

    Route::group([
        'prefix' => 'admin',
        'middleware' => 'is_admin',
        'as' => 'admin.'
    ], function () {
        Route::get('/index', [DashboardController::class, 'index'])->name('index');
        Route::resource('tabel_data_health', HealthController::class)->name('*','tabel_data_health');
        Route::resource('tabel_data_political', PoliticalController::class)->name('*','tabel_data_political');
        Route::resource('tabel_data_world', WorldController::class)->name('*','tabel_data_world');
        Route::resource('tabel_data_travel', TravelController::class)->name('*','tabel_data_travel');
        Route::resource('tabel_data_sport', SportController::class)->name('*','tabel_data_sport');
        
        
    });
});