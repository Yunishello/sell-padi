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
    return view('pages.index');
});
// Route::get('/', 'PagesController@index');
Route::get('/contact', 'PagesController@contact');
Route::get('/login', 'PagesController@login');
Route::get('/register', 'PagesController@register');
Route::get('/regions', 'PagesController@regions');
Route::get('/terms', 'PagesController@terms');
Route::get('/privacy', 'PagesController@privacy');
Route::get('/sitemap', 'PagesController@sitemap');
Route::get('/post', 'PagesController@post');
Route::get('/categories', 'PagesController@categories');
Route::get('/classified', 'PagesController@classified');
Route::get('/single', 'PagesController@single');
Route::get('/mobile', 'PagesController@mobile');
Route::get('/howit', 'PagesController@howit');
Route::get('/faq', 'PagesController@faq');
Route::get('/jobs', 'PagesController@jobs');
