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
Route::controller(ProfileController::class)->group(function () {
    
    Route::get('profile', 'index')->name('profile.index');
    Route::get('profile/about/overview', 'about')->name('profile.about.overview');
    Route::get('profile/about/work-and-education', 'workAndEducation')->name('profile.about.work-and-education');
    Route::get('profile/friends', 'friends')->name('profile.friends');
    Route::get('profile/photos', 'photos')->name('profile.photos');
    Route::get('profile/videos', 'videos')->name('profile.videos');
  
});

Route::resource('posts', PostController::class)->except(['index','create','show']);

require __DIR__.'/auth.php';
