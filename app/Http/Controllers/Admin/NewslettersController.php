<?php

namespace App\Http\Controllers\Admin;


use Illuminate\Http\Request;
use App\Models\Newsletter;
use App\Models\User;
use Image;
use App\Http\Requests\UsersRequest;
use App\Http\Requests\TestimonialssRequest;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;    
class NewslettersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $newsletters = Newsletter::orderBy('id', 'ASC')->paginate(); 
        return view('admin.newsletters.index')->with('newsletters',$newsletters);
    }
        

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.newsletters.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $file = $request->file('photo');
        $flag = $request->flag;
        
        if($file != "" && $flag=='false'){
            
          $random = str_random(15);
            $nombre = trim('newsletters/'.$random.".png");
            $image = Image::make($file->getRealPath())->resize(262, 287);
            $image->save($nombre);
            chmod($nombre, 775);
            //depende al SO
            //$salida = shell_exec("/home/luis-ernesto/pngquant.git/pngquant ".$nombre);
            $salida = shell_exec("./pngquant/pngquant ".$nombre);
            $cadena = "";       
            $cadena = substr($nombre, 0, 27);
            $cadena = $cadena."-fs8.png";
                       chmod($cadena, 775);
            unlink($nombre);

        }
        else if($flag=='true'){
            $cadena = $request->photo;
        }
        else {
            $cadena = "users/persona.png";
        }
        
      
        $newsletters = new Newsletter($request->all());
        $newsletters->image = $cadena;
        $newsletters->save();
        flash('Se registró a "'.$newsletters->titulo.'" satisfactoriamente', 'success')->important();
        return redirect()->route('newsletters.index');
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
        $newsletter = Newsletter::find($id);
        return view('admin.newsletters.edit')->with('newsletter',$newsletter);
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
        $newsletter = Newsletter::find($id);
        $file = $request->file('photo');
        $flag = $request->flag;
        
        if($file != "" && $flag=='false'){
            
          $random = str_random(15);
            $nombre = trim('newsletters/'.$random.".png");
            $image = Image::make($file->getRealPath())->resize(262, 287);
            $image->save($nombre);
            chmod($nombre, 775);
            //depende al SO
            //$salida = shell_exec("/home/luis-ernesto/pngquant.git/pngquant ".$nombre);
            $salida = shell_exec("./pngquant/pngquant ".$nombre);
            $cadena = "";       
            $cadena = substr($nombre, 0, 27);
            $cadena = $cadena."-fs8.png";
                       chmod($cadena, 775);
            unlink($nombre);

        }
        else if($flag=='true'){
            $cadena = $request->photo;
        }
        else {
            $cadena = "users/persona.png";
        }
        
        $newsletter->fill($request->all());
        $newsletter->image = $cadena;
        $newsletter->save();
        flash('Se actualizó "'.$newsletter->titulo.'" satisfactoriamente!', 'success')->important();
        return redirect()->route('newsletters.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $newsletter = Newsletter::find($id);
        $newsletter->delete();

        flash('El articulo "'.$newsletter->titulo.'" a sido borrado de forma exitosa!', 'danger')->important();
        return redirect()->route('newsletters.index');
    }
}