<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
    protected $fillable = [
        'razao_social',
        'cnpj',
        'adress',
        'status'
    ];
}
