<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AdminController;

Auth::routes();
Route::get('/brands', 'BrandsController@allBrands');
Route::get('/brands/{id}', 'BrandsController@oneBrand');


Route::post('/update', 'ProfileController@updateEmail')->name('update')->middleware('auth');
Route::post('/updatePhone', 'ProfileController@updatePhone')->name('updatePhone')->middleware('auth');
Route::post('/updateAdress', 'ProfileController@updateAdress')->name('updateAdress')->middleware('auth');
Route::post('/updateName', 'ProfileController@updateName')->name('updateName')->middleware('auth');
Route::post('/addprod', 'PagesController@addProduct')->name('addprod')->middleware('auth');
Route::post('/delproduct', 'PagesController@delProduct')->name('delproduct')->middleware('auth');
Route::post('/addtocart', 'PagesController@addToCart')->name('addtocart')->middleware('auth');
Route::post('/delorder', 'PagesController@delOrder')->name('delorder')->middleware('auth');

Route::post('/findProd', 'PagesController@findProd')->name('findProd')->middleware('auth');
Route::get('/products/{id}', 'PagesController@products')->middleware('auth')->name('products')->where('id', '[0-9]+');


Route::get('/search', 'PagesController@findProd');

Route::get('/', 'PagesController@index');
Route::get('/home', 'HomeController@index');

Route::get('/cart', 'PagesController@cart')->middleware('auth');
Route::get('/admin', 'PagesController@admin')->middleware('auth');
Route::get('/profile', 'PagesController@profile')->name('profile')->middleware('auth');
Route::get('/single/{id}/{tovar}', 'PagesController@singlePage')->name('single');

