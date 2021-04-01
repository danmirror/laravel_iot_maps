<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\userController;
use App\Http\Controllers\dataController;


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
// Route::get('/', function () {
    //     return view('welcome');
    // });
    
    // Route::get()
Route::get('/', [userController::class, 'index']);
Route::get('/user-add', [userController::class, 'create']);
Route::post('/user-store', [userController::class, 'store'])->name('userStore');
Route::get('/login', [userController::class, 'login'])->name('login');
Route::post('/login-store', [userController::class, 'loginStore'])->name('loginStore');
Route::get('/logout', [userController::class, 'logout'])->name('logout');


Route::get('/maps', [dataController::class, 'index'])->name('maps');
Route::get('/api/create', [dataController::class, 'create']);