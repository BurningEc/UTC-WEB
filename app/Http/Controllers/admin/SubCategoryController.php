<?php

namespace App\Http\Controllers\admin;

use App\Category;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreSubCategoryPost;
use App\Http\Requests\UpdateSubCategoryPut;
use App\SubCategory;
use Illuminate\Http\Request;

class SubCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $subcategories = SubCategory::paginate(8);
        $categories = Category::where('status', 'activo')
        ->orderBy('name', 'ASC')
        ->pluck('name', 'id');

        return view('admin.subcategories.index',compact('subcategories','categories'));
    }

    public function getCategories()
    {
        $subcategories = SubCategory::paginate(8);

        return view('admin.subcategories.tableCategorie',compact('subcategories'))->render();
    }
    public function getApiCategories()
    {
        $subcategories = SubCategory::where('status','activo')->paginate(8);

        return response()->json(['subcategories'=>$subcategories],200);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreSubCategoryPost $request)
    {
        $validate = $request->validated();
        $subcategory = new SubCategory();
        $subcategory->name = $request->name;
        $subcategory->description = $request->description;
        $subcategory->status = $request->status;
        $subcategory->id_category = $request->id_category;
        $subcategory->save();
        return redirect()->route('get-subcategory');
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
        $subcategory = SubCategory::find($id);
        $subcategories = SubCategory::paginate(8);
        $categories = Category::where('status', 'activo')
        ->orderBy('name', 'ASC')
        ->pluck('name', 'id');


        return view('admin.subcategories.edit',compact('subcategory','subcategories','categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateSubCategoryPut $request, $id)
    {
        $validate = $request->validated();
        $subcategory = SubCategory::find($id);
        $subcategory->name = $request->name;
        $subcategory->description = $request->description;
        $subcategory->status = $request->status;
        $subcategory->save();
        return redirect()->route('get-subcategory');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $subcategory = SubCategory::find($id);

        $subcategory->delete();

        return redirect()->route('get-subcategory');
    }
    public function deactivate(Request $request)
    {
        $subcategory = SubCategory::find($request->id);
        if($subcategory->status =='inactivo'){
            $subcategory->status = 'activo';
        }else{
            $subcategory->status = 'inactivo';
        }
        $subcategory->save();
        $subcategories =SubCategory::all();
        return view('admin.subcategories.tableCategorie')->with('subcategories',$subcategories)->render();


    }
}
