<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Ticket ;

class TicketsController extends Controller {

    public function index(){

        $tasks = DB:: table('tickets')->get();
        return view('tickets' , compact('tasks')) ;


    }

    public function show($id){


       $task = Ticket :: find($id);
        return view('showtickets',compact('task'));
    }


    public function store(Request $request){


      $task = new Ticket();
      $task->category = $request->category;
      $task-> created_at = now();
      $task ->updated_at = now();
      $task -> save();

       return redirect() -> back();

   }

   public function delete($id){
       $task = Ticket :: find($id);
       $task -> delete();
       return redirect() -> back();

    }








}
