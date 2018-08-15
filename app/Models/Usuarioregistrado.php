<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Usuarioregistrado extends Model
{
  protected $table = 'usuariosregistrados';

  protected $fillable = [
      'nombre',
      'dni',
      'email',
      'password'
  ];



}
