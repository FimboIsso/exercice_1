<?php

use Illuminate\Support\Facades\Route;

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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/etudiants',[\App\Http\Controllers\EtudiantController::class,'index'])->name('etudiants');
Route::post('/etudiants',[\App\Http\Controllers\EtudiantController::class,'store'])->name('etudiants');
Route::get('/etudiants/{id}',[\App\Http\Controllers\EtudiantController::class,'show'])->name('etudiantDetails');
Route::get('edit/etudiants/{id}',[\App\Http\Controllers\EtudiantController::class,'edit'])->name('modifierForm');
Route::get('/nouveauEtudiant',[\App\Http\Controllers\EtudiantController::class,'create'])->name('createEtudiant');
Route::put('/etudiants/{id}',[\App\Http\Controllers\EtudiantController::class,'update'])->name('etudiantUpdate');
Route::get('/deleteEtudiant/{id}',[\App\Http\Controllers\EtudiantController::class,'delete'])->name('deleteEtudiant');

