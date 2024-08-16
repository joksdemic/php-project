<?php

namespace App\Http\Controllers;

use App\Models\Prijava;
use App\Models\Vrstadokumenta;
use Illuminate\Http\Request;

class PrijavaController extends Controller
{
    public function index(){
        return view("pocetna", ["vrste" => Vrstadokumenta::all(), "prijave"=> Prijava::all()]);
    }

    public function zakazivanje(){
        return view("prijava", ["vrste" => Vrstadokumenta::all()]);
    }

    public function zakazi(Request $r){
        $prijava = new Prijava();

        $prijava->ime = $r->ime;
        $prijava->prezime = $r->prezime;
        $prijava->jmbg = $r->jmbg;
        $prijava->vrsta_id = $r->vrsta_id;
        $prijava->termin = $r->termin;

        $prijava->save();

        return redirect(route('pocetna'));
    }
}
