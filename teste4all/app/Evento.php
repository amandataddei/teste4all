<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Evento extends Model
{
 protected $table = 'eventos';

    protected $fillable = ['evento_id', 'evento_nome', 'descricao'];
    

    public function detalheeventos(){
        return $this->belongsTo('DetalheEvento');
    }

 }


