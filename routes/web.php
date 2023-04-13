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

Route::group(['namespace' => 'App\Http\Controllers'], function()
{   
    /**
     * Home Routes
     */
    Route::get('/', 'HomeController@index')->name('home.index');
      
    Route::group(['middleware' => ['guest']], function() {
        /**
         * Register Routes
         */
        Route::get('/register', 'RegisterController@show')->name('register.show');
        Route::post('/register', 'RegisterController@register')->name('register.perform');

        /**
         * Login Routes
         */
        Route::get('/login', 'LoginController@show')->name('login.show');
        Route::post('/login', 'LoginController@login')->name('login.perform');

    });
    Route::get('/homee', function () {
        return view('home.homee');
    })->name('homee');
    
    
    
    Route::get('/estimer', function () {
        return view('estimer');
    })->name('estimer');
   


    Route::group(['middleware' => ['auth']], function() {
        /**
         * Logout Routes
         */
        Route::get('/logout', 'LogoutController@perform')->name('logout.perform');

       
    });
    Route::put('/users/update-picture', 'UserController@updatePicture')->name('users.update-picture');

    Route::delete('/users{user}', 'UserController@delete')->name('users.delete');
    Route::get('/users', 'UserController@show')->name('users.show');
    Route::put('/users', 'UserController@update')->name('users.update');
    Route::put('/users/password', 'UserController@updatePassword')->name('users.update-password');
    Route::get('/useracess', 'UserController@index')->name('users.acess');
    Route::delete('/users/{user}', 'UserController@destroy')->name('users.destroy');
    Route::get('/sell', function(){ return view('searchpages.sell');})->name('searchpages.sell');
    Route::post('/sell','HouseController@store')->name('sell.store');
    Route::get('/buy','HouseController@index')->name('searchpages.buy');
    Route::get('/houses/{id}', 'HouseController@show');

    Route::get('/articles', function () {
        return view('articles');
    });


    Route::get('/search-rent','HouseController@rentsearch');
    Route::get('/search-buy','HouseController@buysearch');
    
});
