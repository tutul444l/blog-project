<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use Illuminate\Support\Facades\Storage;

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
        // return $posts;
        return view('backend.category.index',compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.category.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if ($request->hasFile('category_image')) {

            $imageName = $request->category_image->getClientOriginalName();
            $request->category_image->storeAs('category', $imageName, 'public');

            Category::create([
                'name'  => $request->name,
                'category_image' =>$imageName,
            ]);
            return Redirect()->route('category.index');
        } else{
            Category::create([
                'name'  => $request->name,
            ]);
            return Redirect()->route('category.index');


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
        $category = Category::find($id);

        return view('backend.category.edit',compact('category'));
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

        if ($request->hasFile('category_image')) {

            $imageName = $request->category_image->getClientOriginalName();
            if($imageName != null){
                $category = Category::findOrFail($id);
                Storage::disk('public')->delete('category/' . $category->category_image);
                

            }
            $request->category_image->storeAs('category', $imageName, 'public');

            $category = Category::find($id)->update([
                'name'  => $request->name,
                'category_image' =>$imageName,
            ]);
            return Redirect()->route('category.index');
        } else{
            $category = Category::find($id)->update([
                'name'  => $request->name,
            ]);
            return Redirect()->route('category.index');


        }


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $category = Category::findOrFail($id);
        Storage::disk('public')->delete('category/' . $category->category_image);
        $category->delete();
         return redirect(route('category.index'));
    }
}
