<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\studentcontroller;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/student', [studentcontroller::class, 'index'])->name('student-index');
Route::get('/student/create', [studentcontroller::class, 'create'])->name('student-create');
Route::post('/student/store', [studentcontroller::class, 'store'])->name('student-store');

