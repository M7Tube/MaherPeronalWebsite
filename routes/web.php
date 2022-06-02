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
    return view('pages.HomePage.homepage');
})->name('homepage');
Route::group(['prefix' => '{language}'], function () {

    Route::get('/dashboard', function () {
        return view('pages.Dashboard.dashboard');
    })->middleware(['auth'])->name('dashboard');

    //Single Blog page in dashboard
    Route::view('/Blog', 'pages.Blog.blog')->middleware(['auth'])->name('Blog');
    /*
        ===================
        ==Dashborad Pages==
        ===================
    */
    //settings page in dashboard
    Route::view('/Settings', 'pages.Dashboard.Settings.Settings')->middleware(['auth'])->name('Settings');
    //Statistics page in dashboard
    Route::view('/Statistics', 'pages.Dashboard.Statistics.Statistics')->middleware(['auth'])->name('Statistics');
});

require __DIR__ . '/auth.php';
