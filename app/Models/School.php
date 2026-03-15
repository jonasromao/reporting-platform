<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class School extends Model
{
    //Indicar nome da tabela

    protected $table = 'schools';

    // Indicar quais colunas podem ser manipuladas
    protected $fillable = ['name', 'user_id'];
}
