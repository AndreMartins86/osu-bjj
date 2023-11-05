<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PainelController;
use App\Http\Controllers\TorneioController;
use App\Mail\AdminMail;
use App\Models\User;
use Barryvdh\DomPDF\Facade\Pdf as PDF;


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

Route::post('/filtrar', [PainelController::class, 'filtrarUsuario'])->name('filtrarUsuario');

Route::resource('/adm_torneio', TorneioController::class);

Route::get('/mail', function ()
{
	Mail::to('alinemota710@gmail.com')
	->send(new AdminMail());

});

Route::get('/pdf', function()
	{
		$usuarios = User::all();

		$pdf = PDF::loadView('pdf', compact('usuarios'));

		return $pdf->setPaper('a4')->stream('usuarios.pdf');

	});


