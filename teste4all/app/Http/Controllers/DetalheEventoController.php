<?php

namespace App\Http\Controllers;


use App\DetalheEvento;

 use Request; 



class DetalheEventoController extends Controller
{
 
   public function visualizar($evento_id)  

    {    	
	    
	    $registro = DetalheEvento::find($evento_id); 

	/**	$registro = DetalheEvento::where('evento_id', $evento_id)->first(); */

		return view('eventos.visualizar')->with(['registro' => $registro]);
    }
    
    public function editar($evento_id)

    {
    	$registro = DetalheEvento::all();
    	return view('eventos.editar',compact('registro'));
    }

           
}
