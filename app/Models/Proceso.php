<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Proceso extends Model
{
  protected $table = 'proceso';

  protected $fillable = [
      'dni',
      'boleto'
  ];
}
