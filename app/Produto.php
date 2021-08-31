<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    //Atributos do modelo
    protected $fillable = ['tipo','modelo','marca','precoVenda','cor','peso','descricao'];
}
