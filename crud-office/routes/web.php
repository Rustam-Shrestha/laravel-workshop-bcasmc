<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
Route::get('/', function () {
    return view('welcome');
});

//the get request on /product endpoint  
//parameter 2: loscation of controller
//function name of the controller
// with name of the route we specify only name of that route
Route::get('/product', [ProductController::class, 'index'])->name('products.index');
Route::get('/product/create', [ProductController::class, 'create'])->name('products.create');
Route::post('/product', [ProductController::class, 'store'])->name('products.store');




// routes for updation of the records
//     UPDATE   
Route::get('/product/{id}/edit', [ProductController::class, 'edit'])->name('product.edit');
Route::post('/product/{id}/update', [ProductController::class, 'update'])->name('product.update');



// deleting a record with user view in this endppoint 
//  DELETE
Route::delete('/product/{id}', [ProductController::class, 'destroy'])->name('product.destroy');