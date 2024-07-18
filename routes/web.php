<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IbuCermatController;

Route::get('/', [IbuCermatController::class, 'showConsent']);
Route::get('/form', [IbuCermatController::class, 'showForm']);
Route::post('/result', [IbuCermatController::class, 'showResult']);