<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\studentcontroller;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/student', [studentcontroller::class, 'index'])->name('student-index');
Route::get('/student/create', [studentcontroller::class, 'create'])->name('student-create');
Route::post('/student/store', [studentcontroller::class, 'store'])->name('student-store');
Route::get('/student', [studentcontroller::class, 'index'])->name('student-index');



// Edit and Update Routes
Route::get('/student/{id}/edit', [studentcontroller::class, 'edit'])->name('student-edit');
Route::put('/student/{id}', [studentcontroller::class, 'update'])->name('student-update');

// Delete Route
Route::delete('/student/{id}', [studentcontroller::class, 'destroy'])->name('student-delete');

Route::get('/student', [studentcontroller::class, 'index'])->name('student-index');



