<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Illuminate\Http\Request;

class TodoController extends Controller
{
    public function index()
    {
        return view('index', [
            'todos' => Todo::orderBy('time', 'asc')->where('user_id', auth()->user()->id)->get()
        ]);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'todo' => 'required|max:255',
            'time' => 'required|date_format:H:i',
        ]);

        $validated['user_id'] = auth()->user()->id;

        Todo::create($validated);

        return redirect()->refresh()->with('success', 'New todo has been added!');
    }

    public function destroy(Todo $todo)
    {
        Todo::destroy($todo->id);
        return redirect('/')->with(['success' => 'Todo has been deleted successfully!']);
    }

    public function completed(Todo $todo)
    {
        $todo->checked = $todo->checked ? false : true;
        $todo->save();
        return redirect('/');
    }
}
