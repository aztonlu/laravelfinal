<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Models\Buses;
use App\Http\Controllers\Controller;

class BusesController extends Controller
{
  public function __construct()
  {
    $this->middleware('adminsecurity:admin',['except' => ['indexPrincipal']]);
  }

  public function index()
  {
      $users = Buses::orderBy('id', 'ASC')->paginate();
      return view('admin.buses.index')->with('buses', $users);
  }

  public function create()
  {
      return view('admin.buses.create');
  }

  public function store(Request $request)
  {
      $user = new Buses($request->all());
      $user->placa = $request->placa;
      $user->modelo = $request->modelo;
      $user->tipo = $request->tipo;
      $user->nroasientos = $request->nroasientos;
      $user->empresa = $request->empresa;
      $user->save();
      flash('Se registró al bus con placa "'.$user->placa.'" satisfactoriamente', 'success')->important();
      return redirect()->route('buses.index');
  }

}
