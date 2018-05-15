<?php

namespace App\Http\Controllers\Admin;


use Illuminate\Http\Request;
use App\Models\Article;
use App\Models\Blog;
use App\Models\User;
use Image;
use App\Http\Requests\UsersRequest;
use App\Http\Requests\TestimonialssRequest;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;    
class ArticlesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $articles = Article::orderBy('id', 'ASC')->paginate(); 
        $blogs = Blog::get();
        $users = User::get();
        return view('admin.articles.index')->with(['articles'=>$articles,'blogs'=>$blogs,'users'=>$users]);
    }
        

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $blogs = Blog::get();
        return view('admin.articles.create')->with('blogs',$blogs);
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
            $nombre = trim('articles/'.$random.".png");
            $image = Image::make($file->getRealPath())->resize(262, 287);
            $image->save($nombre);
            chmod($nombre, 775);
            //depende al SO
            //$salida = shell_exec("/home/luis-ernesto/pngquant.git/pngquant ".$nombre);
            $salida = shell_exec("./pngquant/pngquant ".$nombre);
            $cadena = "";       
            $cadena = substr($nombre, 0, 24);
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
        
      
        $article = new Article($request->all());
        $article->user_id = $users->id;
        $article->image = $cadena;
        $article->save();
        flash('Se registró a "'.$article->title.'" satisfactoriamente', 'success')->important();
        return redirect()->route('articles.index');
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
        $article = Article::find($id);
        $blogs = Blog::get();
        return view('admin.articles.edit')->with(['article'=>$article,'blogs'=>$blogs]);
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
        $article = Article::find($id);
        $file = $request->file('photo');
        $flag = $request->flag;
        
        if($file != "" && $flag=='false'){
            
          $random = str_random(15);
            $nombre = trim('articles/'.$random.".png");
            $image = Image::make($file->getRealPath())->resize(262, 287);
            $image->save($nombre);
            chmod($nombre, 775);
            //depende al SO
            //$salida = shell_exec("/home/luis-ernesto/pngquant.git/pngquant ".$nombre);
            $salida = shell_exec("./pngquant/pngquant ".$nombre);
            $cadena = "";       
            $cadena = substr($nombre, 0, 24);
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
        $article->fill($request->all());
        $article->image = $cadena;
        $article->save();
        flash('Se actualizó "'.$article->title.'" satisfactoriamente!', 'success')->important();
        return redirect()->route('articles.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
        $article = Article::find($id);
        $article->delete();

        flash('El articulo "'.$article->title.'" a sido borrado de forma exitosa!', 'danger')->important();
        return redirect()->route('articles.index');
    }
}