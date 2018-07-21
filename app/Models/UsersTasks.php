<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UsersTasks extends Model
{
    protected $table = 'usuario';

    protected $hidden = [
        'created_at',
        'updated_at'
    ];
}
