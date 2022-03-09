<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\WorkController;
use App\Http\Controllers\HobbyController;
use App\Http\Controllers\AddressController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\LanguageController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\EducationController;
use App\Http\Controllers\PhotoController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::permanentRedirect('/', '/login');

Route::middleware(['auth'])->group(function () {

    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    #  profile routes
    Route::controller(ProfileController::class)->name('profile.')->prefix('profile')->group(function () {
        Route::get('/', 'index')->name('index');
        Route::get('/about/overview', 'about')->name('about.overview');
        Route::get('/about/about-details', 'aboutDetails')->name('about.about-details');
        Route::put('/about/update/about-details', 'updateAboutDetails')->name('update.about-details');
        Route::get('/delete/profile-photo', 'deleteProfilePhoto')->name('delete.profile-photo');
        Route::get('/delete/cover-photo', 'deleteCoverPhoto')->name('delete.cover-photo');
        Route::match(['get', 'put'], '/password/update', 'updatePassword')->name('update.password');
        Route::get('/friends', 'friends')->name('friends');
        Route::get('/videos', 'videos')->name('videos');
        Route::match(['get', 'put'], '/about/contacts', 'updateContact')->name('contact.update');
    });

    Route::resource('works', WorkController::class)->except(['index', 'show']);

    Route::resource('educations', EducationController::class)->except(['index', 'show', 'create']);

    Route::get('/about/address', [AddressController::class, 'create'])->name('addresses.create');
    Route::put('/about/address', [AddressController::class, 'update'])->name('addresses.update');

    Route::resource('posts', PostController::class)->except(['index', 'create', 'show']);

    Route::resource('hobbies', HobbyController::class)->only(['store', 'destroy']);

    Route::resource('languages', LanguageController::class)->only(['store', 'destroy']);

    Route::resource('photos', PhotoController::class)->except(['create', 'show', 'store']);
});

require __DIR__ . '/auth.php';
