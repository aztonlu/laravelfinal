<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Models\Transaccion;
use Auth;
use App\Http\Requests\UsersRequest;
use App\Http\Controllers\Controller;

class TransaccionController extends Controller
{
  public function __construct()
  {
    $this->middleware('adminsecurity:admin',['except' => ['indexPrincipal']]);
  }

  public function index()
  {
      $trans = transaccion::orderBy('id', 'ASC')->paginate();
      return view('admin.transaccion.index')->with('transaccion', $trans);
  }

  public function create()
  {
      return view('admin.transaccion.create');
  }

  public function store(Request $request)
  {

      $transaccion = new transaccion($request->all());
      $transaccion->dni = $request->dni;
      $transaccion->boleto = $request->boleto;
      $transaccion->save();
      flash('Se registró el boleto "'.$transaccion->boleto.'" satisfactoriamente', 'success')->important();
      return redirect()->route('transaccion.index');
  }
}
