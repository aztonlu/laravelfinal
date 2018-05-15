<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\CountriesRequest;
use App\Models\Country;

class CountriesController extends Controller
{

    public function index()
    {
        $countries = Country::orderBy('id', 'ASC')->paginate();
        return view('admin.countries.index')->with('countries', $countries);
    }


    public function create()
    {
        return view('admin.countries.create');
    }


    public function store(CountriesRequest $request)
    {
        $country = new Country($request->all());
        $country->save();
        flash('Se Registró país"'.$country->name.'" satisfactoriamente', 'success')->important();
        return redirect()->route('countries.index');
    }


    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $country = Country::find($id);
        return view('admin.countries.edit')->with('country', $country);
    }


    public function update(Request $request, $id)
    {
        $country = Country::find($id);
        $country->fill($request->all());
        $country->save();
        flash('Se actualizó "'.$country->name.'" satisfactoriamente!', 'success')->important();
        return redirect()->route('countries.index');
    }


    public function destroy($id)
    {
        $country = Country::find($id);
        $country->delete();

        flash('Se borró "'.$country->name.'" de forma exitosa!', 'danger')->important();
        return redirect()->route('countries.index');
    }
}
