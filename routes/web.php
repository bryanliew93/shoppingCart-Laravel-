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
    return view('welcome');
});

Route::get('/index', function () {
    return view('index');
});

Route::get('/main', function () {
    return view('main');
});

Route::get('/addProduct',[
    'uses'=>'ProductController@create',
    'as'=>'product'
]);

Route::post('/addProduct/store',[
    'uses'=>'ProductController@store',
    'as'=>'addProduct.store'
]);

Route::get('/viewproduct',[
    'uses'=>'ProductController@view',
    'as'=>'view.product'
]);

Route::get('/viewproduct/delete/{id}', [
    'uses'=>'ProductController@delete',
    'as' => 'viewproduct.delete'
]);

Route::get('/viewlist',[
    'uses'=>'ProductController@viewlist',
    'as'=>'view.list'
]);

Route::get('/productdetail/{id}', [
    'uses'=>'ProductController@detail',
    'as' => 'product.detail'
]);

Route::post('/viewlist', [
    'uses'=>'ProductController@search',
    'as' => 'search.product'
]);

Route::get('editproduct/{id}', [
    'uses'=>'ProductController@edit',
    'as' => 'edit.product'
]);

Route::post('updateproduct', [
    'uses'=>'ProductController@update',
    'as' => 'update.product'
]);
//process payment
Route::post('paypal','PaymentController@payWithpaypal');
//check status
Route::get('status','PaymentController@getPaymentStatus');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
