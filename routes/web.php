<?php

use Illuminate\Support\Facades\Route;
use NidhiRajput\Form\Http\Controllers\FormController;

Route::group(['namespace' => 'NidhiRajput\Form\Http\Controllers', 'prefix' => '/'], function () {
    Route::get('/', [FormController::class, 'index']);
    Route::post('/submit', [FormController::class, 'submit'])->name('form.submit');
});
