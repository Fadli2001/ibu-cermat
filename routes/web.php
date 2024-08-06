<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IbuCermatController;

// Define the root path with a name
Route::get('/', [IbuCermatController::class, 'showConsent'])->name('consent');

Route::get('/form', [IbuCermatController::class, 'showForm']);
Route::post('/result', [IbuCermatController::class, 'showResult']);

// Fallback route for undefined paths
Route::fallback(function () {
    return response()->view('errors.404', [], 404);
});
