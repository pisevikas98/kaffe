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
//     return view('welcome');
// });

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/','KaffeContoller@Kaffe_Dashboard');
Route::get('foodlist','KaffeContoller@FoodList');

Route::get('order_submit','KaffeContoller@Order_submit');
Route::post('order_save','KaffeContoller@Order_Save');
Route::get('order_read','KaffeContoller@orderRead');
Route::get('order_edit/{food_id}','KaffeContoller@orderEdit');
Route::post('order_update/{food_id}','KaffeContoller@orderUpdate');
Route::get('order_delete/{food_id}','KaffeContoller@orderDelete');

Route::get('create_visit','visitController@createVisit');
Route::post('save_visit','visitController@saveVisit');
Route::get('read_visit','visitController@readVisit');
Route::get('edit_visit/{edit_id}','visitController@editVisit');
Route::post('update_visit/{edit_id}','visitController@updateVisit');
Route::get('delete_visit/{edit_id}','visitController@deleteVisit');
Route::get('sales','salesController@sales');


