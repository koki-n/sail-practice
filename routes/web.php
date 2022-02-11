<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodoController;

Route::get('/', [TodoController::class, 'index']);
Route::post('/todos', [TodoController::class, 'store']);
Route::patch('/todos/{todo_id}', [TodoController::class, 'update']);
Route::delete('/todos/{todo_id}', [TodoController::class, 'destroy']);
