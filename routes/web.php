<?php

use Illuminate\Support\Facades\Auth;
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

//Auth::routes();

// Login
    Route::get('/en/login', ['as' => 'login', 'uses' => 'Auth\RegisterController@showRegistrationForm']);
    Route::post('/en/login', ['as' => 'login.post', 'uses' => 'Auth\LoginController@login']);
    Route::post('/en/logout', ['as' => 'logout', 'uses' => 'Auth\LoginController@logout']);
// Registration Routes...
Route::get('register', ['as' => 'register', 'uses' => 'Auth\RegisterController@showRegistrationForm']);
Route::post('register', ['as' => 'register.post', 'uses' => 'Auth\RegisterController@register']);

// Password Reset Routes...
Route::get('password/reset', ['as' => 'password.reset', 'uses' => 'Auth\ForgotPasswordController@showLinkRequestForm']);
Route::post('password/email', ['as' => 'password.email', 'uses' => 'Auth\ForgotPasswordController@sendResetLinkEmail']);
Route::get('password/reset/{token}', ['as' => 'password.reset.token', 'uses' => 'Auth\ResetPasswordController@showResetForm']);
Route::post('password/reset', ['as' => 'password.reset.post', 'uses' => 'Auth\ResetPasswordController@reset']);




Route::get('/', function () {
    return view('welcome');
});
Route::post('/sendInFuture', 'LetterController@formShow')->name('formShow');
Route::get('/sendInFuture', 'LetterController@viewForm')->name('viewForm');
Route::post('/sendVideo', 'LetterController@video')->name('video');

Route::get('/test', 'LetterController@test')->name('test');
Route::get('/home', function () {
    die();
})->name('home');

Route::get('/home2', 'HomeController@index')->name('home2');
