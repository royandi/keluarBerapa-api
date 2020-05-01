<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/pengeluaran', 'ExpenseController@index')->name('expenses.all');

Route::post('/pengeluaran', 'ExpenseController@store')->name('expenses.store');

Route::get('/pengeluaran/{expense}', 'ExpenseController@show')->name('expenses.show');

Route::put('/pengeluaran/{expense}', 'ExpenseController@update')->name('expenses.update');

Route::delete('/pengeluaran/{expense}', 'ExpenseController@destroy')->name('expenses.destroy');
