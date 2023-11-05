<?php

namespace App\Exports;

use App\Models\Campeonato;
//use Maatwebsite\Excel\Concerns\FromCollection;
//use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\FromView;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\DB;
use Barryvdh\DomPDF\Facade\Pdf as PDF;
use Maatwebsite\Excel\Facades\Excel as Excel;
use App\Exports\UserExport;


class UserExport implements FromView
{
    /**
    * @return \Illuminate\Support\Collection
    */
    // public function collection()
    // {
    //     return collect(User::getAllUsersCSV());
    // }


    public function view() : View
    {
        $campeonatos = Campeonato::all();
        $estados = DB::table('estados')->get();
        $tipos = DB::table('tipos')->get();

        return view('painel.csvTorneios', compact('campeonatos', 'estados', 'tipos'));

    }     
}
