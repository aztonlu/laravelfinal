<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Models\Usuarioregistrado;
use App\Http\Requests\UsuariosregistradosRequest;
use DB;
use App\Http\Controllers\Controller;

class UsuarioregistradoController extends Controller
{
  public function create()
  {
    //return view('website')

  }

  public function store(Request $request)
  {
      $usuarioregistrado = new Usuarioregistrado($request->all());
      $usuarioregistrado->nombre = $request->nombreusuario;
      $usuarioregistrado->dni = $request->dniusuario;
      $usuarioregistrado->email = $request->emailusuario;
      $usuarioregistrado->password = $request->password;
      $usuarioregistrado->save();
      flash('Se registró a "'.$usuarioregistrado->nombreusuario.'" satisfactoriamente', 'success')->important();
      return redirect('/es');
  }
}
