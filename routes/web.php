<?php

use App\Http\Controllers\HistoryController;
use App\Http\Controllers\ViewController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;


// Exemplo de rota simples:

// Route::get('/caminho_url', function () {
//     return view('caminho_da_view'); //dentro da pasta resources/views
// });


Route::get('/', [ViewController::class, 'index'])->name('home');

//Admin History Routes

Route::get('/admin/history', [HistoryController::class, 'index']);

//Admin User Routes

Route::get('/admin/users', [UserController::class, 'index'])->name('user.index');

Route::post('/admin/users/create', [UserController::class, 'create'])->name('user.create');

Route::get('/admin/users/{id}', [UserController::class, 'show'])->name('user.show');

Route::get('/admin/users/{id}/edit', [UserController::class, 'edit'])->name('user.edit');

Route::post('/admin/users/{id}/delete', [UserController::class, 'delete'])->name('user.delete');

//Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
