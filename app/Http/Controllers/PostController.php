<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Str;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view("/page/index", [

            "posts" => Post::all()

        ]);
    }
    public function home()
    {
        return view("/page/home", [
           "post" =>  Post::where('user_id', auth()->user()->id)->get(),
        ] 
           
    );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("/post/create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function addPost(Request $request)
    {
        $createPost = $request->validate([
            'judul' => 'required',
            'deskripsi' => 'required'
          
        ]);
        $createPost['user_id'] = auth()->user()->id;
        $createPost['user_name'] = auth()->user()->name;

        Post::create($createPost);

        return redirect('/home')->with('succes', 'new post has been added!');
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
    public function edit(Post $post)
    {
        return view("/post/update", [
            "post" => $post,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function editPost(Request $request,Post $post)
    {
        $rules = [
            'judul' => 'required',
            'deskripsi' => 'required',
            
          
        ];
       
        $validatedData = $request->validate($rules);
        $validatedData['user_id'] = auth()->user()->id;
        $validatedData['user_name'] = auth()->user()->name;

        Post::where('id', $post->id)->update($validatedData);

        return redirect('/home');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete(Post $post)
    {
        Post::destroy($post->id);

        return redirect('/home');
    }
}
