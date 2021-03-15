<?php

namespace App\Http\Controllers;
use App\Models\Post;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index(){
        $posts = Post::all();

        return view('blog.index') -> with(['posts' => $posts]);
    }

    public function store(Request $request) {
        Post::create([
            'title'=> $request->title,
            'body'=> $request->body
        ]);

        return back();
    }

    public function get_post($id) {
        $post = Post::find($id);

        if($post == null)
            return response(['message' => 'post not found', 404]); 

        return view('post.detail')->with(['post' => $post]); 
    }
}
