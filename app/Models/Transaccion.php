<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Transaccion extends Model
{
  protected $table = 'transaccion';

  protected $fillable = [
      'dni',
      'boleto'
  ];
}
