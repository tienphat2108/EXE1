<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;


// Route mặc định của Laravel (giữ lại nếu bạn muốn)
Route::get('/', function () {
    return view('welcome');
});

// Các route cho UserController
Route::get('/login', [UserController::class, 'login'])->name('login');
Route::get('/register', [UserController::class, 'register'])->name('register');
Route::get('/update', [UserController::class, 'updateUser'])->name('update');
Route::get('/list', [UserController::class, 'listUser'])->name('list');
Route::get('/view', [UserController::class, 'viewUser'])->name('view');
