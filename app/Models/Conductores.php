<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Conductores extends Model
{

    protected $table = 'conductores';

    protected $fillable = [
        'dni',
        'nombre',
        'apepat',
        'apemat',
        'nrolicencia'
    ];
}
