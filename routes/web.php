<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use Symfony\Component\HttpKernel\Profiler\Profile;

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

Route::get('/dashboard', [DashboardController::class, 'index'])->middleware(['auth'])->name('dashboard');

//  profile
Route::controller(ProfileController::class)->name('profile.')->prefix('profile')->group(function () {

    Route::get('/', 'index')->name('index');
    Route::get('/about/overview', 'about')->name('about.overview');
    Route::get('/about/work-and-education', 'workAndEducation')->name('about.work-and-education');
    Route::get('/about/about-details', 'aboutDetails')->name('about.about-details');
    Route::get('/about/password', 'changePassword')->name('about.password');
    Route::get('/friends', 'friends')->name('friends');
    Route::get('/photos', 'photos')->name('photos');
    Route::get('/videos', 'videos')->name('videos');
    Route::get('/about/contacts', 'contact')->name('about.contact');
    Route::get('/about/address', 'address')->name('about.address');

});

Route::resource('posts', PostController::class)->except(['index','create','show']);

require __DIR__.'/auth.php';
