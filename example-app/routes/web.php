<?php

use App\Http\Controllers\ProductsController;
use Illuminate\Support\Facades\Route;
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

Route::get('/', function () {
    return view('welcome');
});

//Route ::get ('/',[usreController :: class , 'index']);

Route::get('/about', function () {
   // $name = 'rima';
   // $age = 21;
  //  $tasks = ['task 1','task 2 ', 'task3'];
  $tasks =['1'=>'task 1','2' => 'task 2' ,'3'=>'task3'];

   // return view('about' ,['name'=> $name , 'age' =>$age ]);
  // return view('about' ) -> with('name', $name ) -> with ('age' ,$age );
  // return view ('about',compact('name','age'));
  return view ('about',compact('tasks'));

});


Route::get('/store', function () {
        return view('contact_us');
    });

Route::post('/store', function () {

$name = $_POST['name'] ;

    return view('contact_us',compact('name'));
});


Route::get('/tasks', function () {

    $tasks =[


          'task 1',
         'task 2'  ,
         'task 3'
      ];

    return view ('arr',compact('tasks'));
// في الcompact  نضع اسم المصفوفه
});
// لعرض عنصراي قيمه واحد من المصفوفه
 Route::get('/task/{id}', function ($id) {

    $tasks =['task 1', 'task 2' ,'task3'];
    $task =$tasks[$id];
    return view ('arr1',compact('task'));


 });

 Route::post('app', function () {



        return view('layout.app');
    });

    // الابن
    Route::post('app1', function () {



        return view('lay');
    });

    Route :: get('control',function(){
        $pro = DB :: table('products') -> get();

            return view('show',compact('pro'));
    });

    Route :: get('/control2/{id}',function($id){
        $pro2 = DB :: table('products') -> find($id);

            return view('show2',compact('pro2'));
    });
Route::get('/about' ,[ProductsController::class,'index']);
Route::get('/about/{id}',[ProductsController::class,'show']);



