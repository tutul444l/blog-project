<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $posts = Post::latest()->get();

        // return $posts;
        return view('index',compact('posts'));
    }


    public function profile(){


        return view('backend.user.profile.index');
    }

    public function updateProfile(Request $request)
    {

        $id = Auth::user()->id;
        if ($request->hasFile('img')) {

            $imageName = $request->img->getClientOriginalName();

            $request->img->storeAs('userprofile', $imageName, 'public');

            User::find($id)->update([
                'name'  => $request->name,
                'email' => $request->email,
                'img'   => $imageName,

            ]);
            return redirect()->back();

        } else{

            User::find($id)->update([
                'name'  => $request->name,
                'email' => $request->email,

            ]);
            return redirect()->back();

        }



    }
}

