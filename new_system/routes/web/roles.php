<?php
use Illuminate\Support\Facades\Route;


 Route::get('/roles', [App\Http\Controllers\RoleController::class, 'index'])->name('role.index');
 Route::post('/roles', [App\Http\Controllers\RoleController::class, 'store'])->name('role.store');
 Route::delete('/roles/{role}/destroy', [App\Http\Controllers\RoleController::class, 'destroy'])->name('roles.destroy');
 Route::get('/roles/{role}/edit', [App\Http\Controllers\RoleController::class, 'edit'])->name('roles.edit');
