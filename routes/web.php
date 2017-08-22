<?php

Route::get('/', 'PagesController@home');

Route::get('admin', 'AdminController@index')->name('admin');
// , 'middleware' => 'auth'

Route::group(['prefix' => 'admin', 'namespace' => 'Admin'], function (){
	Route::get('posts', 'PostsController@index') -> name('admin.posts.index');//agreagdndo nombre al controlador
	Route::get('posts/create', 'PostsController@create') -> name('admin.posts.create');//agreagdndo nombre al controlador
});



Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login');
Route::post('logout', 'Auth\LoginController@logout')->name('logout');

// Registration Routes...
// Route::->get('register', 'Auth\RegisterController@showRegistrationForm')->name('register');
// Route::->post('register', 'Auth\RegisterController@register');

// Password Reset Routes...
Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
Route::post('password/reset', 'Auth\ResetPasswordController@reset');

