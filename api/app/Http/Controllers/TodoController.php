<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Todo;

class TodoController extends Controller
{
    public function getTodos(){
        return response()->json(Todo::all());
    }

    public function getTodo($id){
        return response()->json(Todo::find($id));
    }

    public function saveTodo(Request $request){

        $todo = new Todo;
        $todo->name = $request->name;
        $todo->save();
        return response()->json(["message" => "success"]);
    }

    public function updateTodo(Request $request, $id){
       $todo = Todo::find($id);
       $todo->name = $request->name;
       $todo->save();
       return response()->json(["message" => "success"]);
    }

    public function deleteTodo($id){
        $todo = Todo::find($id);
        if($todo){
            $todo->delete();
        }
        return response()->json(["message" => "success"]);
    }
}

 

 