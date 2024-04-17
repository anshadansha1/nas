<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LibController;

Route::get('/',[LibController::class,'welcome'])->name('welcomepg');

Route::get('/add',[LibController::class,'add'])->name('add');
Route::post('/addpage',[LibController::class,'addfn'])->name('addpg');

Route::get('/views',[LibController::class,'view'])->name('disp');

Route::get('libs/{id}/delete',[LibController::class,'deletes'])->name('del');

Route::get('libs/{id}/update',[LibController::class,'updates'])->name('edit');
Route::put('libs/{id}/update',[LibController::class,'updatez'])->name('edits');


