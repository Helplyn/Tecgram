<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MuroController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\auth\RegisterController;

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
    return view('principal');
})-> name('index');

route::get('/cuenta', [RegisterController::class,'index'])->name('cuenta.index');

route::post('/cuenta', [RegisterController::class,'store'])->name('cuenta.store');

route::get('/login', [LoginController::class,'index'])->name('login');

route::post('/login', [LoginController::class,'store'])->name('login.store');

route::post('/logout',[LogoutController::class,'store'])->name('logout.store');

route::get('/{user:username}', [MuroController::class,'index'])->name('muro.index');

route::get('muro/create', [MuroController::class,'create'])->name('muro.create');

