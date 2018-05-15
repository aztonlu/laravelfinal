<?php

namespace App\Http\Controllers\Admin;


use Illuminate\Http\Request;

use Image;
use Auth;
use App\Http\Requests\UsersRequest;
use App\Http\Controllers\Controller;  
class GalleriesController extends Controller
{
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.galleries.index');
    }
        
    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $file = $request->file('imagen');
        $type = $request->type;
        if($file != ""){
            
            $random = str_random(15);
            $nombre = trim($type .'/'.$random.".png");
            $image = Image::make($file->getRealPath())->resize(262, 287);
            $image->save($nombre);
            chmod($nombre, 775);
            //depende al SO
            //$salida = shell_exec("/home/luis-ernesto/pngquant.git/pngquant ".$nombre);
            $salida = shell_exec("./pngquant/pngquant ".$nombre);
            $cadena = ""; 
            
            if($type == 'testimonial')
            $cadena = substr($nombre, 0, 27);
            else if($type == 'tours')
            $cadena = substr($nombre, 0, 21);
            else 
            $cadena = substr($nombre, 0, 21);
            
            $cadena = $cadena."-fs8.png";
            chmod($cadena, 775);
            unlink($nombre);
            flash('Se guardo la imagen "'.$cadena.'" satisfactoriamente en el servidor', 'success')->important();
        }
        else {
            flash('Ocurrio un error', 'error')->important();
        }

        return redirect()->route('galleries.index');
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
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id,$archivo)
    {
        if(unlink($id . "/" . $archivo))
        {
            flash('Se elimino la imagen "'.$id . "/" . $archivo.'" satisfactoriamente', 'success')->important();
        }
        else{
            flash('Ocurrio un error', 'error')->important(); 
        }
        return redirect()->route('galleries.index');
    }
}
