<?php
// routes/web.php
use App\Http\Controllers\LandingController;

Route::get('/', [LandingController::class, 'index']);
Route::get('/about', function () {
    return view('about');
});
Route::get('/contact', function () {
    return view('contact');
})->name('contact.form');

Route::post('/contact/submit', [ContactController::class, 'submit'])->name('contact.submit');
Route::get('/menu', function () {
    return view('menu'); // Ensure you have resources/views/menu.blade.php
});

