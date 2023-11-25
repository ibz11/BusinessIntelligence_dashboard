<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HealthController;
use App\Http\Controllers\CustomerController;
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

Route::get('businessdashboard', [HealthController::class, 'businessdashboard']);
Route::get('businessanalytics', [HealthController::class, 'businessanalytics']);


Route::get('adddata', [HealthController::class, 'adddata']);
Route::post('createpatient', [HealthController::class, 'createpatient']);
Route::post('createdoctor', [HealthController::class, 'createdoctor']);
Route::post('createservice', [HealthController::class, 'createservice']);
Route::post('createrating', [HealthController::class, 'createrating']);




//Customer Analytics
Route::get('customeranalytics', [CustomerController::class, 'customeranalytics']);
