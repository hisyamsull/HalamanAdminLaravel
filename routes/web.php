<?php

use App\Http\Controllers\studentController;
use Illuminate\Support\Facades\Route;

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
//dricet
Route::get('/', [studentController::class, 'index']);
Route::get('/fromAdd', [studentController::class, 'create']);
Route::get('/edit/{student:nama}', [studentController::class, 'edit']);
//crud
Route::get('/detail/{student:nama}', [studentController::class, 'show']);
Route::put('/{id}', [studentController::class, 'update']);
Route::post('/', [studentController::class, 'store']);
Route::get('detail/delete/{id}', [studentController::class, 'destroy']);
