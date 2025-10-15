<?php

use Illuminate\Support\Facades\Route;
use NidhiRajput\Form\Http\Controllers\FormController;

// Route::prefix('form')->group(function () {
//   Route::get('/form', [FormController::class, 'index']);
//     Route::post('/submit', [FormController::class, 'submit'])->name('form.submit');
// });
Route::get('/form', [FormController::class, 'index']);
Route::post('/form/submit', [FormController::class, 'submit'])->name('form.submit');

