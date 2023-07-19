<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HealthController;
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

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/', [HealthController::class, 'home']);
Route::get('adddata', [HealthController::class, 'adddata']);
Route::get('dashboard', [HealthController::class, 'dashboard']);
Route::post('createpatient', [HealthController::class, 'createpatient']);
Route::post('createdoctor', [HealthController::class, 'createdoctor']);

Route::post('createservice', [HealthController::class, 'createservice']);
Route::post('createrating', [HealthController::class, 'createrating']);

