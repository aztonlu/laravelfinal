<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Testimonial;
use App\Models\Tour;
use App\Models\Blog;
use Image;
use Auth;
use App\Http\Requests\UsersRequest;
use App\Http\Controllers\Controller;

class UsersController extends Controller
{
    public function __construct()
    {
      $this->middleware('adminsecurity:admin',['except' => ['indexPrincipal']]);
    }

    public function index()
    {
        $users = User::orderBy('id', 'ASC')->paginate();
        return view('admin.users.index')->with('users', $users);
    }
    public function indexPrincipal($lenguage)
    {

        $users = User::all();
        $testimonials = Testimonial::where('status',"approved")->get();
        $tours = Tour::get();
        $blogs = Blog::get();
       switch($lenguage)
        {
            case 'es':
                     return view('website.es.index')->with(['users'=>$users,'testimonials'=>$testimonials,
                            'tours'=>$tours,'blogs'=>$blogs]);
                            echo "direccionamiento a FR";
                    break;
            case 'fr':
                    return view('website.es.index')->with(['users'=>$users,'testimonials'=>$testimonials,
                            'tours'=>$tours,'blogs'=>$blogs]);
                    break;
            case 'en':
                    return view('website.en.index')->with(['users'=>$users,'testimonials'=>$testimonials,
                            'tours'=>$tours,'blogs'=>$blogs]);
                    break;
            case 'it':
                    return view('website.it.index')->with(['users'=>$users,'testimonials'=>$testimonials,
                            'tours'=>$tours,'blogs'=>$blogs]);
                    break;
            case 'de':
                    return view('website.de.index')->with(['users'=>$users,'testimonials'=>$testimonials,
                            'tours'=>$tours,'blogs'=>$blogs]);
                    break;
        }
    }
    
    

    public function create()
    {
        return view('admin.users.create');
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


    public function show($id)
    {
        //
    }

    public function admin1()
    {
        return view('admin.index');
    }
    public function edit($id)
    {
        $user = User::find($id);
        return view('admin.users.edit')->with('user', $user);
    }


    public function update(Request $request, $id)
    {
        $user = User::find($id);
        
        $user->fill($request->all());
        $user->save();
        flash('Se actualizó "'.$user->name.'" satisfactoriamente!', 'success')->important();
        return redirect()->route('users.index');
    
    }


    public function destroy($id)
    {
        $user = User::find($id);
        $user->delete();

        flash('El usuario "'.$user->name.'" a sido borrado de forma exitosa!', 'danger')->important();
        return redirect()->route('users.index');
    }
}
