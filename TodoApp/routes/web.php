<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TodoController;

//
//Route::get('/', function () { return view('welcome');});

Auth::routes();
Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/todo', [TodoController::class, 'TodoList']);
Route::get('/create-todo', [TodoController::class, 'CreateTodo']);
Route::post('/save-todo', [TodoController::class, 'SaveTodo'])->name('save-todo');
Route::get('/edit-todo/{id}', [TodoController::class, 'EditPage']);
Route::post('/update-todo', [TodoController::class, 'UpdateTodo']);
Route::post('/delete-todo', [TodoController::class, 'DeleteTodo']);
Route::get('/status-complete/{id}', [TodoController::class, 'StatusComplete']);

