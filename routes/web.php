<?php
use App\Http\Controllers\Loader;
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
Route::get('/',[Loader::class,'welcome'])->name('welcome');
Route::get('/struttura',[Loader::class,'struttura'])->name('struttura');
Route::get('/corsi',[Loader::class,'corsi'])->name('corsi');
Route::get('/contatti',[Loader::class,'contatti'])->name('contatti');
Route::get('/corsi/detail{id}',[Loader::class,'detail'])->name('detail');
Route::get('/dove-siamo',[Loader::class,'dovesiamo'])->name('dove-siamo');
