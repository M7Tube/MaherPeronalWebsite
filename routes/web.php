<?php

use Illuminate\Support\Facades\Route;

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
    return view('homepage');
})->name('homepage');
Route::group(['prefix' => '{language}'], function () {

    Route::get('/dashboard', function () {
        return view('dashboard');
    })->middleware(['auth'])->name('dashboard');



    //settings page in dashboard
    Route::view('/Settings', 'Dashboard.Settings.Settings')->middleware(['auth'])->name('Settings');
    //Statistics page in dashboard
    Route::view('/Statistics', 'Dashboard.Statistics.Statistics')->middleware(['auth'])->name('Statistics');
    
});

require __DIR__ . '/auth.php';
