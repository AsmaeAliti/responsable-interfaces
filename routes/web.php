<?php

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
    return view('welcome');
});

Route::get('login_responsable' , function(){
  return view('responsable.login');
})->name('login_respo');

Route::get('dashboard_responsable' , function(){
  return view('responsable.dashboard_reserver');
})->name('reserver');

Route::get('dashboard_aRetourner' , function(){
  return view('responsable.dashboard_aRetourner');
})->name('aRetourner');

Route::get('dashboard_historique' , function(){
  return view('responsable.dashboard_historique');
})->name('historique');
Route::get('reservation_direct_respo' , function(){
  return view('responsable.reservation_direct_respo');
})->name('reservation_direct_respo');