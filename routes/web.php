<?php

Route::get('/', 'WelcomeController@index');
Route::get('/offer', 'WelcomeController@offer');
Route::get('/wishlist', 'WelcomeController@wishlist');
Route::get('/single', 'WelcomeController@single');
Route::get('/signin', 'WelcomeController@signin');
Route::get('/user-register', 'WelcomeController@userRegister');
Route::get('/about', 'WelcomeController@about');
Route::get('/shipping', 'WelcomeController@shipping');
Route::get('/kitchen', 'WelcomeController@kitchenCategory');
Route::get('/care', 'WelcomeController@careCategory');
Route::get('/hold', 'WelcomeController@holdCategory');
Route::get('/contact', 'WelcomeController@contact');



