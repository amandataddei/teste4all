<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContatoController extends Controller
{
 public function index()
{
	
	$contatos = [
		(object)["nome"=>"Maria","tel"=>"56565656"],
		(object)["nome"=>"amanda","tel"=>"8383838"]
	];

	$contato = new \App\Contato();
	$con = $contato->lista();
	dd($con);


	return view('contato.index',compact('contatos'));
}

}
