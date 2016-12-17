<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Tercero;

class CreateTerceroController extends Controller
{
    public function create(){
    	return view('tercero.create');
    }

    public function store(Request $request){

    	$tercero = new Tercero($request->all());
    	auth()->user()->terceros()->save($tercero);
    	return $tercero->primerNombre;
    }
}
