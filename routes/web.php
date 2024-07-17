<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\UserController;

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
Route::get('/mylaravel/{mins?}', function ($mins='mins') {
    return view('mylaravel',compact('mins'));
});
Route::get('/aboutus/{namakementerian}', function ($namakementerian) {
    return view('aboutus',compact('namakementerian'));
});
Route::get('/users',[UserController::class,'index']);
Route::get('/users/{id}/edit',[UserController::class,'edit']);
Route::get('/tasks',[TaskController::class,'index']);
Route::get('tasks/{task}',[TaskController::class,'show'])->name('tasks.show');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

