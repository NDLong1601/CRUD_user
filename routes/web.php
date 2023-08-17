<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::prefix('/post')->group(function(){
    // read
    Route::get('/user', [UserController::class, 'index']);
    // create
    Route::get('/user/create', [UserController::class, 'create']);
    Route::post('/user/create', [UserController::class, 'store'])->name('create');
    // update
    Route::get('/user/update/{id}', [UserController::class, 'edit']);
    Route::post('/user/update/{id}', [UserController::class, 'update'])->name('update')->where('id','[0-9]+');
    // delete
    Route::get('/user/delete/{id}', [UserController::class, 'delete'])->name('delete')->where('id','[0-9]+');
});

