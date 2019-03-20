<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DetalheEvento extends Model
{
   

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'evento_id', 'evento_nome', 'descricao',
    ];

}
