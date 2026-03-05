<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NoteController;

Route::get('/note',[NoteController::class,'index'])->name('note.index');
Route::get('/note/creare',[NoteController::class,'creare'])->name('note.create');
Route::post('/note/store',[NoteController::class,'store'])->name('note.store');
