<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Reservaasiento extends Model
{
  protected $table = 'reservaasiento';

  protected $fillable = [
      'dni',
      'horabus',
      'paraderopago',
      'estado'
  ];
}
