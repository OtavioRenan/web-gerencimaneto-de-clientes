<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserStatus extends Model
{
    protected $table = 'users_status';

    protected $fillable = [
        'id', 'nome'
    ];
}
