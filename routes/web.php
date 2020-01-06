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

Route::get('frontend.php','Frontend@frontendpage'); 


Route::post('emailsend','Frontend@sendemail');


Route::get('panel','Frontendcontroller@dash'); 


Route::get('login-form.php','Frontendcontroller@adminlogin');


Route::post('adminlogin','Frontendcontroller@loginn');



Route::get('addrecord.php','Frontendcontroller@addrecord');


Route::get('admin.php','Frontendcontroller@addadmin');


Route::get('client.php','Client@client_data');


Route::get('clients/{id}.php','Client@client_data_sale_person');
Route::get('logout','Client@logout');

Route::get('excel','Client@excel')->name('export_excel.excel');;
Route::get('export/{type}', 'Client@export');
Route::get('excel/excel','Client@excel')->name('export_excel.excel');

//Route::get('/clients/clients/{id}','Frontendcontroller@home');


Route::get('details/{id}','Client@details_client_data');


Route::get('clients/details/{id}.php','Client@details_client_data_saleperson');


Route::get('clients/{id}','Client@client_data_sale_person');



Route::get('details/updatedds/{id}','Client@update_record');


Route::post('details/updatedds/updateclientdata','Client@update');



Route::get('admindetails.php','Frontendcontroller@admindetails');
Route::get('delete_saler/{id}','Frontendcontroller@delete_saler_account');


Route::get('singleadmin.php','Frontendcontroller@singleadmin');


Route::post('search','Client@search');



Route::post('insertclientdata','Client@insertt');


Route::post('insertadmin','Frontendcontroller@insertadmin_data');



Route::auth();

Route::get('/', 'Frontend@frontendpage');

