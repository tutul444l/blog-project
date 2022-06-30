<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Subcategory;
use Illuminate\Support\Facades\Storage;

class SubcategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $subcategories = Subcategory::all();
        // return $posts;
        return view('backend.subcategory.index',compact('subcategories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $subcategories = Subcategory::all();
        return view('backend.subcategory.create',compact('subcategories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if ($request->hasFile('subcategory_image')) {

            $imageName = $request->subcategory_image->getClientOriginalName();
            $request->subcategory_image->storeAs('subcategory', $imageName, 'public');

            Subcategory::create([
                'name'  => $request->name,
                'subcategory_image' =>$imageName,
            ]);
            return Redirect()->route('subcategory.index');
        } else{
            Subcategory::create([
                'name'  => $request->name,
            ]);
            return Redirect()->route('subcategory.index');


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
        $subcategory = Subcategory::find($id);

        return view('backend.subcategory.edit',compact('subcategory'));
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

            $imageName = $request->subcategory_image->getClientOriginalName();
            if($imageName != null){
                $subcategory = Subcategory::findOrFail($id);
                Storage::disk('public')->delete('subcategory/' . $subcategory->subcategory_image);


            }
            $request->subcategory_image->storeAs('subcategory', $imageName, 'public');

            $subcategory = Subcategory::find($id)->update([
                'name'  => $request->name,
                'subcategory_image' =>$imageName,
            ]);
            return Redirect()->route('subcategory.index');
        } else{
            $subcategory = Subcategory::find($id)->update([
                'name'  => $request->name,
            ]);
            return Redirect()->route('subcategory.index');


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
        $subcategory = Subcategory::findOrFail($id);
        Storage::disk('public')->delete('subcategory/' . $subcategory->subcategory_image);
        $subcategory->delete();
         return redirect(route('subcategory.index'));
    }
}
