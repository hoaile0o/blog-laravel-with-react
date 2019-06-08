<?php

namespace App\Http\Controllers;

use App\comments;
use Illuminate\Http\Request;
use App\Post;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class DetailController extends Controller
{
    public function show($id)
    {
        return view('dashboard.detail', ['posts' => Post::findOrFail($id)]);
    }
}


