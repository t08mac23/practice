<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodoController;


Route::get('/', function () {
    return view('welcome');
})->name('root');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

Route::prefix('todolist')->group (function () {
    Route::get('/', [TodoController::class, 'index'])->name('todo.init');
    Route::post('/post', [TodoController::class, 'store'])->name('todo.store');
    Route::post('/check', [TodoController::class, 'check'])->name('todo.check');
    Route::post('/delete', [TodoController::class, 'delete'])->name('todo.delete');
});

Route::prefix('geekation')->group(function () {
    Route::get('/', [TodoController::class, 'index'])->name('geek.top');
});
