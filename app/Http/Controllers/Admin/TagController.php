<?php

namespace App\Http\Controllers\Admin;
use App\Models\Tag;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\TagRequest;

class TagController extends Controller
{
	public function __construct()
    {
        $this->middleware('auth');
    }
    //
    public function index()
    {
    	$tags = Tag::orderBy('id', 'ASC')->paginate();
        return view('admin.tags.index')->with('tags', $tags);
    }
    public function edit($id)
    {
    	$tag = Tag::find($id);
        return view('admin.tags.edit')->with('tag', $tag);
    }
    public function show($id)
    {
        //
        
    }
    public function update(Request $request, $id)
    {
        $tag = Tag::find($id);
        
        $tag->fill($request->all());
        $tag->save();
        flash('The row "'.$tag->name.'" was updated!', 'success')->important();
        return redirect()->route('tags.index');
        

    }
    public function create()
    {
    	return view('admin.tags.create');
    }
    public function store(TagRequest $request)
    {
    	$tag = new Tag;
    	$tag->name = $request->name;
    	$tag->latitude = $request->latitud;
    	$tag->longitude = $request->longitud;
    	$tag->save();
    	flash('The row "'.$tag->name.'" was saved', 'success')->important();
        return redirect()->route('tags.index');
    }
    public function destroy($id)
    {
    	$tag = Tag::find($id);
        $tag->delete();

        flash('The row "'.$tag->name.'" was deleted!', 'danger')->important();
        return redirect()->route('tags.index');
    }
}
