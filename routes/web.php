<?php

use App\Http\Controllers\Admin\TrackController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TrackEventsController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;

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


Route::get('/', function () {
    return redirect(app()->getLocale());
})->name('home');

Route::get('/profile', function () {
    return redirect(app()->getLocale() . '/profile');
});

Route::group([
    'prefix' => '{locale}',
    'middleware' => ['set_locale'],
    'where' => ['locale' => '[a-zA-Z]{2}']
], function () {

    Route::view('/', 'home')->name('home');

    Route::group(['middleware' => 'auth'], function () {

        Route::get('/dashboard', function () {
            return view('dashboard');
        })->name('dashboard');

        Route::get('/profile', [ProfileController::class, 'index'])->name('profile.index');
        Route::get('/track/events/{id}', [TrackEventsController::class, 'show'])->name('tracks.events.show');

        Route::resource('events', EventController::class);
        
        // Route::group(['prefix' => 'admin', 'as' => 'admin.', 'middleware' => 'is_admin'], function () {
        Route::resource('tracks', TrackController::class);
        // });
    });
});

require __DIR__ . '/auth.php';
