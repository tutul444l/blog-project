<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Post;
use App\Models\Subcategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Image;

class PostController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $allpost=Post::all();
        return view('backend.post.index',compact('allpost'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $categories= Category::all();
        $subcategories= Subcategory::all();
        return view('backend.post.create',compact('categories','subcategories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([

            'title'            => 'required',
            'meta_title'       => 'required',
            'description'      => 'required',
            'meta_description' => 'required',

            'date'             => 'required',
            // 'image'            => 'required',
        ], [
            'title.required'            => 'please enter your title',
            'meta_title.required'       => 'Meta-title is required',
            'description.required'      => 'Description is required',
            'meta_description.required' => 'Meta-description is required',

            'date.required'             => ' Date is required',
            // 'image.required'            => 'Attach an image',

        ]);


        if ($request->hasFile('image')) {

            $imageName = $request->image->getClientOriginalName();
            $request->image->storeAs('post', $imageName, 'public');

            Post::create([
                'title'            => $request->title,
                'meta_title'       => $request->meta_title,
                'description'      => $request->description,
                'meta_description' => $request->meta_description,
                'category_id'      => $request->category_id,
                'category_name'      => $request->category_name,
                'subcategory_name'      => $request->subcategory_name,
                'sub_category_id'  => $request->sub_category_id,
                'date'             => $request->date,
                'image'            => $imageName,
            ]);
            return Redirect()->route('post.index')->with('success','post Inserted');

        } else{

            Post::create([
                'title'            => $request->title,
                'meta_title'       => $request->meta_title,
                'description'      => $request->description,
                'meta_description' => $request->meta_description,
                'category_id'      => $request->category_id,
                'category_name'      => $request->category_name,
                'subcategory_name'      => $request->subcategory_name,
                'sub_category_id'  => $request->sub_category_id,
                'date'             => $request->date,

            ]);
            return Redirect()->route('post.index')->with('success','post Inserted');

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
        $post = Post::find($id);
        $categories= Category::all();
        $subcategories= Subcategory::all();
        // return $id;
        return view('backend.post.edit',compact('post','categories','subcategories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request ,$id)
    {
        $request->validate([

            'title'            => 'required',
            'meta_title'       => 'required',
            'description'      => 'required',
            'meta_description' => 'required',
            'date'             => 'required',
            // 'image'            => 'required',
        ], [
            'title.required'            => 'please enter your title',
            'meta_title.required'       => 'Meta-title is required',
            'description.required'      => 'Description is required',
            'meta_description.required' => 'Meta-description is required',

            'date.required'             => ' Date is required',
            // 'image.required'            => 'Attach an image',

        ]);


        if ($request->hasFile('image')) {

            $imageName = $request->image->getClientOriginalName();
            // if($imageName != null){
            //     $post = Post::findOrFail($id);
            //     Storage::disk('public')->delete('post/' . $post->image);


            // }
            $request->image->storeAs('post', $imageName, 'public');

            $post = Post::find($id)->update([
                'title'            => $request->title,
                'meta_title'       => $request->meta_title,
                'description'      => $request->description,
                'meta_description' => $request->meta_description,
                'category_id'      => $request->category_id,
                'category_name'      => $request->category_name,
                'subcategory_name'      => $request->subcategory_name,
                'sub_category_id'  => $request->sub_category_id,
                'date'             => $request->date,
                'image'            => $imageName,
            ]);
            return Redirect()->route('post.index')->with('success','post Inserted');

        } else{

            $post = Post::find($id)->update([
                'title'            => $request->title,
                'meta_title'       => $request->meta_title,
                'description'      => $request->description,
                'meta_description' => $request->meta_description,
                'category_id'      => $request->category_id,
                'category_name'      => $request->category_name,
                'subcategory_name'      => $request->subcategory_name,
                'sub_category_id'  => $request->sub_category_id,
                'date'             => $request->date,

            ]);
            return Redirect()->route('post.index')->with('success','post Inserted');

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

            $post = Post::findOrFail($id);
            //  Storage::disk('public')->delete('post/' . $post->image);
             $post->delete();
            return redirect(route('post.index'));

    }

    public function category(){
        return $this->hasOne(Category::class,'name','category_name');
    }
    public function subcategory(){
        return $this->hasOne(Subcategory::class,'name','subcategory_name');
    }


}
