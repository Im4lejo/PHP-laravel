<?php

use App\Http\Controllers\OperacionesController;
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
Route::get('/frm_sumar',[OperacionesController::class,'frm_sumar']);
Route::post('/sumar',[OperacionesController::class,'sumar'])->name('sumar.store');

Route::get('/frm_restar',[OperacionesController::class,'frm_restar']);
Route::post('/restar',[OperacionesController::class,'restar'])->name('restar.store');

Route::get('/frm_amigos',[OperacionesController::class,'frm_amigos']);
Route::post('/amigos',[OperacionesController::class,'amigos'])->name('amigo.store');

Route::get('/frm_circulo',[OperacionesController::class,'frm_circulo']);
Route::post('/circulo',[OperacionesController::class,'circuloArea'])->name('circulo.store');

Route::get('/frm_cuadratica',[OperacionesController::class,'frm_cuadratica']);
Route::post('/cuadratica',[OperacionesController::class,'cuadratica'])->name('cuadratica.store');

Route::get('/frm_factorial',[OperacionesController::class,'frm_factorial']);
Route::post('/factorial',[OperacionesController::class,'factorial'])->name('factorial.store');

Route::get('/frm_primos',[OperacionesController::class,'frm_primos']);
Route::post('/primos',[OperacionesController::class,'primos'])->name('primo.store');

Route::get('/frm_triangulo',[OperacionesController::class,'frm_triangulo']);
Route::post('/triangulo',[OperacionesController::class,'trianguloArea'])->name('triangulo.store');
