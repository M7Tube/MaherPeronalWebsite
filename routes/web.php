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
Route::redirect('/', '/language/en');
Route::get('/language/{language}', function () {
    return view('pages.HomePage.homepage');
})->name('homepage');
//Single Post page in dashboard
Route::view('/post', 'pages.Post.post')->name('post');

Route::group(['prefix' => '{language}', 'middleware' => 'auth'], function () {

    Route::get('/dashboard', function () {
        return view('pages.Dashboard.dashboard');
    })->name('dashboard');

    /*
        ===================
        ==Dashborad Pages==
        ===================
    */
    //settings page in dashboard
    Route::view('/Settings', 'pages.Dashboard.Settings.Settings')->name('Settings');
    //Statistics page in dashboard
    Route::view('/Statistics', 'pages.Dashboard.Statistics.Statistics')->name('Statistics');
    //Services page in dashboard
    Route::view('/Services', 'pages.Dashboard.Services.Services')->name('Services');
    //Edit Service page in dashboard
    Route::view('/EditService', 'pages.Dashboard.Services.EditService')->name('EditService');
    //Create Service page in dashboard
    Route::view('/CreateService', 'pages.Dashboard.Services.CreateService')->name('CreateService');
});

require __DIR__ . '/auth.php';
