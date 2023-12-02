<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        return view('home', [
            'articles' => Post::all()
        ]);
    }
    public function show($id_post){
        return view('article', [
            'article' => Post::find($id_post)
        ]);
    }
}
