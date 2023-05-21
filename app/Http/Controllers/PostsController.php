<?php

namespace App\Http\Controllers;

use App\Models\Posts;
use Illuminate\Http\Request;
use App\Http\Resources\PostsResource;
use App\Http\Resources\PostDetailResource;

class PostsController extends Controller
{
    //
    public function index()
    {
        $posts = Posts::all();
        // return response()->json(['posts' => $posts], 200);
        return PostsResource::collection($posts); //collection digunakna untuk data array lebih dari 1
    }

    public function show($id)
    {
        $post = Posts::with('writer:id,email,username')->findOrFail($id);
        // return response()->json(['data' => $post], 200);
        return new PostDetailResource($post); // untuk data single
    }
}
