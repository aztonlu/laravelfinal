<?php

namespace App\Http\Controllers;
use App\Models\Tour;
use App\Models\Organization;
use App\Models\TourGallery;
use App\Models\Tag;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use DB;
use App\Models\EtapeGallery;
use App\Models\Category;

class TourControllerWeb extends Controller
{
    //
    public function index($language,$category,$categoryTour)
    {
        $url = 'website.' . $language . '.tours.decouverte.decouverte';
        switch($language)
        {
            case 'fr':
                $language = 'french';
                break;
            case 'it':
                $language = 'italian';
                break;
            case 'es':
                $language = 'spanish';
                break;
            case 'en':
                $language = 'english';
                break;
            case 'de':
                $language = 'german';
                break;
        }
    	/************
          Llamamos a todos los tours y los mandaremos de 7 en 7
         ************/
        $tours = Tour::orderBy('id', 'ASC')->where('language',$language)->where('category',$categoryTour)->paginate(8);
        $count = count($tours);
        $categories = Category::get();

        //var_dump($tours);
        
        /********************
          Mostramos la vista con los tours y el total de tours para mostrar en la vista
         ********************/
        return view($url)->with('tours', $tours)->with('count',$count)->with('categories',$categories)->with('language',$language);
    }
    public function tourshow($id)
    {
        //
        
        $tour = Tour::where('id',$id)->get();
        $galleries = TourGallery::where('tour_id',$id)->pluck('id');
        $gallery = TourGallery::where('tour_id',$id)->get();
        $organization = Organization::where('tour_id',$id)->get();
        //aqui aumento
        $carruselprueba = TourGallery::where('tour_id',$id)->get();
        //aquitermina
        $etapes = EtapeGallery::whereIn('id_tour_gallery',$galleries)->get();
        $etapesforMap = EtapeGallery::whereIn('id_tour_gallery',$galleries)->distinct()->get(['nameEtape']);
        $tag = Tag::whereIn('name',$etapesforMap)->get();
        
        return view('website.fr.tours.decouverte.tresors-du-sud-perou')->with('galleries', $gallery)->with('tours',$tour)->with('organizations',$organization)->with('etapes',$etapes)->with('etapesforMap',$tag);
    }
    public function filterTours(Request $request)
    {
        $category = $request->category;
        $difficult = $request->difficult;
        $minA = $request->minA;
        $maxA = $request->maxA;

        if($category == "none")
        {
            $tour = Tour::where('difficulty',$difficult)->where('language',$request->language)->whereBetween('price',[$minA,$maxA])->get();
        }
        if($difficult == "none")
        {
            $tour = Tour::where('category',$category)->where('language',$request->language)->whereBetween('price',[$minA,$maxA])->get();
        }
        if($category == "none" && $difficult == "none")
        {
            $tour = Tour::whereBetween('price',[$minA,$maxA])->where('language',$request->language)->get();
        }
        else
        {
            $tour = Tour::where('difficulty',$difficult)->where('category',$category)->where('language',$request->language)->whereBetween('price',[$minA,$maxA])->get();
        }
        $count = count($tour);
        return view('website.fr.tours.decouverte.decouverte')->with('tours', $tour)->with('count',$count)->with('language',$request->language);
    }
}
