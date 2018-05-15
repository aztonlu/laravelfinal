<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\ToursRequest;
use App\Http\Requests\TourGalleriesRequest;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Tour;
use App\Models\ImageTour;
use App\Models\Category;
use App\Models\EtapeGallery;
use App\Models\Tag;
use App\Models\TourGallery;
use App\Models\Organization;
use App\Models\Country;
use App\Models\SubCategory;
use App\Models\CategoryTour;
use Illuminate\Support\Facades\Auth;
use Image;
use DB;
use Illuminate\Support\Facades\Redirect;


class ToursController extends Controller
{
    public function __construct()
    {
      $this->middleware('auth');
    }
    public function index()
    {
        /************
          Ordemanos
         ************/
        $tours = Tour::orderBy('id', 'ASC')->paginate();
        /**********************************************
         * Traemos los datos de las tablas relacionadas
         **********************************************/
        /*$tours->each(function ($tours){
            $tours->subcategories;
            $tours->countries;
        });*/
        /********************
          Mostramos la vista
         ********************/
        return view('admin.tours.index')->with('tours', $tours);
          
    }

    public function create()
    {
        $categories = Category::get();
        /*$countries = Country::orderBy('id', 'ASC')->pluck('name', 'id');
        return view('admin.tours.create', compact(['subcategories', $subcategories], ['countries', $countries]));*/
        return view('admin.tours.create')->with('categories',$categories);
    }
    public function saveJournal(TourGalleriesRequest $request)
    {
        
        $nameJournal = $request->input('nameJournal');
        $description = $request->input('description');
        
        $journalImage = $request->file('journalImage');

        $stay = $request->input('stay');
        $transport = $request->input('transport');

        /********************
          Guardamos las imagenes
         ********************/
        $randomJournal = str_random(15);
        $nombreJournal = trim('tours/'.$randomJournal.".png");
        //original
        //$image = Image::make($journalImage->getRealPath())->resize(262, 287);
//nuevo
        $image = Image::make($journalImage->getRealPath())->resize(1280, 900);
        $image->save($nombreJournal);
        chmod($nombreJournal, 777);

        $gallery = new TourGallery;
        $gallery->name = $nameJournal;
        $gallery->description = $description;
        $gallery->stay = $stay;
        $gallery->transport = $transport;
        $gallery->routeImage = $nombreJournal;
        $gallery->tour_id = $request->idTour;
        $gallery->save();

        $id_tour_gallery = TourGallery::latest()->value('id');
        
        $etapeInto = $request->input('etapeJournal');
        
        for($y=0; $y < count($etapeInto); $y++)
        {
           
            $etapeGallery = new EtapeGallery;
            $etapeGallery->nameEtape = $etapeInto[$y];
            $etapeGallery->id_tour_gallery = $id_tour_gallery;
            $etapeGallery->save();
            
        }
        
        $tags = Tag::all();
        $tour = Tour::where('id',$request->idTour)->get();
        flash('Journal inserted', 'success')->important();
        return view('admin.tours.createJournal')->with('tour', $tour)->with('tags',$tags);
        
    }
    public function saveOrganizationRow(Request $request)
    {
            $nameJournal = $request->input('nameOrganization');
            $description = $request->input('description');
            $organization = new Organization;
            $organization->name = $nameJournal;
            $organization->description = $description;
            $organization->tour_id = $request->idTour;
            $organization->save();

            $tour = Tour::where('id',$request->idTour)->get();
            flash('Journal inserted', 'success')->important();
            return view('admin.tours.createOrganization')->with('tour', $tour);
    }
    public function saveOrganization($id)
    {
        $tour = Tour::where('id',$id)->get();

        return view('admin.tours.createOrganization')->with('tour', $tour);
        
    }
    public function saveJournalview($id)
    {
        $tour = Tour::where('id',$id)->get();
        $tags = Tag::all();
        return view('admin.tours.createJournal')->with('tour', $tour)->with('tags',$tags);
        
    }
    public function saveImageTour(Request $request)
    {
        $journalImage = $request->file('journalImage');
        $randomJournal = str_random(15);
        $nombreJournal = trim('tours/'.$randomJournal.".png");
        $image = Image::make($journalImage->getRealPath())->resize(1280, 900);
        $image->save($nombreJournal);
        chmod($nombreJournal, 777);

        $imageTour = new ImageTour;
        $imageTour->routeImage = $nombreJournal;
        $imageTour->tour_id = $request->idTour;
        $imageTour->save();

        $tour = Tour::where('id',$request->idTour)->get();
        return view('admin.tours.createImages')->with('tour', $tour);
    }
    public function store(ToursRequest $request)
    {
        /**************************
         * Manipulacion de imagenes
         **************************/
        $file = $request->file('coverpage');
        if($file != ""){
            $random = str_random(15);
            $nombre = trim('tours/'.$random.".png");
            $image = Image::make($file->getRealPath())->resize(1280, 900);
            $image->save($nombre);
            chmod($nombre, 777);
            /* depende al SO
            $salida = shell_exec("/home/luis-ernesto/pngquant.git/pngquant ".$nombre);
            $cadena = "";       
            $cadena = substr($nombre, 0, 27);
            $cadena = $cadena."-fs8.png";
                       chmod($cadena, 775);
            unlink($nombre);*/

        }
        else {
            $nombre = "img/files/trek-de-la-vallee-de-lares.jpg";
            echo "vacio";
        }
        $tour = new Tour($request->all());
        $tour->coverpage = $nombre;
        $tour->user_id = Auth::user()->id;
        $tour->language = $request->language;
        $tour->author = Auth::user()->email;
        $tour->category = $request->categories;
        $tour->difficulty = $request->difficulty;
        $tour->save();


        $idTour = Tour::latest()->value('id');
        $tour = Tour::where('id',$idTour)->get();

        $etapeInto = $request->input('measures');
        
        for($y=0; $y < count($etapeInto); $y++)
        {
            $categoryTour = new CategoryTour;
            $categoryTour->id_tour = $idTour;
            $categoryTour->category = $etapeInto[$y];
            $categoryTour->save();
            
            
        }
        flash('Tour inserted', 'success')->important();
        return view('admin.tours.createImages')->with('tour', $tour);


    }

