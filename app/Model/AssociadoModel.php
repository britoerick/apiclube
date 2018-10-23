<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class AssociadoModel extends Model
{
    protected $table = 'associado';

    protected $fillable = ['nome', 'cpf', 'rg'];

    public $timestamps =  false;
}
