<?php

use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;

Route::get(uri: '/', action: [StudentController::class, 'index'])->name('students.index');

Route::get(uri: '/create', action: [StudentController::class, 'create'])->name('students.create');

Route::post(uri: '/store', action: [StudentController::class, 'store'])->name('students.store');

Route::get(uri: '/{id}', action: [StudentController::class, 'show'])->name('students.show');

Route::get(uri: '/{id}/edit', action: [StudentController::class, 'edit'])->name('students.edit');

Route::put(uri: '/{id}', action: [StudentController::class, 'update'])->name('students.update');

Route::delete(uri: '/{id}', action: [StudentController::class, 'destroy'])->name('students.destroy');

