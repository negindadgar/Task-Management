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

use App\Article;
use Illuminate\Support\Facades\Validator;

Route::get('/',  'HomController@Home');
Route::get('/about','HomeController@about');
Route::get('/contact','HomeController@contact');


//Route::get('/login','Auth\LoginController');


Route::get('/', 'HomeController@home');
Route::get('/task/{articleSlug}' , 'TaskController@single');
Route::get('/about', 'HomeController@about');
Route::get('/contact/asfaf/afasfal', 'HomeController@contact')->name('contact');



Route::prefix('admin')->namespace('Admin')->middleware('auth')->group(function() { //36 rooket.ir آشنایی با کنترلرها
    Route::get('/task','TaskController@index');
    Route::get('/task/create' ,'TaskController@create');
    Route::post('/task/create','TaskController@store');
    Route::get('/task/{id}/edit' ,'TaskController@edit');
    Route::put('/task/{id}/edit' ,'TaskController@update');
    Route::delete('/task/{id}' ,'TaskController@delete');
});



Auth::routes();