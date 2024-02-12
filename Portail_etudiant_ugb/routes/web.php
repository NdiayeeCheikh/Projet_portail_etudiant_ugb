<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InscriptionController;
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



//Route::get('/', [InscriptionController::class,'accueil']);

Route::get('/', function () {
    return view('dashboard');
});

Route::get('/inscrip_admin', function () {
    return view('inscrip_admin');
})->name('inscrip_admin');