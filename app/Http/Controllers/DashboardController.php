<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class DashboardController extends Controller
{
    public function dashboard(){
        return view("/dashboard/main", [
            "post" => Post::all(),
        ]);
    }
    public function destroy(Post $post){

        Post::destroy($post->id);

        return redirect("/dashboard");

    }
}
