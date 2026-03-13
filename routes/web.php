<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminAuthController;
use App\Http\Controllers\Admin\HeroImageController;
use App\Http\Controllers\BidangStudiController;
use App\Http\Controllers\LayananJasaController;
use App\Http\Controllers\TestimonialController;

/*
|--------------------------------------------------------------------------
| User Routes
|--------------------------------------------------------------------------
*/

Route::get('/', [HeroImageController::class, 'frontend'])->name('home');

Route::get('bidang-studi', [BidangStudiController::class, 'index'])->name('bidangstudi.index');
Route::get('bidang-studi/{slug}', [BidangStudiController::class, 'show'])->name('bidangstudi.show');

Route::get('layanan-jasa', [LayananJasaController::class, 'index'])->name('layanan.index');
    Route::get('layanan-jasa/{slug}', [LayananJasaController::class, 'show'])->name('layanan.show');

Route::get('karya-siswa', [\App\Http\Controllers\KaryaSiswaController::class, 'index'])->name('karyasiswa.index');
Route::get('karya-siswa/{slug}', [\App\Http\Controllers\KaryaSiswaController::class, 'show'])->name('karyasiswa.show');

Route::get('testimoni', [TestimonialController::class, 'index'])->name('testimoni.index');
Route::post('testimoni', [TestimonialController::class, 'store'])->name('testimoni.store');

Route::get('artikel', [\App\Http\Controllers\ArtikelController::class, 'index'])->name('artikel.index');
Route::get('artikel/{artikel}', [\App\Http\Controllers\ArtikelController::class, 'show'])->name('artikel.show');
Route::post('artikel/{artikel}/comment', [\App\Http\Controllers\ArtikelController::class, 'storeComment'])->name('artikel.comment.store');

Route::get('contact', function () {
    $contactInfos = \App\Models\ContactInfo::all();
    return view('users.contact', compact('contactInfos'));
})->name('contact');

Route::post('contact/send', function (Request $request) {
    $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|email|max:100',
        'message' => 'required|string',
    ]);

    // Send email to company
    \Mail::raw($request->message, function ($message) use ($request) {
        $message->to('info@creativemedia.com')
               ->subject('Pesan Kontak dari ' . $request->name)
               ->from($request->email, $request->name);
    });

    return redirect()->back()->with('success', 'Pesan Anda telah dikirim!');
})->name('contact.send');

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
    Route::resource('partner', \App\Http\Controllers\Admin\OurPartnerController::class);
    Route::resource('bidangstudi', \App\Http\Controllers\Admin\BidangStudiController::class);
    Route::resource('layananjasa', \App\Http\Controllers\Admin\LayananJasaController::class);
    Route::resource('karyasiswa', \App\Http\Controllers\Admin\KaryaSiswaController::class);
    Route::resource('testimoni', \App\Http\Controllers\Admin\TestimonialController::class);
    Route::resource('youtube-video', \App\Http\Controllers\Admin\YoutubeVideoController::class);
    Route::resource('artikel', \App\Http\Controllers\Admin\ArtikelController::class);
    Route::resource('komentar', \App\Http\Controllers\Admin\KomentarController::class);
    Route::resource('contact-info', \App\Http\Controllers\Admin\ContactInfoController::class);

});


