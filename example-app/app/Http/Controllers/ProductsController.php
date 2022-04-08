<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\support\Facades\DB;
class ProductsController extends Controller
{
    public function index(){

       // $tasks =[


          //  'task 1'=>'Make your assignment',
           // 'task 2' => 'check your phone' ,
           // 'task 3'=>'watch a match'
       // ];
        $tasks = DB:: table('products')->where('name','like','product%')->get();
        return view('dbtask' , compact('tasks')) ;

    }

    public function show($id){

        $task = DB:: table('products')->find($id);
        return view('dbtask1' , compact('task')) ;


    }
    public function stor(){

         DB:: table('products')-> insert(['name'=>$_POST['name']]);
        return redirect() -> back() ;


    }


    // public function send_name(){
    //     $name = $_REQUEST['name'];
    //     return view('dbtask',compact('name'));
    // }

    // public function show_name(){
    //     $name = 'Rima';
    //     $age = 21;
    //     return view('dbtask',compact('name','age'));
    // }
}
