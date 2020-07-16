<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/category', function () {
    return view('category');
});

Route::get('/article', function () {
    return view('article');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('category', 'CategoryController@create')->name('category.create');
Route::post('category', 'CategoryController@store')->name('category.store');

Route::get('article', 'ArticleController@create')->name('article.create');
Route::post('article', 'ArticleController@store')->name('article.store');

Route::get('contact', 'ContactsController@create')->name('contact.create');
Route::post('contact', 'ContactsController@store')->name('contact.store');