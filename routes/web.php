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

Route::get('/', function () {

  $posts = \App\Post::latest()->get();

  return view ('home', compact('posts'));

});



Auth::routes();

Route::get('/create', 'PostsController@create');

Route::post('/posts/{post}/comments', 'CommentsController@store');

Route::get('/posts/{post}', 'PostsController@show');

Route::post('/posts', 'PostsController@store');



Route::get('top100', function()
{

  return view('top100');

});

Route::get('news', function(){

  return view('news');

});


Route::get('articles/article1', function(){

  return view('articles/article1');

});

Route::get('articles/article2', function(){

  return view('articles/article2');

});

Route::get('articles/article3', function(){

  return view('articles/article3');

});

Route::get('articles/article4', function(){

  return view('articles/article4');

});

Route::post('/posts/{post}/comments', 'CommentsController@store');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index');
Route::get('/users/logout', 'Auth\LoginController@userLogout')->name('user.logout');

Route::prefix('admin')->group(function() {
  Route::get('/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
  Route::post('/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');
  Route::get('/', 'AdminController@index')->name('admin.dashboard');
  Route::get('/logout', 'Auth\AdminLoginController@logout')->name('admin.logout');

  // Password reset routes
  Route::post('/password/email', 'Auth\AdminForgotPasswordController@sendResetLinkEmail')->name('admin.password.email');
  Route::get('/password/reset', 'Auth\AdminForgotPasswordController@showLinkRequestForm')->name('admin.password.request');
  Route::post('/password/reset', 'Auth\AdminResetPasswordController@reset');
  Route::get('/password/reset/{token}', 'Auth\AdminResetPasswordController@showResetForm')->name('admin.password.reset');
});
