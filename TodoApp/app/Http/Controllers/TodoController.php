<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TodoController extends Controller
{
    function TodoList()
    {
        return view('pages.todo-page', [
            'todos' => Todo::where('userID', Auth::user()->id)->latest()->get(),
        ]);
    }

    function CreateTodo()
    {
        return view('components.todo.todo-create');
    }

    function SaveTodo(Request $request)
    {
        $request->validate([
            'title' => 'required',
        ]);
        Todo::create([
            'title' => $request->input('title'),
            'description' => $request->input('description'),
            'userID' => Auth::user()->id,
        ]);
        return redirect('/todo')->with('message', 'Added a Task');;
    }

    function EditPage($id)
    {
        $todo = Todo::where('id', $id)->first();
        return view('components.todo.todo-edit', compact('todo'));
    }

    function UpdateTodo(Request $request)
    {
        Todo::findOrFail($request->input('id'))->update([
            'title' => $request->input('title'),
            'description' => $request->input('description')
        ]);
        return redirect('/todo')->with('message', 'Task Updated');;
    }

    function DeleteTodo(Request $request)
    {
        Todo::where('id', $request->input('todo_id'))->delete();
        return redirect('/todo')->with('message', 'Task Deleted');
    }

    function StatusChange($id)
    {
        $task = Todo::find($id);
        if ($task['status'] == "0") {
            $task['status'] = "1";
            $task->save();
            return back()->with('message', 'Congrats! You Have Complete a Task');;
        } else {
            $task['status'] = "0";
            $task->save();
            return back()->with('message', 'Task Restored');;
        }
    }
}
