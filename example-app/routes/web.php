<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\productsController;
use App\Models\Product;

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

Route::get('/welcome', function () {
    return view('welcome');
});
Route :: get ('/tasks',[ProductsController :: class ,'index']) -> name('task.index') ;
Route :: get ('/task/{id}',[ProductsController :: class ,'show'])-> name('task.show') ;
Route :: post ('/task/store',[ProductsController :: class ,'store']) -> name('task.store') ;
Route :: Delete ('delete/{id}',[ProductsController :: class ,'delete']) -> name('task.delete')  ;



Route::put('edit/{id}',[ProductsController::class, 'edit'])-> name('task.edit');
Route::patch('update/{id}',[ProductsController::class, 'update'])-> name('task.update');
