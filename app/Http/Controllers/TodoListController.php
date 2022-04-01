<?php

namespace App\Http\Controllers;
use App\Models\Todo;
use Illuminate\Http\Request;


class TodoListController extends Controller
{
    public function index(){
        return view('viewList')->with('todo_arr',Todo::all());
    }
    public function create(){
        return view('viewList');
    }

    public function store(Request $request){
       
       $todo=new Todo();
       $todo->name=$request->input('name');
       $todo->save();
       return redirect('/');
       



    }

    public function destroy(Todo $Todo,$id ){
       
        
        $row=Todo::destroy($id);
        return redirect('/');
        
 
 
 
     }
}

