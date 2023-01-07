<?php

use App\Http\Controllers\HistoryController;
use App\Http\Controllers\ViewController;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;


// Exemplo de rota simples:

// Route::get('/caminho_url', function () {
//     return view('caminho_da_view'); //dentro da pasta resources/views
// });


Route::get('/', [ViewController::class, 'index'])->name('home');

Route::get('/admin/history', [HistoryController::class, 'index']);

Route::get('/histories', [ViewController::class, 'histories'])->name('histories');

Route::get('/contact', [ViewController::class, 'contact'])->name('contact');


//Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