    public function show($id)
    {
        //
        
    }

    public function edit($id)
    {
        //
        $categories = Category::get();
        $tour = Tour::where('id',$id)->get();
        $gallery = TourGallery::where('tour_id',$id)->paginate(5);
        $organization = Organization::where('tour_id',$id)->get();
        $imageTour = ImageTour::where('tour_id',$id)->get();
        
        $categoryTour = CategoryTour::where('id_tour',$id)->pluck('category');
        $tags = DB::table('category_tour_values')->whereNotIn('category_tour_values.name', $categoryTour)->pluck('name');

        return view('admin.tours.edit')->with('tours', $tour)->with('galleries',$gallery)->with('organizations',$organization)->with('categories',$categories)->with('images',$imageTour)->with('category_tours',$categoryTour)->with('tags',$tags);
    }
    public function saveImagesTour($id)
    {
        $tour = Tour::where('id',$id)->get();

        return view('admin.tours.createImages')->with('tour', $tour);
        
    }
    public function editGallery($id)
    {
        $gallery = TourGallery::where('id',$id)->get();
        $idgallery = TourGallery::where('id',$id)->value('id');
        $etapes = DB::table('etape_galleries')->where('id_tour_gallery',$idgallery)->pluck('nameEtape');
        $tags = DB::table('tags')->whereNotIn('tags.name', $etapes)->pluck('name');
        
        return view('admin.tours.editGallery')->with('galleries',$gallery)->with('etapes',$etapes)->with('tags',$tags);
        
    }
    public function editOrganization($id)
    {
        $organization = Organization::where('id',$id)->get();
        return view('admin.tours.editOrganization')->with('organizations',$organization);
    }
    public function destroyGallery($id,$tour_id)
    {
        $image = TourGallery::where('id',$id)->value('routeImage');
        unlink($image);

    
        $user = TourGallery::where('id',$id)->first();
        $user->delete();
        return Redirect::route('tours.edit', ['id' => $tour_id]);

    }
    public function destroyImageTour($id, $tour_id)
    {
        $image = ImageTour::where('id',$id)->value('routeImage');
        unlink($image);

        $user = ImageTour::where('id',$id)->first();
        $user->delete();
        return Redirect::route('tours.edit', ['id' => $tour_id]);
        
    }
    public function destroyOrganization($id,$tour_id)
    {
        $user = Organization::where('id',$id)->first();
        $user->delete();
        return Redirect::route('tours.edit', ['id' => $tour_id]);
    }
    public function update(Request $request)
    {
        $idTour = $request->idTour;
        $coverpage = $request->File('coverpage');
        if(!is_null($coverpage))
        {
            $routeImage = Tour::where('id',$idTour)->value('coverpage');
            unlink($routeImage);
            $nombre = trim($routeImage);
            $image = Image::make($coverpage->getRealPath())->resize(825, 619);
            $image->save($nombre);
            chmod($nombre, 777);

        }
        DB::table('tours')->where('id', $idTour)->update(['title' => $request->title,'summary' => $request->summary,'language' => $request->language,'category' => $request->categories,'difficulty' => $request->difficulty,'code' => $request->code,'price' => $request->price,'days' => $request->days,'peoples' => $request->peoples,'offer' => $request->offer]);
        flash('updated successfully', 'success')->important();
        return redirect()->route('tours.index');
    }
    public function updateGallery(Request $request)
    {
        $idgallery = $request->idGallery;
        $file = $request->file('journalImage');
        if(!is_null($file))
        {
            $imagexBorrar = TourGallery::where('id',$idgallery)->value('routeImage');
            //unlink($imagexBorrar);

            
            $nombreJournal = trim($imagexBorrar);
            $image = Image::make($file->getRealPath())->resize(825, 619);
            $image->save($nombreJournal);
            chmod($nombreJournal, 777);
            
            DB::table('tourgalleries')->where('id', $idgallery)->update(['name' => $request->name,'description' => $request->description,'stay' => $request->stay,'transport' => $request->transport]);
        }
        else{
            DB::table('tourgalleries')->where('id', $idgallery)->update(['name' => $request->name,'description' => $request->description,'stay' => $request->stay]);
        }
        flash('updated successfully', 'success')->important();
        return Redirect::route('tours.edit', ['id' => $request->idTour]);
    }
    public function updateOrganization(Request $request)
    {
        DB::table('organizations')->where('id', $request->idOrganization)->update(['name' => $request->name,'description' => $request->description]);
        flash('updated successfully', 'success')->important();
        return Redirect::route('tours.edit', ['id' => $request->idTour]);
    }
    public function destroy($id)
    {
        //
        //$orga = Organization::where('tour_id',$id)->first();
        //$orga->delete();
        $collection1 = Organization::where('tour_id', $id)->get(['id']);
        Organization::destroy($collection1->toArray());

    
        $collection = TourGallery::where('tour_id', $id)->get(['id']);
        TourGallery::destroy($collection->toArray());

        $user = Tour::find($id);
        $user->delete();

        flash('El tour  a sido borrado de forma exitosa!', 'danger')->important();
        return redirect()->route('tours.index');
    }

    
}
