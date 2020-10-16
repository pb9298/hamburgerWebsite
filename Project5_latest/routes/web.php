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
    return view('welcome');
});

Route::get('/index',function(){
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('contact-us', 'ContactController@getContact');
Route::post('contact-us', 'ContactController@saveContact');

//Route::get('list1', 'menu@list1');
Route::get('index','menuController@index')->name('welcome');
Route::get('admin', 'adminController@index');
Route::post('admin', 'adminController@savemenu');

Route::get('editMenu/{item_no}','adminController@show');
Route::post('editMenu/{item_no}','adminController@edit');
Route::get('deleteMenu/{item_no}','adminController@destroy');
//Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');

Route::get('menu', 'actualMenuController@index')->name('menu');
Route::get('/user', 'userController@index')->name('user');
Route::get('/aboutus', 'aboutusController@index')->name('aboutus');