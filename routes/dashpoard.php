<?php

use App\Http\Controllers\Dashpoard\CategoriesController;
use App\Http\Controllers\Dashpoard\DashpoardController;
use Illuminate\Support\Facades\Route;

Route::group([
    'middleware' => 'auth',
    'as' => 'dashpoard.',
    'prefix' => 'dashpoard',
    // 'namespace'=>'App\Http\Controllers',

], function () {
    Route::get('/', [DashpoardController::class, 'index'])->name('dashboard');

    // Custom routes must be BEFORE resource routes to avoid conflicts
    Route::get('/categories/trashed', [CategoriesController::class, 'trashed'])->name('categories.trashed');
    Route::put('/categories/{category}/restore', [CategoriesController::class, 'restore'])->name('categories.restore');
    Route::delete('/categories/{category}/force-delete', [CategoriesController::class, 'forceDelete'])->name('categories.forceDelete');
    
    Route::resource('/categories', CategoriesController::class); //add 7 methods add delete update create resorses -r in termenald  ->only('show','store') ->except('show','store')





    // Route::middleware('auth')->as('dashpoard.')->group(function () {

    // }); == above groubeS

});
