<?php

use Illuminate\Support\Facades\Route;

Route::middleware('api')->group(function () {
    // Define your routes here
});

// Add the transactions apiResource route
Route::apiResource('transactions', 'App\Http\Controllers\TransactionController');
