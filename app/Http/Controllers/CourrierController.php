<?php

namespace App\Http\Controllers;

use App\Models\Courrier;
use Illuminate\Http\Request;

class CourrierController extends Controller
{
    public function getCourriers(){
        $mesCourriers = Courrier::all();
        return view('Gcourrier')->with('mesCourriers',$mesCourriers);
    }

    public function postCourriers(request $request){
        $request->validate([

        ]);
    }

    public function getCourriersSend(){
        $courriers =  new Courrier;
        $courriersEnvoye = $courriers->where('adr_recp','<>','marcellin.brou@inphb.ci')->get();
        return $courriersEnvoye;
    }
}
