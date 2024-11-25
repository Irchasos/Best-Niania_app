<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
/* PART OF NON AUTH USERS */

Route::get('/', [App\Http\Controllers\MainPageController::class, 'index'])->name('home');
Route::get('/version', [App\Http\Controllers\MainPageController::class, 'version'])->name('version');
Route::get('/search', [App\Http\Controllers\SearchController::class, 'index'])->name('search');
Route::get('/list', [App\Http\Controllers\SearchController::class, 'list'])->name('list');
Route::get('/guardian/{id}', [SearchController::class, 'show']);
/* AUTH */

use App\Http\Controllers\CustomAuthController;

Route::get('login', [CustomAuthController::class, 'index'])->name('login');
Route::post('custom-login', [CustomAuthController::class, 'customLogin'])->name('login.custom');
Route::get('registration', [CustomAuthController::class, 'registration'])->name('register-user');
Route::post('custom-registration', [CustomAuthController::class, 'customRegistration'])->name('register.custom');
Route::get('signout', [CustomAuthController::class, 'signOut'])->name('signout');
/* MY ACCOUNT DETAILS EDIT */
Route::get('dashboard', [CustomAuthController::class, 'dashboard'])->middleware('auth')->name('dashboard');;
Route::post('/updateDistrictStatus', [CustomAuthController::class, 'updateDistrictStatus'])->name('updateDistrictStatus');
Route::post('/updateOptionStatus', [CustomAuthController::class, 'updateOptionStatus'])->name('updateOptionStatus');
Route::post('/update-guardian-description/{id}', [CustomAuthController::class, 'updateDescription'])->name('updateGuardianDescription');
Route::post('/update-guardian-years-of-work/{id}', [CustomAuthController::class, 'updateYearsOfWork'])->name('updateGuardianYearsOfWork');
Route::post('/update-guardian-phone-number/{id}', [CustomAuthController::class, 'updatePhoneNumber'])->name('updateGuardianPhoneNumber');
Route::post('/update-guardian-degree/{id}', [CustomAuthController::class, 'updateDegree'])->name('updateGuardianDegree');
Route::post('/update-guardian-photo/{id}', [CustomAuthController::class, 'updatePhoto'])->name('updateGuardianPhoto');
/* REVIEWS   DETAILS */

use App\Http\Controllers\ReviewsController;

Route::get('/guardian/{id}/reviews', [ReviewsController::class, 'showReviews'])->name('showGuardianReviews');
Route::post('/guardian/{id}/reviews', [ReviewsController::class, 'store'])->name('storeGuardianReview');



/* PART OF SEARCHING GUARDIANS FOR JOB */

use App\Http\Controllers\SearchController;

Route::get('/guardians/search', [SearchController::class, 'index'])->name('guardians.index');
Route::get('/guardians/search/results', [SearchController::class, 'search'])->name('guardians.search');
