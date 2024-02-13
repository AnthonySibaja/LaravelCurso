<?php

use Illuminate\Support\Facades\Route;
use resources\views\layouts;
use Illuminate\Support\Facades\Auth; 
use App\Http\Middleware\Admin;


Route::get('/', function () {
    return view('welcome');
});

Auth::routes();
Route::group(['middleware' => \App\Http\Middleware\Admin::class], function () {
    
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::resource('admin/users', App\Http\Controllers\AdminUsersController::class);
    Route::get('/admin/users', [App\Http\Controllers\AdminUsersController::class, 'index'])->name('admin.users.index');
    Route::get('/admin/users/create', [App\Http\Controllers\AdminUsersController::class, 'create'])->name('admin.users.create');
    Route::patch('/admin/users/{id}/update', [App\Http\Controllers\AdminUsersController::class, 'update'])->name('admin.users.update');
    Route::get('/admin/users/{user}/edit', [App\Http\Controllers\AdminUsersController::class, 'edit'])->name('admin.users.edit');
    Route::delete('/admin/users/{id}/destroy', [App\Http\Controllers\AdminUsersController::class, 'destroy'])->name('admin.users.destroy');

});
