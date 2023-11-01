<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PainelController;


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

Route::get('/', [HomeController::class, 'home'])->name('home');

Route::get('/torneios', [HomeController::class, 'torneios'])->name('torneios');

Route::post('/busca', [HomeController::class, 'buscar'])->name('buscar');

Route::get('/area_atleta', [HomeController::class, 'atleta'])->name('atleta');

Route::get('/integra/{campeonato}/{slug}', [HomeController::class, 'integra'])->name('integra');

Route::resource('/adm_painel', PainelController::class);
