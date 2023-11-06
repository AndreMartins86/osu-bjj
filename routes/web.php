<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PainelController;
use App\Http\Controllers\AtletaController;
use App\Http\Controllers\TorneioController;
use App\Mail\AdminMail;
use App\Models\User;
use Barryvdh\DomPDF\Facade\Pdf as PDF;
use Maatwebsite\Excel\Facades\Excel as Excel;
use App\Exports\UserExport;	


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

Route::get('/login', [HomeController::class, 'login'])->name('login');

Route::post('/autenticar', [HomeController::class, 'autenticar'])->name('autenticar');

Route::get('/logout', [HomeController::class, 'logout'])->name('logout');

Route::get('/torneios', [HomeController::class, 'torneios'])->name('torneios');

Route::post('/busca', [HomeController::class, 'buscar'])->name('buscar');

Route::get('/integra/{campeonato}/{slug}', [HomeController::class, 'integra'])->name('integra');
	
Route::middleware('auth')->group(function () {
	Route::get('/area_atleta', [HomeController::class, 'homeAtleta'])->name('homeAtleta');
	
});



Route::resource('/adm_painel', PainelController::class);

Route::post('/filtrar', [PainelController::class, 'filtrarUsuario'])->name('filtrarUsuario');

Route::get('/userpdf', [PainelController::class, 'gerarPDF'])->name('gerarUserPDF');

Route::get('/usercsv', [PainelController::class, 'gerarCSV'])->name('gerarUserCSV');

Route::get('/torneiopdf', [TorneioController::class, 'gerarPDF'])->name('gerarTorneioPDF');

Route::get('/torneiocsv', [TorneioController::class, 'gerarCSV'])->name('gerarTorneioCSV');

Route::resource('/adm_torneio', TorneioController::class);




Route::get('/mail', function ()
{
	Mail::to('alinemota710@gmail.com')
	->send(new AdminMail());

});




