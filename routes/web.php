<?php

use App\Http\Controllers\HistoryController;
use App\Http\Controllers\ViewController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;



// Exemplo de rota simples:

// Route::get('/caminho_url', function () {
//     return view('caminho_da_view'); //dentro da pasta resources/views
// });


Route::get('/', [ViewController::class, 'index'])->name('home');

Route::get('/home', [ViewController::class, 'index'])->name('home');

Route::get('/histories', [ViewController::class, 'histories'])->name('histories');

Route::get('/login', [LoginController::class, 'index'])->name('login');

Route::post('/login', [LoginController::class, 'login'])->name('login');

Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

//Admin History Routes

Route::get('/admin/history', [HistoryController::class, 'index'])->name('history.index');

Route::post('/admin/history/create', [HistoryController::class, 'create'])->name('history.create');

Route::put('/admin/history/{history}', [HistoryController::class, 'edit'])->name('history.edit');

Route::delete('/admin/history/{history}', [HistoryController::class, 'delete'])->name('history.delete');


//Admin User Routes

Route::get('/admin/users', [UserController::class, 'index'])->name('user.index');

Route::post('/admin/users/create', [UserController::class, 'create'])->name('user.create');

Route::put('/admin/users/{user}', [UserController::class, 'edit'])->name('user.edit');

Route::delete('/admin/users/{user}', [UserController::class, 'delete'])->name('user.delete');

//Auth::routes();


