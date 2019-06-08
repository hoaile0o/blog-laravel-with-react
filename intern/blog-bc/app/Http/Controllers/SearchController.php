<?php

namespace App\Http\Controllers;

use App\Post;


use Illuminate\Http\Request;
use App\Category;

class SearchController extends Controller

{
    public function index(Request $request)

    {
        if ($request->search == "") {
            $posts = Post::orderBy('created_at', 'DESC')->paginate(4);
            return view('dashboard.search', compact('posts'));
        } else {
//           $tags = Tag::where('name','LIKE','%'.$request->search.'%')->orderBy('created_at', 'DESC')->paginate(4);

            //seach by posts
            $posts = Post::where('user_id', 'LIKE', '%' . $request->search . '%')->orWhere('title', 'LIKE', '%' . $request->search . '%')->orWhere('description', 'LIKE', '%' . $request->search . '%')
                ->orderBy('created_at', 'DESC')->paginate(4);
            $posts->appends($request->only('search'));


            // search by category name
            $category = Category::where('name', 'LIKE', '%' . $request->search . '%')->orderBy('created_at', 'DESC')->paginate(4);


            //$posts = Category::find($category->id)->posts;
            return (view('dashboard.search', compact('posts', 'category')));
        }
    }


}

