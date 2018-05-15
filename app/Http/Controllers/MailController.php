<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use Session;
use Redirect;

class MailController extends Controller
{
    //

    public function store(Request $request)
    {
    	Mail::send('emails.contact',$request->all(), function($msj){
    		$msj->subject('Correo de contacto');
    		$msj->to('mdcejlct@gmail.com');
    	});

    	Session::flash('message','Mensaje Enviado correctamente');
    	return Redirect::to('/contacto2');
    }
}
