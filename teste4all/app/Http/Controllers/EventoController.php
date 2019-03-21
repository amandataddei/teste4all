<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Evento;

class EventoController extends Controller
{
    public function index()
    {
    	$registros=Evento::all();
    	return view('eventos.index',compact('registros'));
    }

    public function salvar(Request $req)
    {
    	$registro = $req->all();
    	Teste::create($registro);

    	return redirect()->route('eventos');
    }

    public function editar($id)

    {
    	$registro = Evento::all();
    	return view('eventos.editar',compact('registro'));
    }

    

}
