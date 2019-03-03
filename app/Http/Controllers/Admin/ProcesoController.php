<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Models\Proceso;
use Auth;
use App\Http\Requests\UsersRequest;
use App\Http\Controllers\Controller;

class ProcesoController extends Controller
{
  public function __construct()
  {
    $this->middleware('adminsecurity:admin',['except' => ['indexPrincipal']]);
  }

  public function index()
  {
      $pro = Proceso::orderBy('id', 'ASC')->paginate();
      return view('admin.proceso.index')->with('proceso', $pro);
  }

  public function create()
  {
      return view('admin.proceso.create');
  }

  public function store(Request $request)
  {

      $proceso = new Proceso($request->all());
      $proceso->dni = $request->dni;
      $proceso->boleto = $request->boleto;
      $proceso->save();
      flash('Se registró el boleto "'.$proceso->boleto.'" satisfactoriamente', 'success')->important();
      return redirect()->route('proceso.index');
  }
}
