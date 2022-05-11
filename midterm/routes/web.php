<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ticketsController;
use App\Models\Tickets;
use Illuminate\support\Facades\DB;

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



Route :: get ('/tasks',[TicketsController :: class ,'index']) -> category('task.index') ;
Route :: get ('/task/{id}',[TicketsController :: class ,'show'])-> category('task.show') ;
Route :: post ('/task/store',[TicketsController :: class ,'store']) -> category('task.store') ;
Route :: Delete ('delete/{id}',[TicketsController :: class ,'delete']) -> category('task.delete')  ;



