<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\userdataController;
// use App\Http\Controllers\PhotoController;
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

Route::middleware(['auth'])->group(function () {
 
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    
    Route::middleware(['admin'])->group(function () {
        Route::get('admin', [AdminController::class, 'index']);
    });
    
    Route::middleware(['user'])->group(function () {
        Route::get('user', [UserController::class, 'index']);
        Route::get('user/prior', [UserController::class, 'prior']);
        
    });
    
    
    Route::get('/logout', function() {
        Auth::logout();
        return redirect()->route('login');
    });
    
    // 
});
Route::patch('/userdata/{id}', [userdataController::class, 'update'])->name('update');
// Route::resource('/userdata', [userdataController::class]);