<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contato extends Model
{
    public function Lista()
    {
    	return (object) [
    		'nome'=>'amanda',
    		'tel'=>'232332'

    	];
    }
}
