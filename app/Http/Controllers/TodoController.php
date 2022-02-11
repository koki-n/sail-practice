<?php

namespace App\Http\Controllers;


use App\Models\Todo;//追加
use App\Http\Requests\TodoRequest;
use Illuminate\Http\Request;

class TodoController extends Controller
{
    public function index()
    {
        $todos = Todo::all();

        return view('index', compact('todos'));
    }
    //追加
    public function store(TodoRequest $request)
    {
        $todo = $request->only(['content']);
        Todo::create($todo);

        return redirect('/');
    }
    public function update(TodoRequest $request)
    {
        $todo = $request->only(['content']);
        Todo::find($request->todo_id)->update($todo);

        return redirect('/')->with('message', 'Todoを更新しました');
    }
}