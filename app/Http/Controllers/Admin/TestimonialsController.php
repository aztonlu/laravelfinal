<?php

namespace App\Http\Controllers\Admin;


use Illuminate\Http\Request;
use App\Models\Testimonial;
use App\Models\Tour;
use App\Models\User;
use Image;
use App\Http\Requests\UsersRequest;
use App\Http\Requests\TestimonialssRequest;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;    
class TestimonialsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::where('id', Auth::user()->id )->first();   
    
        switch($users->language){
            case 'french':
                $testimonials = Testimonial::orderBy('id', 'ASC')->where('language','french')->paginate();
                break;
            case 'spanish':
                $testimonials = Testimonial::orderBy('id', 'ASC')->where('language','spanish')->paginate();
                break;
            case 'italian':
                $testimonials = Testimonial::orderBy('id', 'ASC')->where('language','italian')->paginate();
                break;
            case 'german':
                $testimonials = Testimonial::orderBy('id', 'ASC')->where('language','german')->paginate();
                break;
            case 'english':
                $testimonials = Testimonial::orderBy('id', 'ASC')->where('language','english')->paginate();
                break;
            default:
                $testimonials = Testimonial::orderBy('id', 'ASC')->paginate();
                break;
        }

       return view('admin.testimonials.index')->with('testimonials', $testimonials);
    }
        
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tours = Tour::get();
        return view('admin.testimonials.create')->with('tours',$tours);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $users = User::where('id', Auth::user()->id)->first();   
        $file = $request->file('photo');
        $flag = $request->flag;
        
        if($file != "" && $flag=='false'){
            
          $random = str_random(15);
            $nombre = trim('testimonial/'.$random.".png");
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
        
      
        $testimonial = new Testimonial($request->all());
        $testimonial->language = $users->language;
        $testimonial->photo = $cadena;
        $testimonial->tour_id = $request->tour;
        $testimonial->status = $request->status;
        $testimonial->save();
        flash('Se registró a "'.$testimonial->name.'" satisfactoriamente', 'success')->important();
        return redirect()->route('testimonials.index');
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
        $testimonial = Testimonial::find($id);
        $tour = Tour::find($testimonial->tour_id);
        $tours = Tour::get();
        return view('admin.testimonials.edit')->with(['testimonial'=>$testimonial,'tours'=>$tours,'tour'=>$tour]);
    }

    public function approved($id)
    {
        $testimonial = Testimonial::find($id);
        if($testimonial->status=="approved")
        $testimonial->status = "disappoved";
        else
        $testimonial->status = "approved";
        $testimonial->save();
        flash('Se cambio el estado del testimonio "'.$testimonial->name.'" satisfactoriamente!', 'success')->important();
        return redirect()->route('testimonials.index');
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
        $testimonial = Testimonial::find($id);
        $file = $request->file('photo');
        $flag = $request->flag;
        
        if($file != "" && $flag=='false'){
            
          $random = str_random(15);
            $nombre = trim('testimonial/'.$random.".png");
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
        $testimonial->fill($request->all());
        $testimonial->photo = $cadena;
        $testimonial->tour_id = $request->tour;
        $testimonial->status = $request->status;
        $testimonial->save();
        flash('Se actualizó "'.$testimonial->name.'" satisfactoriamente!', 'success')->important();
        return redirect()->route('testimonials.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         $testimonial = Testimonial::find($id);
        $testimonial->delete();

        flash('El testimonio "'.$testimonial->name.'" a sido borrado de forma exitosa!', 'danger')->important();
        return redirect()->route('testimonials.index');
    }
}
