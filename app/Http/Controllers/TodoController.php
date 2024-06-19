<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Todo;

class TodoController extends Controller
{
    public function index()
    {
        $todos = Todo::all();
        return view('pages.todos', ['todos' => $todos]);
    }

    public function completed()
    {
        $todos = Todo::all();
        return view('pages.completed', ['todos' => $todos]);
    }

    public function delete(Todo $todo)
    {
        $todo->delete();
        return redirect()->route('index');
    }

    public function complete(Todo $todo)
    {
        $todo->completed = !$todo->completed;
        $todo->save();
        return redirect()->route('index');
    }

    public function create()
    {
        return view('pages.create');
    }

    public function edit(Todo $todo)
    {
        return view('pages.edit', ['todo' => $todo]);
    }

    public function update(Request $request, Todo $todo)
    {
        $request->validate([
            'todo' => 'required|max:255',
            'description' => 'required|max:255',
        ]);
        $todo = Todo::find($todo->id);
        $todo->update($request->all());
        return redirect()->route('index');
    }

    public function store(Request $request)
    {
        $request->validate([
            'todo' => 'required|max:255',
            'description' => 'required',
            'prioriy' => 'nullable|int|max:2',
        ]);

        Todo::create($request->all());
        return redirect()->route('index')->with('success', 'todo created successfully.');
    }
}
