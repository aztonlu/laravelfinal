<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User_newsletters extends Model
{
    protected $table = 'user_newsletters';

    protected $fillable = [
        'email'
    ];
}
