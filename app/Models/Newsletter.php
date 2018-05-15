<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Newsletter extends Model
{
    protected $table = 'newsletters';

    protected $fillable = [
        'titulo',
        'description',
        'date',
        'image',
        'created_at',
        'updated_at'
    ];

}
