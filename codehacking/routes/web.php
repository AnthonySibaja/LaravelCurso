<?php

use Illuminate\Support\Facades\Route;
use resources\views\layouts;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resource('admin/users', App\Http\Controllers\AdminUsersController::class);
Route::get('/admin/users', [App\Http\Controllers\AdminUsersController::class, 'index'])->name('admin.users.index');
Route::get('/admin/users/create', [App\Http\Controllers\AdminUsersController::class, 'create'])->name('admin.users.create');
