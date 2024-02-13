<?php

use Illuminate\Support\Facades\Route;
use resources\views\layouts;
use Illuminate\Support\Facades\Auth; 
use App\Http\Middleware\Admin;


Route::get('/', function () {
    return view('welcome');
});
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Auth::routes();
Route::group(['middleware' => \App\Http\Middleware\Admin::class], function () {
//user  

    Route::resource('admin/users', App\Http\Controllers\AdminUsersController::class);
    Route::get('/admin/users', [App\Http\Controllers\AdminUsersController::class, 'index'])->name('admin.users.index');
    Route::get('/admin/users/create', [App\Http\Controllers\AdminUsersController::class, 'create'])->name('admin.users.create');
    Route::patch('/admin/users/{id}/update', [App\Http\Controllers\AdminUsersController::class, 'update'])->name('admin.users.update');
    Route::get('/admin/users/{user}/edit', [App\Http\Controllers\AdminUsersController::class, 'edit'])->name('admin.users.edit');
    Route::delete('/admin/users/{id}/destroy', [App\Http\Controllers\AdminUsersController::class, 'destroy'])->name('admin.users.destroy');
//post
    Route::resource('admin/post', App\Http\Controllers\AdminPostsController::class);
    Route::get('/admin/post', [App\Http\Controllers\AdminPostsController::class, 'index'])->name('admin.post.index');
    Route::get('/admin/post/create', [App\Http\Controllers\AdminPostsController::class, 'create'])->name('admin.post.create');
    Route::patch('/admin/post/{id}/update', [App\Http\Controllers\AdminPostsController::class, 'update'])->name('admin.post.update');
    Route::get('/admin/post/{user}/edit', [App\Http\Controllers\AdminPostsController::class, 'edit'])->name('admin.post.edit');
    Route::delete('/admin/post/{id}/destroy', [App\Http\Controllers\AdminPostsController::class, 'destroy'])->name('admin.post.destroy');
//category
    Route::resource('admin/categories', App\Http\Controllers\AdminCategoriesController::class);
});

