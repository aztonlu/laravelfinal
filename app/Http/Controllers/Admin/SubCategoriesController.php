<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\SubCategoriesRequest;
use App\Models\SubCategory;
use App\Models\Category;

class SubCategoriesController extends Controller
{

    public function index()
    {
        /************
         * Ordemanos
         ************/
        $subcategories = SubCategory::orderBy('id', 'ASC')->paginate();
        /**********************************************
         * Traemos los datos de las tablas relacionadas
         **********************************************/
        $subcategories->each(function ($subcategories){
            $subcategories->categories;
        });
        /*********************
         * Mostramos la vista
         *********************/
        return view('admin.subcategories.index')->with('subcategories', $subcategories);
    }

    public function create()
    {
        $category = Category::orderBy('name', 'ASC')->pluck('name', 'id');
        return view('admin.subcategories.create', compact('category', $category));
    }

    public function store(SubCategoriesRequest $request)
    {
        $subcategory = new SubCategory($request->all());
        $subcategory->save();
        flash('Se insertó sub-categoría "'.$subcategory->name.'" satisfactoriamente', 'success')->important();
        return redirect()->route('subcategories.index');
    }


    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $subcategory = SubCategory::find($id);
        $subcategory->Category;
        $categories = Category::orderBy('name', 'ASC')->pluck('name', 'id');
        return view('admin.subcategories.edit',
                    compact(
                        ['subcategory', $subcategory],
                        ['categories', $categories]
                    )
        );
    }

    public function update(Request $request, $id)
    {
        $subcategory = SubCategory::find($id);
        $subcategory->fill($request->all());
        $subcategory->save();
        flash('Se actualizó "'.$subcategory->name.'" satisfactoriamente!', 'success')->important();
        return redirect()->route('subcategories.index');
    }

    public function destroy($id)
    {
        $subcategory = SubCategory::find($id);
        $subcategory->delete();

        flash('Se borró la categoria "'.$subcategory->name.'" de forma exitosa!', 'danger')->important();
        return redirect()->route('subcategories.index');
    }
}
