<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UsersTasks extends Model
{
    protected $hidden = [
        'created_at',
        'updated_at'
    ];
}
