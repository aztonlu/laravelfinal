<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Models\Conductores;
use Auth;
use App\Http\Requests\UsersRequest;
use App\Http\Controllers\Controller;

class ConductoresController extends Controller
{
  public function __construct()
  {
    $this->middleware('adminsecurity:admin',['except' => ['indexPrincipal']]);
  }

  public function index()
  {
      $conductor = conductores::orderBy('id', 'ASC')->paginate();
      return view('admin.conductores.index')->with('conductores', $conductor);
  }

  public function create()
  {
      return view('admin.conductores.create');
  }

  public function store(Request $request)
  {

      $conductor = new conductores($request->all());
      $conductor->dni = $request->dni;
      $conductor->nombre = $request->nombre;
      $conductor->apepat = $request->apepat;
      $conductor->apemat = $request->apemat;
      $conductor->nrolicencia = $request->nrolicencia;
      $conductor->save();
      flash('Se registró a "'.$conductor->nombre.'" satisfactoriamente', 'success')->important();
      return redirect()->route('conductores.index');
  }

  public function edit($id)
  {
      $user = Conductor::find($id);
      return view('admin.conductores.edit')->with('conductor', $user);
  }


  public function update(Request $request, $id)
  {
      $user = Conductor::find($id);

      $user->fill($request->all());
      $user->save();
      flash('Se actualizó "'.$user->nombre.'" satisfactoriamente!', 'success')->important();
      return redirect()->route('conductores.index');

  }


  public function destroy($id)
  {
      $user = Conductor::find($id);
      $user->delete();

      flash('El usuario "'.$user->nombre.'" a sido borrado de forma exitosa!', 'danger')->important();
      return redirect()->route('conductores.index');
  }


}
