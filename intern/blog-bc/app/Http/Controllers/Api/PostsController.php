<?php

namespace App\Http\Controllers\Api;

use App\Post;
use Illuminate\Http\Request;
use Illuminate\Notifications\Notifiable;
use App\Category;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;

class PostsController extends Controller
{

    use Notifiable;

    public function index()
    {
        $posts = Post::all();
        return response()->json($posts);
    }

    public function store(Request $request)
    {
        $post = new Post();
        $data = json_decode($request->getContent(), true);
        foreach ($data['post'] as $value) {

            $post->user_id = $value['user_id'];
            $post->title = $value['title'];
            $post->description = $value['description'];
            $post->picture = $value['picture'];
            $post->contents = $value['contents'];

        }
        $post->save();

        return Response()->json(array(
            'error' => false,
            'post' => $post->toArray()),
            200
        );
    }

    public function show($id)
    {

        $post = Post::where('id', $id)
            ->take(1)
            ->get();

        return Response()->json(array(
            'status' => 'success',
            'post' => $post->toArray()),
            200
        );
    }

    public function edit($id)
    {
        $posts = Post::find($id);

        $categories = Category::all();

        $cats = array();

        foreach ($categories as $category) {

            $cats[$category->id] = $category->name;
        }

        return view('user.post.edit')->withPosts($posts)->withCategories($cats);
    }

    public function update($id)
    {

        $input = Input::all();

        $post = Post::find($id);

        if ($input['title']) {
            $post->title = $input['title'];
        }
        if ($input['contents']) {
            $post->contents = $input['contents'];
        }
        if ($input['description']) {
            $post->description = $input['description'];
        }
        if ($input['picture']) {
            $post->picture = $input['picture'];
        }

        $post->save();

        return Response()->json(array(
            'error' => false,
            'message' => 'Post Updated'),
            200
        );
    }


    public function destroy($id)
    {
        $post = Post::find($id);

        $post->delete();

        return Response()->json(array(
            'error' => false,
            'message' => 'Post Deleted'),
            200
        );
    }


}

