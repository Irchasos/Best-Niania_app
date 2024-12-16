<?php

use App\Http\Controllers\CustomAuthController;
use App\Http\Controllers\MainPageController;
use App\Http\Controllers\ReviewsController;
use App\Http\Controllers\SearchController;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


Route::get('/set-locale/{locale}', static function ($locale) {
    session(['locale' => $locale]);
    App::setLocale($locale);
    return redirect()->back();
});


Route::get('/', [MainPageController::class, 'index'])->name('home');
Route::get('/version', [MainPageController::class, 'version'])->name('version');
Route::get('/search', [SearchController::class, 'index'])->name('search');
Route::get('/list', [SearchController::class, 'list'])->name('list');
Route::get('/guardian/{id}', [SearchController::class, 'show']);

/* AUTH */

Route::get('login', [CustomAuthController::class, 'index'])->name('login');
Route::post('custom-login', [CustomAuthController::class, 'customLogin'])->name('login.custom');
Route::get('registration', [CustomAuthController::class, 'registration'])->name('register-user');
Route::post('custom-registration', [CustomAuthController::class, 'customRegistration'])->name('register.custom');
Route::get('signout', [CustomAuthController::class, 'signOut'])->name('signout');

/* MY ACCOUNT DETAILS EDIT */

Route::get('dashboard', [CustomAuthController::class, 'dashboard'])->middleware('auth')->name('dashboard');
Route::post('/updateDistrictStatus', [CustomAuthController::class, 'updateDistrictStatus'])->name('updateDistrictStatus');
Route::post('/updateOptionStatus', [CustomAuthController::class, 'updateOptionStatus'])->name('updateOptionStatus');
Route::post('/update-guardian-description/{id}', [CustomAuthController::class, 'updateDescription'])->name('updateGuardianDescription');
Route::post('/update-guardian-years-of-work/{id}', [CustomAuthController::class, 'updateYearsOfWork'])->name('updateGuardianYearsOfWork');
Route::post('/update-guardian-phone-number/{id}', [CustomAuthController::class, 'updatePhoneNumber'])->name('updateGuardianPhoneNumber');
Route::post('/update-guardian-degree/{id}', [CustomAuthController::class, 'updateDegree'])->name('updateGuardianDegree');
Route::post('/update-guardian-photo/{id}', [CustomAuthController::class, 'updatePhoto'])->name('updateGuardianPhoto');

/* REVIEWS DETAILS */

Route::get('/guardian/{id}/reviews', [ReviewsController::class, 'showReviews'])->name('showGuardianReviews');
Route::post('/guardian/{id}/reviews', [ReviewsController::class, 'store'])->name('storeGuardianReview');

/* PART OF SEARCHING GUARDIANS FOR JOB */

Route::get('/guardians/search', [SearchController::class, 'index'])->name('guardians.index');
Route::get('/guardians/search/results', [SearchController::class, 'search'])->name('guardians.search');
