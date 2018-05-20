<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Models\Reservation;
use App\Http\Controllers\Controller;
use DB;

class ReservationsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Reservation = Reservation::orderBy('id', 'ASC')->paginate(); 
        return view('admin.reservations.index')->with('Reservation',$Reservation);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $res = new Reservation;
        $res->names = $request->name;
        $res->email = $request->email;
        $res->phone = $request->phone;
        $res->skype = $request->skype;
        $res->checkin = $request->checkin;
        $res->checkout = $request->checkout;
        $res->adults = $request->adults;
        $res->Children = $request->Children;
        $res->nationality = $request->nationality;
        $res->message = $request->message;
        $res->guide = $request->guide;
        $res->type = $request->type;
        $res->hostel = $request->hostel;
        $res->plus = $request->plus;
        $res->save();
        flash('Reserva con éxito, dispone de 30 minutos para acercarse al terminal', 'success')->important();
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
