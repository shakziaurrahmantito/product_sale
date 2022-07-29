<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\unitController;
use App\Http\Controllers\supplierController;
use App\Http\Controllers\productController;
use App\Http\Controllers\ordersController;

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

Route::get("/",[unitController::class,"unit"]);
Route::post("uinsert",[unitController::class,"unitInsert"])->name("uinsert.unitInsert");



Route::get("supplierlist",[supplierController::class,"supplier"]);
Route::post("supplierInsert",[supplierController::class,"supplierInsert"])->name("supplier.supplierInsert");


Route::get("productadd",[productController::class,"product"]);
Route::post("productInsert",[productController::class,"productInsert"])->name("product.productInsert");



Route::get("orderadd",[ordersController::class,"order"]);
Route::post("orderInsert",[ordersController::class,"orderInsert"])->name("orderes.orderInsert");

Route::get("orderprint/{id?}",[ordersController::class,"printOption"]);
