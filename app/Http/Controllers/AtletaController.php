<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AtletaController extends Controller
{
    public function homeAtleta()
    {
        return view('atleta.area_restrita');
    }
}
