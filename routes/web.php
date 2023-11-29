<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MapController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::post('/create-marker', [MapController::class, 'createMarker']);
Route::post('/delete-marker/{id}', [MapController::class, 'deleteMarker']);
Route::get('/get-marker-data', [MapController::class, 'getMarker']);
