<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\BidController;
use App\Http\Controllers\FeedbackController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Artisan;
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

// Route::get('/commands', function () {
//     Artisan::call('storage:link');
// });

Route::group(['middleware' => 'guest'], function () {
    Route::get('/register', [RegisterController::class, 'registerForm'])->name('register');
    Route::post('/register', [RegisterController::class, 'register']);
    Route::get('/login', [LoginController::class, 'loginForm'])->name('login');
    Route::post('/login', [LoginController::class, 'login']);
});

Route::group(['middleware' => ['auth']], function () {
    Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
    Route::post('/posts/store', [PostController::class, 'store'])->name('posts.store');
    Route::get('/posts/show/{post}', [PostController::class, 'show'])->name('posts.show');
    Route::get('/inquiry', [PageController::class, 'inquiry'])->name('inquiry');
    Route::post('/inquiry', [PageController::class, 'inquiryStore']);
Route::get('/offer', [PageController::class, 'offers'])->name('offers');
    Route::post('/bids/accept/{bid}', [BidController::class, 'accept'])->name('bids.accept');
});

Route::post('/feedbacks/store', [FeedbackController::class, 'store'])->name('feedbacks.store');

Route::get('services', function () {
    return view('screens.user.home');
})->name('home');
// Route::get('/', function () {
//     return view('screens.auth.signup');
// })->name('signup');

Route::get('/forget-password', function () {
    return view('screens.auth.forget');

})->name('forget');
Route::get('/verify-code', function () {
    return view('screens.auth.verification');

});
Route::get('/new-password', function () {
    return view('screens.auth.new-password');

});
Route::view('/contact-us', 'screens.user.contact')->name('contact-us');
Route::get('/about-us', function () {
    return view('screens.user.about');

})->name('about-us');
Route::get('/our-team', function () {
    return view('screens.user.teams');

})->name('our-team');
Route::get('/edit-profile', function () {
    return view('screens.auth.edit-profile');

});
Route::get('/update-password', function () {
    return view('screens.auth.update-password');

});
Route::get('/notification', function () {
    return view('screens.user.notification-view');

})->name('notification-view');

Route::get('/', [PageController::class, 'index'])->name('home');
Route::get('/privacy-policy', [PageController::class, 'privacyPolicy'])->name('privacy');
Route::get('/terms-and-conditions', [PageController::class, 'termsAndConditions'])->name('terms');

