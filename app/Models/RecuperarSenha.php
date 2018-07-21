<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;

class RecuperarSenha extends Model
{
    protected $table = 'recuperar_senha';

    protected $hidden = [
        'created_at',
    ];
}
