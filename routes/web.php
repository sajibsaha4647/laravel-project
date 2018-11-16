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
/*
Route::get('/', function () {
    return view('welcome');
});
*/
Auth::routes();
//website routs
Route::get('/','SiteController@index')->name('');
Route::get('about','SiteController@about')->name('');
Route::get('blog','SiteController@blog')->name('');
Route::get('blog-single','SiteController@single_blog')->name('');
Route::get('contact','SiteController@contact')->name('');
Route::get('portfolio','SiteController@portfolio')->name('');
Route::get('services','SiteController@services')->name('');
Route::get('404','SiteController@error')->name('');
Route::post('/contact/submit','ContactController@insert_contact')->name('');
Route::get('admin/message','MessageController@message')->name('');
Route::get('admin/message/mark_as_read/{conus_id}','MessageController@mark_as_read')->name('');
Route::get('admin/message/delete/{conus_id}','MessageController@delete')->name('');
Route::get('admin/user/edit/{conus_id}','MessageController@edit')->name('');
Route::get('admin/user/view/{conus_id}','MessageController@viewview')->name('');
Route::post('admin/user/edit/{conus_id}','MessageController@editedit')->name('');

//admin routs
Route::get('admin','AdminController@admin')->name('');
Route::get('admin/permission','AdminController@permission')->name('');
Route::get('admin/user','UserController@index')->name('');
Route::get('admin/user/add','UserController@add')->name('');
Route::get('admin/user/view','UserController@view')->name('');
