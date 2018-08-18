<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Buses extends Model
{
  protected $table = 'buses';

  protected $fillable = [
      'placa',
      'modelo',
      'tipo',
      'nroasientos',
      'empresa'
  ];
}
