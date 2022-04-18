<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\productsController;

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
Route :: get ('/tasks',[ProductsController :: class ,'index']) -> name('task.index') ;
Route :: get ('/task/{id}',[ProductsController :: class ,'show'])-> name('task.show') ;
Route :: post ('/store',[ProductsController :: class ,'store']) -> name('task.store') ;
Route :: post ('delete/{id}',[ProductsController :: class ,'delete'])  ;


//Route::delete('task/destroy/{id}', [TaskController::class, 'destroy'])->name('tasks.destroy');
Route::put('edit/{id}',[ProductsController::class, 'edit']);
Route::patch('update/{id}',[ProductsController::class, 'update']);
