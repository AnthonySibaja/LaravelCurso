<?php
use Illuminate\Support\Facades\Route;


 Route::get('/roles', [App\Http\Controllers\RoleController::class, 'index'])->name('role.index');
 Route::post('/roles', [App\Http\Controllers\RoleController::class, 'store'])->name('role.store');
