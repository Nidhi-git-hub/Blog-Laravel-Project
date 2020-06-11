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

// Route::get('/', function () {
//     return view('Frontend.index');
// });

Auth::routes();
Route::get('/','FrontendController@displayabout');
Route::get('/','FrontendController@display');
Route::get('/','FrontendController@displayBlogPost');
Route::get('/home', 'HomeController@index')->name('home');
Route::get('index','FrontendController@index');
Route::get('post','FrontendController@post');
Route::get('next','FrontendController@next');
Route::get('about','FrontendController@about');

Route::get('bmaster','BackendController@bmaster');
Route::get('addprofile','BackendController@addprofile');
Route::post('/saveprofile','BackendController@saveprofile');
Route::get('display','BackendController@display');
Route::get('/blog/editprofile/{id}','BackendController@editprofile');
Route::post('/blog/updateprofile','BackendController@updateprofile');
Route::get('/blog/deleteprofile/{id}','BackendController@deleteprofile');

Route::get('addabout','AboutController@addabout');
Route::post('/saveabout','AboutController@saveabout');
Route::get('displayabout','AboutController@displayabout');
Route::get('/about/editabout/{id}','AboutController@editabout');
Route::post('/about/updateabout','AboutController@updateabout');
Route::get('/about/deleteabout/{id}','AboutController@deleteabout');

Route::get('addBlogPost','BlogController@addBlogPost');
Route::post('/saveBlogPost','BlogController@saveBlogPost');
Route::get('displayBlogPost','BlogController@displayBlogPost');
Route::get('/BlogPost/editBlogPost/{id}','BlogController@editBlogPost');
Route::post('/BlogPost/updateBlogPost','BlogController@updateBlogPost');
Route::get('/BlogPost/deleteBlogPost/{id}','BlogController@deleteBlogPost');