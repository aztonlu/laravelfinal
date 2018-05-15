<?php

namespace App\Http\Controllers;
use App\Models\Tour;
use App\Models\ImageTour;
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
        return view($url)->with('tours', $tours)->with('count',$count)->with('categories',$categories)->with('language',$language)->with('tour_category',$categoryTour);;
    }
    public function indexCategory($language,$tour_category)
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
        //$tours = Tour::orderBy('id', 'ASC')->where('language',$language)->where('category',$categoryTour)->paginate(8);
        $tours = DB::table('tours')
            ->join('category_tours', 'tours.id', '=', 'category_tours.id_tour')
            ->where('category_tours.category',$tour_category)
            ->where('language',$language)
            ->select('tours.*')
            ->get();
        $count = count($tours);
        $categories = Category::get();
        return view($url)->with('tours', $tours)->with('count',$count)->with('categories',$categories)->with('language',$language)->with('tour_category',$tour_category);
        

    }
    public function tourshow($language,$id)
    {
        //
        $url = 'website.' . $language . '.tours.decouverte.tresors-du-sud-perou';
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
        $tour = Tour::where('id',$id)->get();
        $galleries = TourGallery::where('tour_id',$id)->pluck('id');
        $gallery = TourGallery::where('tour_id',$id)->get();
        $organization = Organization::where('tour_id',$id)->get();

        $etapes = EtapeGallery::whereIn('id_tour_gallery',$galleries)->get();
        $etapesforMap = EtapeGallery::whereIn('id_tour_gallery',$galleries)->distinct()->get(['nameEtape']);
        $tag = Tag::whereIn('name',$etapesforMap)->get();
        $imageTour = ImageTour::where('tour_id',$id)->get();
        






        
        return view($url)->with('galleries', $gallery)->with('tours',$tour)->with('organizations',$organization)->with('etapes',$etapes)->with('etapesforMap',$tag)->with('images',$imageTour);
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
