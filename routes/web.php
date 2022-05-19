<?php

use Illuminate\Support\Facades\Route;
Use App\Http\Controllers\ArtikelController;
Use App\Http\Controllers\WebinarController;
Use App\Http\Controllers\UserController;
Use App\Http\Controllers\DashboardController;


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
    return view('auth.login');
});

Route::middleware('auth')->group(function () {
    // Route::get('/dashboard', function () {
    //     return view('dashboard');
    // })->name('dashboard');
    Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');

    Route::resource('artikel', ArtikelController::class);
    

    Route::resource('webinar', WebinarController::class);

    Route::get('user/edit/{user:username}', [UserController::class, 'edit'])->name('user.edit');
    Route::put('user/edit', [UserController::class, 'update'])->name('user.update');
    Route::delete('user/edit', [UserController::class, 'destroy'])->name('user.destroy');
});

require __DIR__.'/auth.php';
