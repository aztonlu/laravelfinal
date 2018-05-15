<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\CategoriesRequest;
use App\Models\Category;

class CategoriesController extends Controller
{

    public function index()
    {
        $categories = Category::orderBy('id', 'ASC')->paginate();
        return view('admin.categories.index')->with('categories', $categories);

    }

    public function create()
    {
        return view('admin.categories.create');
    }

    public function store(CategoriesRequest $request)
    {
        $category = new Category($request->all());
        $category->save();
        flash('Se insertó categoría "'.$category->name.'" satisfactoriamente', 'success')->important();
        return redirect()->route('categories.index');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $category = Category::find($id);
        return view('admin.categories.edit')->with('category', $category);
    }

    public function update(Request $request, $id)
    {
        $category = Category::find($id);
        $category->fill($request->all());
        $category->save();
        flash('Se actualizó "'.$category->name.'" satisfactoriamente!', 'success')->important();
        return redirect()->route('categories.index');
    }

    public function destroy($id)
    {
        $category = Category::find($id);
        $category->delete();

        flash('Se borró la categoría "'.$category->name.'" de forma exitosa!', 'danger')->important();
        return redirect()->route('categories.index');
    }
}
