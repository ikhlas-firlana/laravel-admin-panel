<?php

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
    return view('welcome');
})->name('home');
Route::get('/about', 'PageController@about')->name('about');
Route::get('/contact', 'PageController@contact')->name('contact');
Route::post('/contact', 'PageController@submitContact');
Route::resource('questions', 'QuestionController');
Route::resource('answers', 'AnswersController', ['except' => ['index', 'create', 'show']]);

// Voyager sections
Route::get('/voyager', function () {
    return view('template-voyager');
});

Route::group(['prefix' => 'voyager-admin'], function () {
    Voyager::routes();
});
