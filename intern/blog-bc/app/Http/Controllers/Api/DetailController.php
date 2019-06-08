<?php

namespace App\Http\Controllers\Api;

use App\Post;
use App\Http\Requests;
use App\Http\Controllers\Controller;
class DetailController extends Controller
{

    public function index($id)
    {
        $posts = Post::findOrFail($id);
        return response()->json($posts);
    }
}


