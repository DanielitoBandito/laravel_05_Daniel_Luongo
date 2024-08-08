<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MaleController;
use App\Http\Controllers\FemaleController;
use App\Http\Controllers\ContactController;

Route::get('/', [HomeController::class, 'index'])->name('homepage.index');

Route::get('/male/dettagli/{id}', [MaleController::class, 'details'])->name('male.details');

Route::get('/male/indice', [MaleController::class, 'catalog'])->name('male.catalog');

Route::get('/female/indice',[FemaleController::class, 'catalog']) -> name('female.catalog');

Route::get('/female/dettagli/{id}' , [FemaleController::class, 'details']) -> name('female.details');

Route::get('/contatti', [ContactController::class, 'index']) ->name('contatti.index');

Route::post('/contatti', [ContactController::class, 'submit']) ->name('contatti.submit');