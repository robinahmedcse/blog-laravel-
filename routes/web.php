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

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/','BlogController@index');
Route::get('portfolio','BlogController@portfolio');
Route::get('blog-details/{blogId}','BlogController@blogDdetails');
Route::post('blog-comment','BlogController@blogComment');
Route::get('category-details/{categoryId}','BlogController@blogCategory');
 

/*******************************************************************************************************
************************************ Admin Part ********************************************************
******************************************************************************************************/

Route::get('admin','AdminController@showLoginForm');
Route::post('admin-sign-in-check','AdminController@adminCheckLogin');
Route::get('admin-dashboard','SupperAdminController@adminDashboard');

/****************** Start of Category******************************************/
Route::get('admin/add-category','SupperAdminController@addCategory');
Route::post('admin/save-category','SupperAdminController@storeCategory');
Route::get('admin/manage-category','SupperAdminController@manageCategory');
Route::get('admin/edit-category/{id}','SupperAdminController@editCategory');
Route::post('admin/update-category','SupperAdminController@updateCategory');
Route::get('admin/published-category/{id}','SupperAdminController@publishedCategory');
Route::get('admin/unpublished-category/{id}','SupperAdminController@unPublishedCategory');
Route::get('admin/delete-category/{id}','SupperAdminController@deleteCategory');
/****************** End of Category******************************************/


/****************** Start of Blog******************************************/
Route::get('admin/add-blog','SupperAdminController@addBlog');
Route::post('admin/save-blog','SupperAdminController@saveBlog');
Route::get('admin/manage-blog','SupperAdminController@manageBlog');
/****************** End of Blog******************************************/




Route::get('admin-logout','SupperAdminController@adminLogout');


Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
