<?php
namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Models\Testimonial;
use App\Models\User;
use App\Models\User_newsletters;
use Image;
use App\Http\Requests\TestimonialsRequest;
use App\Http\Requests\UsersRequest;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Admin;

class TestimonialsControllerPublic extends Controller
{

    public function blogsFrench($id){
        return view('website.fr.blogs.'. $id);
    }
    public function blogsSpanish($id){
        return view('website.es.blogs.'. $id);
    }
    public function blogsGerman($id){
        return view('website.de.blogs.'. $id);
    }
    public function blogsItalian($id){
        return view('website.it.blogs.'. $id);
    }
    public function blogsEnglish($id){
        return view('website.en.blogs.'. $id);
    }
    
    public function store(Request $request){
        $file = $request->file('imagen');
        if($file != ""){
            
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
        else {
            $cadena = "users/persona.png";
        }
        
        $testimonial = new Testimonial($request->all());
        switch($request->language){
            case 'fr':
                $language = 'french';
                break;
            case 'de':
                $language = 'german';
                break;
            case 'es':
                $language = 'spanish';
                break;
            case 'en':
                $language = 'english';
                break;
            case 'it':
                $language = 'italian';
                break;
        }
        $testimonial->language = $language;
        $testimonial->photo = $cadena;
        $testimonial->tour_id = $request->tour;
        $testimonial->status = $request->status;
        $testimonial->save();
        flash('Se registró a "'.$testimonial->name.'" satisfactoriamente', 'success')->important();
        return redirect('/'.$request->language);
}

}