<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Product ;

class ProductsController extends Controller {

    public function index(){
       // $tasks = [ 'task_1' => 'Make ur assignment',
       //            'task_2' => 'Check ur phone',
       //            'task_3' => 'Watch a movie'];

       //$tasks = DB :: table('tasks') ->where('name','like','%Task 1%')-> get();
       //$tasks = DB :: table('tasks') ->where('created_at','2022-04-05')-> get();
       //$tasks = DB :: table('products') -> get();

       // return view('tasks',compact('tasks'));
       $tasks = Product::orderBy('name')->get()->all();
       return view('tasks', compact('tasks'));
    }

    public function show($id){
        $task = DB::table('products') -> find($id) ;
        return view('show',compact('task'));
    }


    public function store(){
       DB::table ('products') -> insert(['name'=> $_POST['name']]);
       return redirect() -> back();
    //   $validated = $request->validate([
    //     'name' => 'required|min:3|max:15'
    // ]);
    //   $task = new Task();
    //   $task->name = $request->name;
    //   $task->save();
    //     return redirect() -> back();

    // }}
    }

    public function delet($id){
        DB::table ('products') -> where('id','=',$id)->delete();
        return redirect() -> back();

    }


    public function edit($id){
        $tasks = DB::table('products')->get();
        $task = DB::table('products')->find($id);

        return view('/tasks', compact('task', 'tasks'));
    }

    public function update(Request $request, $id){
        $task = DB::table('products')->where('id',$id)->update([
            'name' => $request->name
        ]);

        return redirect('');
    }



}
