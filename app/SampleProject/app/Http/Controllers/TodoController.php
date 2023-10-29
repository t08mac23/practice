<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Todo;
use Illuminate\Support\Facades\Log;

class TodoController extends Controller
{
    public function index () {
        $todos = Todo::orderBy('created_at', 'desc')->get();

        return view('todolist', ['todos' => $todos]);
    }


    public function store (Request $request) {
        $request->validate([
            'content'=>'required|min:3|max:100'
        ]);

        Todo::create ([
            'content' => $request->content
        ]);

        return redirect()->route('todo.init');
    }


    public function check (Request $request) {
        $todo = Todo::find($request->select_todo_id);

        if ($todo->check) {
            $todo->check = false;
        }else{
            $todo->check = true;
        }

        $todo->save();
        return redirect()->route('todo.init');
    }

    public function delete (Request $request) {
        Todo::find($request->select_todo_id)->delete();
        return redirect()->route('todo.init');
    }
}
