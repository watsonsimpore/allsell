<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Category;
use App\Models\Subcategory;
use Illuminate\Http\Request;
use App\Http\Resources\CategoryResource;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::all();
        return CategoryResource::collection($categories);
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
    public function store(Request $request)
    {
        if($request->category_id)
        {
            $category = new Subcategory();
            $category->name = $request->name;
            $category->slug = $request->slug;
            $category->category_id = $request->category_id;
            if ($category->save()) {
                return new CategoryResource($category);
            }
        }
        else
        {
            $category= new Category();
            $category->name = $request->name;
            $category->slug = $request->slug;

            $iconName = $category->slug.'.'.$request->icon->extension();
            $request->icon->storeAs('icons',$iconName);
            $category->icon = $iconName;
            $category->icon = asset('assets/images/icons/'.$category->icon);
            if ($category->save()) {
                return new CategoryResource($category);
            }
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $category = Category::findOrFail($id);
        return new CategoryResource($category);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $category_id,$scategory_id=null)
    {

        if($request->scategory_id)
        {
            $category = Subcategory::findOrFail($scategory_id);
            $category->name = $request->name;
            $category->slug = $request->slug;
            $category->category_id = $request->category_id;
            if ($category->save()) {
                return new CategoryResource($category);
            }
        }
        else
        {
            $category = Category::findOrFail($category_id);
            $category->name = $request->name;
            $category->slug = $request->slug;

            if($request->newicon)
            {
                unlink('assets/images/icons'.'/'.$category->icon);
                $iconName = $category->slug.'.'.$request->newicon->extension();
                $request->newicon->storeAs('icons',$iconName);
                $category->icon = $iconName;
                $category->icon = asset('assets/images/icons/'.$category->icon);
            }
            if ($category->save()) {
                return new CategoryResource($category);
            }
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroyCategory($id)
    {
        $category = Category::findOrFail($id);
        if ($category->delete()) {
            return new CategoryResource($category);
        }
    }



    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     * essayer de Supprimer Category et Subcategory sur le meme API
     */
    public function destroySubCategory($id)
    {
        $category = Subcategory::findOrFail($id);
        if ($category->delete()) {
            return new CategoryResource($category);
        }
    }
}
