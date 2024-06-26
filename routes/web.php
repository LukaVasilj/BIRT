<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomersController;
use App\Http\Controllers\EmployeesController;
use App\Http\Controllers\OfficesController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\OrderdetailsController;


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


Route::resource('/customers', CustomersController::class);

Route::resource('/employees', EmployeesController::class);

Route::resource('/offices', OfficesController::class);

Route::resource('/products', ProductsController::class);

Route::resource('/orderdetails', OrderdetailsController::class);






Route::get('/', function () {
    return view('welcome');
});
