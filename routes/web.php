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
    return view('auth.login');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('accounts', 'AccountsController');
Route::resource('customers', 'CustomersController');
Route::resource('inventories', 'InventoriesController')
;
Route::resource('products', 'ProductsController');
Route::resource('roles', 'RolesController');
Route::resource('sales', 'SalesController');
Route::resource('expenses', 'ExpensesController');
Route::resource('damages', 'DamagesController');
Route::resource('transactions', 'TransactionsController');
Route::resource('Customersacc', 'CustomerAccountController');

