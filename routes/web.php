<?php

use App\Http\Controllers\PessoalController;
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

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::prefix('/pessoal')->name('pessoal.')->group(function () {
        Route::get('/', function () {
            return view('pages.pessoal.index');
        })->name('index');

        Route::get('/{codigo}', [PessoalController::class, 'show'])->name('show');

    });

    Route::prefix('/sualoja')->name('ecommerce.')->group(function () {

        Route::get('/minha-conta', function () {
            return view('ecommerce.profile.conta-usuario');
        })->name('conta-usuario');

        Route::get('/meus-pedidos', function () {
            return view('ecommerce.profile.pedidos-usuario');
        })->name('pedidos-usuario');
    });
});
