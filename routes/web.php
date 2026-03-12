<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminAuthController;

/*
|--------------------------------------------------------------------------
| User Routes
|--------------------------------------------------------------------------
*/

Route::get('/', function () {
    return view('users.beranda');
})->name('home');

Route::get('bidang-studi/administrasi-perkantoran', function () {
    return view('users.bidangstudi-administrasiperkantoran');
})->name('bidangstudi.administrasi');

Route::get('layanan-jasa/branding-design', function () {
    return view('users.layananjasa-branding-design');
})->name('layanan.branding');


/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
*/
Route::prefix('admin')->group(function () {

    // Login & Logout
    Route::get('login', [AdminAuthController::class, 'showLoginForm'])->name('admin.login');
    Route::post('login', [AdminAuthController::class, 'login'])->name('admin.login.submit');
    Route::post('logout', [AdminAuthController::class, 'logout'])->name('admin.logout');

    // Protected Admin Routes
    Route::middleware('auth:admin')->group(function () {
        Route::get('dashboard', function () {
            return view('admin.dashboard');
        })->name('admin.dashboard');
    });
});

Route::prefix('admin')
    ->middleware('auth:admin')
    ->name('admin.')
    ->group(function () {

    Route::resource('hero', \App\Http\Controllers\Admin\HeroImageController::class);
    Route::resource('team', \App\Http\Controllers\Admin\OurTeamController::class);
    Route::resource('history', \App\Http\Controllers\Admin\HistoryController::class);
    Route::resource('partner', \App\Http\Controllers\Admin\OurPartnerController::class);

});


