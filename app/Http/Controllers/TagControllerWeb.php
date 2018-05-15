<?php

namespace App\Http\Controllers;
use App\Models\Tag;
use App\Models\Comment;
use App\Models\Organization;
use Illuminate\Http\Request;
use App\Models\CategoryTour;
use App\Models\EtapeGallery;

class TagControllerWeb extends Controller
{
    //
   
	public function getTags(Request $request)
    {
        $tags = Tag::all();
        $countTag = $request->count1;


        
        $cadena = "";
        for($i = 1; $i <= $countTag; $i++)
        {
            $string = "";
            for($j = 0; $j < count($tags); $j++)
            {
                
                $string = $string.'<div class="col-sm-2"><div class="checkbox"><label><input type="checkbox" name="etapeJournal'.$i.'[]" value="'.$tags[$j]->name.'">'.$tags[$j]->name.'</label></div></div>';
            }
            $cadena = $cadena.'<div class="form-group"><label class="control-label" >Day '.$i.':</label><br><div class="col-sm-12"><input type="text" placeholder="Write a tittle" class="form-control" name="nameJournal'.$i.'" id="nameJournal'.$i.'" required><textarea rows="6" class="form-control" placeholder="Write a description" name="description'.$i.'" required></textarea><input id="journalImage'.$i.'" type="file"  class="form-control" name="journalImage'.$i.'" accept="image/png,image/gif,image/jpeg" required><label class="control-label col-sm-2">Choose Tags</label><br>'.$string.'<input type="text" placeholder="Write a accommodation like Hotels, camping, etc." class="form-control" name="stay'.$i.'" id="stay'.$i.'" required><input type="text" placeholder="Write a transport like private car, bus, etc." class="form-control" name="transport'.$i.'" id="transport'.$i.'"required></div></div>';
        }
        return Response($cadena);   
    }
    public function getOrganization(Request $request)
    {
        $organizations = Organization::all();
        $countOrganization = $request->count1;
        $cadena = "";
        for($i = 1; $i <= $countOrganization; $i++)
        {
            
            $cadena = $cadena.'<div class="form-group"><label class="control-label" >Organization '.$i.':</label><br><div class="col-sm-12"><input type="text" placeholder="Write a tittle" class="form-control" name="nameOrganization'.$i.'" id="nameOrganization'.$i.'" required><textarea rows="6" class="form-control" placeholder="Write a description" name="description'.$i.'" required></textarea></div></div>';
        }
        return Response($cadena);
    }
    public function editEtape(Request $request)
    {
        $city = $request->city;
        $estado = $request->estado;
        $idGallery = $request->idGallery;
        $idEtapeGallery = EtapeGallery::where('id_tour_gallery',$idGallery)->where('nameEtape',$city)->value('id');
        if($estado == "inputCheck")
        {
            $etapeGallery = new EtapeGallery;
            $etapeGallery->nameEtape = $city;
            $etapeGallery->id_tour_gallery = $idGallery;
            $etapeGallery->save();
        }
        elseif ($estado == "outputCheck") {
             $etape = EtapeGallery::find($idEtapeGallery);
             $etape->delete();
        }

        return Response($city);
    }
    public function editMeasure(Request $request)
    {
        $measure = $request->measure;
        $estado = $request->estado;
        $idTour = $request->idTour;

        $idCategory = CategoryTour::where('id_tour',$idTour)->where('category',$measure)->value('id');
        if($estado == "inputCheck")
        {
            $etapeGallery = new CategoryTour;
            $etapeGallery->id_tour = $idTour;
            $etapeGallery->category = $measure;
            $etapeGallery->save();
        }
        elseif ($estado == "outputCheck") {
             $etape = CategoryTour::find($idCategory);
             $etape->delete();
        }

        return Response($measure);
    }
    public function sendComment(Request $request)
    {
        $com = new Comment();
        $com->nameUser = $request->nameUser;
        $com->email = $request->email;
        $com->question = $request->comment;
        $com->tour_id = $request->idTour;
        $com->save();
        flash('Message Sended', 'success')->important();
        return back();
    }
    
}
