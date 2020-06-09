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



Route::get('/', function()
{
    return view('FirstHome'); });


Route::get('register', function()
{
    return view('register'); });

Route::get('login', function()
{
    return view('login'); });

Route::get('about', function()
{
    return view('about'); });

Route::get('contact', function()
{
    return view('contact'); });

Route::get('FirstHome', function()
{
    return view('FirstHome'); });

Route::get('home1', function()
{
    return view('FirstHome'); });

  Auth::Routes();
  Route::get('/home', 'HomeController@index')->name('home');

Route::post('/AdminPages.delete','ProductController@store');
Route::get ("/delete/{id}","ProductController@delete");
Route::get("UserPages.index","UserDataController@InsertToDb");
Route::get('/AdminPages.delete','ProductController@LoadDb');

Route::post('/AdminPages.UserDetails','UserDataController@storees');
Route::get ('/AdminPages.UserDetails','UserDataController@indexeee');

Route::get ("/deletee/{id}","UserDataController@deletes");
Route::get("AdminPages.UserDetails","UserDataController@InsertTodbb");


    /*

//Login Routes
Route::get('login', 'Auth\loginController@showLoginForm')->name('login');
Route::post('login', 'Auth\loginController@login');
Route::get('logout', 'Auth\LoginController@logout')->name('logout');
//Register Routes
Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('register');
Route::post('register', 'Auth\RegisterController@register');

//Admin midlleware
Route::group(['Middleware' => ['checkadmin']] ,function () {
      //Admin Functions will be here
});
*/
