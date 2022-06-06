<?php

use App\Models\NewsletterEmail;
use Illuminate\Http\Request;
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
Route::view('/post/{id}', 'pages.Post.post')->name('post');
//Single Item page in dashboard
Route::view('/{language}/Item/{id}', 'pages.Items.ShowItem')->name('ShowItem');
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
    //Posts page in dashboard
    Route::view('/Posts', 'pages.Dashboard.Posts.Posts')->name('Posts');
    //Create Post page in dashboard
    Route::view('/CreatePost', 'pages.Dashboard.Posts.CreatePost')->name('CreatePost');
    //Edit Post page in dashboard
    Route::view('/EditPost', 'pages.Dashboard.Posts.EditPost')->name('EditPost');
    //NewsletterEmails page in dashboard
    Route::view('/NewsletterEmails', 'pages.Dashboard.NewsletterEmails.NewsletterEmails')->name('NewsletterEmails');
    //Edit NewsletterEmails page in dashboard
    Route::view('/EditNewsletterEmails', 'pages.Dashboard.NewsletterEmails.EditNewsletterEmails')->name('EditNewsletterEmails');
    //Items page in dashboard
    Route::view('/Items', 'pages.Dashboard.Items.Items')->name('Items');
    //Edit Items page in dashboard
    Route::view('/EditItem', 'pages.Dashboard.Items.EditItem')->name('EditItem');
    //Create Item page in dashboard
    Route::view('/CreateItem', 'pages.Dashboard.Items.CreateItem')->name('CreateItem');
});

require __DIR__ . '/auth.php';
