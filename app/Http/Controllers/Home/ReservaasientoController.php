<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Models\Reservaasiento;
use DB;
use App\Http\Controllers\Controller;


class ReservaasientoController extends Controller
{
  public function create()
  {
    //return view('website')

  }

  public function store(Request $request)
  {
      $reserva = new Reservaasiento($request->all());
      $reserva->dni = $request->dni;
      $reserva->horabus = $request->horabus;
      $reserva->paraderopago = $request->paraderopago;
      $reserva->estado = $request->estado;
      $reserva->save();
      flash('Se registró a "'.$reserva->dni.'" satisfactoriamente', 'success')->important();
      return redirect('/es');
  }
}
