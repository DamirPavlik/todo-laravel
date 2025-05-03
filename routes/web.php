<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Middleware\EnsureUserIsAuthenticated;

Route::get('/register', [AuthController::class, 'showRegister'])->name('register');
Route::post('/register', [AuthController::class, 'register']);
Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::middleware([EnsureUserIsAuthenticated::class])->group(function () {
    Route::get('/todos', [TodoController::class, 'index'])->name('todos.index');
    // Add more protected routes here
});
