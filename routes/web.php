<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SerialNumberController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/generate-serial-number', [SerialNumberController::class, 'generateAndStoreSerialNumber']);

Route::get('serial_number/create', [SerialNumberController::class, 'create'])->name('serial_number.create');
Route::post('serial_number', [SerialNumberController::class, 'store'])->name('serial_number.store');