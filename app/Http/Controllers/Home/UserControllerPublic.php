<?php
namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Models\Testimonial;
use App\Models\User;
use Image;
use App\Http\Requests\TestimonialsRequest;
use App\Http\Requests\UsersRequest;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Admin;

class UserControllerPublic extends Controller
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
    
    public function store(UsersRequest $request)
    {
        $file = $request->file('imagen');
        if($file != ""){
            
            $random = str_random(15);
            $nombre = trim('users/'.$random.".png");
            $image = Image::make($file->getRealPath())->resize(262, 287);
            
            $image->save($nombre);
            $salida = shell_exec("./pngquant/pngquant ".$nombre);
            $cadena = "";       
            $cadena = substr($nombre, 0, 21);
            $cadena = $cadena."-fs8.png";
                    unlink($nombre);

        }
        else {
            $cadena = "users/persona.png";
        }
        
        $user = new User($request->all());
        $user->password = bcrypt($request->password);
        $user->routeImage = $cadena;
        $user->facebook = $request->facebook;
        $user->twitter = $request->twitter;
        $user->linkedin = $request->linkedin;
        $user->language = $request->language;
        $user->save();
        flash('Se registró a "'.$user->name.'" satisfactoriamente', 'success')->important();
        return redirect()->route('users.index');
    }
}

