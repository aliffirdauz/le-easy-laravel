<?php

use App\Models\Antrian;
use App\Http\Controllers\AntrianController;
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

Route::get('/', function () {
    $countAntrian = Antrian::count();
    return view('index', compact('countAntrian'));
})->name('index');

Route::post('/antrian/store', [AntrianController::class, 'store'])->name('antrian.store');
