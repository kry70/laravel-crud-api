<?php

use Illimunate\Http\Request;
use Illimunate\Support\Facades\Route;

/*

*/

//Route :: middleware('auth:sanctum')->get('/user', function (Request $request) {
//    return $request->user();
//});

Route::get('/expens', [ExpensController::class, 'index'])->name('expens.list');
Route::get('/expens/{id}', [ExpensController::class, 'show'])->name('expens.show');
Route::post('/expens', [ExpensController::class, 'store'])->name('expens.store');
Route::put('/expens/{id}', [ExpensController::class, 'update'])->name('expens.update');
Route::delete('/expens/{id}', [ExpensController::class, 'destroy'])->name('expens.destroy');
