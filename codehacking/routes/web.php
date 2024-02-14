<?php

use Illuminate\Support\Facades\Route;
use resources\views\layouts;
use Illuminate\Support\Facades\Auth; 
use App\Http\Middleware\Admin;
use App\Http\Controllers\AdminPostsController;


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Auth::routes();



Route::get('/post/{id}', [AdminPostsController::class, 'post'])->name('home.post');
Route::get('/post/create', [AdminPostsController::class, 'create'])->name('post.create');
Route::patch('/post/{id}/update', [AdminPostsController::class, 'update'])->name('post.update');
Route::get('post/{user}/edit', [AdminPostsController::class, 'edit'])->name('post.edit');
Route::delete('post/{id}/destroy', [AdminPostsController::class, 'destroy'])->name('post.destroy');

Route::get('/', function () {
    return view('welcome');
});
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
    Route::get('/admin/categories', [App\Http\Controllers\AdminCategoriesController::class, 'index'])->name('admin.categories.index');
    Route::get('/admin/categories/create', [App\Http\Controllers\AdminCategoriesController::class, 'create'])->name('admin.categories.create');
    Route::patch('/admin/categories/{id}/update', [App\Http\Controllers\AdminCategoriesController::class, 'update'])->name('admin.categories.update');
    Route::get('/admin/categories/{user}/edit', [App\Http\Controllers\AdminCategoriesController::class, 'edit'])->name('admin.categories.edit');
    Route::delete('/admin/categories/{id}/destroy', [App\Http\Controllers\AdminCategoriesController::class, 'destroy'])->name('admin.categories.destroy');
//media
    Route::resource('admin/media', App\Http\Controllers\AdminMediasController::class);
    Route::get('/admin/media', [App\Http\Controllers\AdminMediasController::class, 'index'])->name('admin.media.index');
    Route::get('/admin/media/create', [App\Http\Controllers\AdminMediasController::class, 'create'])->name('admin.media.create');
    Route::patch('/admin/media/{id}/update', [App\Http\Controllers\AdminMediasController::class, 'update'])->name('admin.media.update');
    Route::get('/admin/media/{user}/edit', [App\Http\Controllers\AdminMediasController::class, 'edit'])->name('admin.media.edit');
    Route::delete('/admin/media/{id}/destroy', [App\Http\Controllers\AdminMediasController::class, 'destroy'])->name('admin.media.destroy');
//comments
    Route::resource('admin/comment', App\Http\Controllers\PostCommentController::class);
    Route::get('/admin/comment', [App\Http\Controllers\PostCommentController::class, 'index'])->name('admin.comment.index');
    Route::get('/admin/comment/create', [App\Http\Controllers\PostCommentController::class, 'create'])->name('admin.comment.create');
    Route::patch('/admin/comment/{id}/update', [App\Http\Controllers\PostCommentController::class, 'update'])->name('admin.comment.update');
    Route::get('/admin/comment/{user}/edit', [App\Http\Controllers\PostCommentController::class, 'edit'])->name('admin.comment.edit');
    Route::delete('/admin/comment/{id}/destroy', [App\Http\Controllers\PostCommentController::class, 'destroy'])->name('admin.comment.destroy');
//commentsrREPLEY
Route::resource('admin/commentRepley', App\Http\Controllers\PostCommentRepleyController::class);
Route::get('/admin/commentRepley', [App\Http\Controllers\PostCommentRepleyController::class, 'index'])->name('admin.commentRepley.index');
Route::get('/admin/commentRepley/create', [App\Http\Controllers\PostCommentRepleyController::class, 'create'])->name('admin.commentRepley.create');
Route::patch('/admin/commentRepley/{id}/update', [App\Http\Controllers\PostCommentRepleyController::class, 'update'])->name('admin.commentRepley.update');
Route::get('/admin/commentRepley/{user}/edit', [App\Http\Controllers\PostCommentRepleyController::class, 'edit'])->name('admin.commentRepley.edit');
Route::delete('/admin/commentRepley/{id}/destroy', [App\Http\Controllers\PostCommentRepleyController::class, 'destroy'])->name('admin.commentRepley.destroy');

});

