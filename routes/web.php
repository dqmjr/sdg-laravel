<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\SdgGoalController;
use App\Http\Controllers\Admin\SdgIndicatorController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\HomeController;

Auth::routes(['register' => false]);


Route::get('lang/{locale}', function($locale) {
    if (in_array($locale, ['kk','ru','en'])) {
        session(['locale' => $locale]);
    }
    return redirect()->back();
})->name('set.lang');


Route::post('/locale', [PageController::class, 'setLocale'])->name('user.locale');

Route::group([], function () {
    Route::get('/', [HomeController::class, 'index'])->name('home');
    Route::get('/publications', [PageController::class, 'publications'])->name('publications');
    Route::get('/millennium-development-goals', [PageController::class, 'millennium_development_goals'])->name('millennium-development-goals');
    Route::get('/events-activities', [PageController::class, 'events_activities'])->name('events-activities');
    Route::get('/useful-resources', [PageController::class, 'useful_resources'])->name('useful-resources');
    Route::get('/contacts', [PageController::class, 'contacts'])->name('contacts');
});

Route::group(['prefix' => '{locale}', 'where' => ['locale' => 'ru|en']], function () {
    Route::get('/', [HomeController::class, 'index'])->name('home.lang');
    Route::get('/publications', [PageController::class, 'publications'])->name('publications.lang');
    Route::get('/millennium-development-goals', [PageController::class, 'millennium_development_goals'])->name('millennium-development-goals.lang');
    Route::get('/events-activities', [PageController::class, 'events_activities'])->name('events-activities.lang');
    Route::get('/useful-resources', [PageController::class, 'useful_resources'])->name('useful-resources.lang');
    Route::get('/contacts', [PageController::class, 'contacts'])->name('contacts.lang');
});

Route::middleware(['auth', 'is_admin'])->prefix('admin')->name('admin.')->group(function () {
    Route::get('/', function () {
        return redirect()->route('admin.goals.index');
    });

    Route::resource('users', UserController::class);
    Route::resource('goals', SdgGoalController::class);
    Route::resource('indicators', SdgIndicatorController::class);
});

Route::redirect('/home', '/', 301);
