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

Route::get('/', 'HomeController@index');
Route::get('About', function(){
    return view('Home.about');
});
Route::get('Contact', function(){
    return view('Home.contact');
});


Route::resource('NewsEvents', 'NewsController');
Route::resource('Products', 'HProductController');
Route::get('Dealers/Northern', 'HomeController@north');
Route::get('Dealers/NorthEastern', 'HomeController@northeast');
Route::get('Dealers/Southern', 'HomeController@south');
Route::get('Dealers/Western', 'HomeController@west');
Route::get('Dealers/Eastern', 'HomeController@east');
Route::get('Dealers/Central', 'HomeController@central');
Route::get('Test', 'HomeController@test');
Auth::routes();






// Backend

Route::get('Admin', 'AdminController@index');
Route::resource('Admin/Product', 'ProductController');
Route::get('Admin/Profile', 'AdminController@profile');
Route::resource('Admin/Password', 'CpassController');
Route::resource('Admin/News', 'NewsEventController');
Route::resource('Admin/Dealer', 'DealerController');
Route::resource('Admin/ProductGallery', 'PGalleryController');
Route::resource('Admin/NewsGallery', 'NGalleryController');

Route::get('Admin/PSet/{id1}/{id2}', 'ProductController@settest');
Route::get('Admin/NSet/{id1}/{id2}', 'NewsEventController@settest');
Route::get('Admin/DSet/{id1}/{id2}', 'DealerController@settest');
