<?php

use App\Http\Controllers\HistoryController;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;


// Exemplo de rota simples:

// Route::get('/caminho_url', function () {
//     return view('caminho_da_view'); //dentro da pasta resources/views
// });


Route::get('/', function () {
    return view('home')->with('css', 'test.css');
});

Route::get('/admin/history', [HistoryController::class, 'index']);


//Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
