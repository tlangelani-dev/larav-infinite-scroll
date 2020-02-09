<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class PostsController extends Controller
{
    public function index()
    {
        $data = Post::orderBy('id')->paginate();
        return response()->json($data);
    }
}
