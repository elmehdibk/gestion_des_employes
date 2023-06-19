<?php

use App\Http\Controllers\EmployeController;
use Illuminate\Support\Facades\Auth;
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

Auth::routes();

Route::get('/employes/{email?}',[EmployeController::class,'index'])->name('employes.index');
Route::get('/create',[EmployeController::class,'create'])->name('employes.create');
Route::post('/employes/store',[EmployeController::class,'store'])->name('employes.store');
Route::get('/employes/show/{employe}',[EmployeController::class,'show'])->name('employes.show');
Route::get('/employes/{employe}/edit',[EmployeController::class,'edit'])->name('employes.edit');
Route::put('/employes/{employe}',[EmployeController::class,'update'])->name('employes.update');
Route::get('/employes/verification/{employe}',[EmployeController::class,'verification'])->name('employes.verification');
Route::get('/employes/delete/{id}',[EmployeController::class,'destroy'])->name('employes.destroy');



Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
