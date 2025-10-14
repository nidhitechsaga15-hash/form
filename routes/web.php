<?php

use Illuminate\Support\Facades\Route;
use NidhiRajput\Form\Http\Controllers\FormController;

Route::prefix('form')->group(function () {
    Route::get('/', [FormController::class, 'index'])->name('form');
    Route::post('/submit', [FormController::class, 'submit'])->name('form.submit');
});

