<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use App\Post;
use Auth;
use Validator;
use Image;
use Storage;
use Illuminate\Notifications\Notifiable;
use Session;
use App\Category;

class PostsController extends Controller
{

    use Notifiable;


    public function newPost()
    {
        $posts = Post::all();

        $users = User::all();

        $categories = Category::all();

        return view('user.post.newPost', compact('posts', 'users', 'categories'));
    }


    public function store(Request $request)
    {
        $this->validate($request, array(
            'title' => 'required|max:255',
            'contents' => 'required|max:10000',
            'description' => 'required',
            'picture' => 'image',
            'category_id' => 'required|integer',
        ));

        $posts = new Post();

        $posts->user_id = Auth::user()->id;
        $posts->title = $request->title;
        $posts->contents = $request->contents;
        $posts->description = $request->description;
        $posts->category_id = $request->category_id;
        $tag = explode(',', $request->post_tag);

        $posts->save();

        Session::flash('success', 'Your Post was successfully save !!!');


        if ($request->hasFile('picture')) {
            $picture = $request->file('picture');
            $filename = time() . '.' . $picture->getClientOriginalExtension();
            Image::make($picture)->resize(1200, 800)->save(public_path('images/upload/') . $filename);
            $posts->picture = $filename;
        }

        $posts->tag($tag);

        $posts->save();

        return redirect()->route('index', Auth::user()->id);
    }

    public function show($id)
    {
//        $this->authorize('view-post');

        $users = User::find($id);

        $posts = Post::where("user_id", "=", $id)->orderBy('created_at', 'DESC')->paginate(4);

        return view('user.profile', compact('posts', 'users'));


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

    public function update(Request $request, $id)
    {

        $this->validate($request, array(

            'title' => 'required|max:255',
            'contents' => 'required|max:10000',
            'description' => 'required',
            'picture' => 'image',
            'category_id' => 'required|integer'
        ));

        $posts = Post::find($id);

        $posts->title = $request->input('title');

        $posts->contents = $request->input('contents');

        $posts->description = $request->input('description');

        $posts->category_id = $request->category_id;

        $tag = explode(',', $request->post_tag);

        $posts->save();

        //add new image
        if ($request->hasFile('picture')) {

            $picture = $request->file('picture');
            $filename = time() . '.' . $picture->getClientOriginalExtension();
            Image::make($picture)->resize(800, 400)->save(public_path('images/upload/') . $filename);
            $oldFileName = $posts->picture;
            //update image
            $posts->picture = $filename;
            Storage::delete($oldFileName);
        }

        $posts->retag($tag);

        $posts->save();


        return redirect()->route('posts.show', Auth::user()->id);
    }


    public function paginate()
    {
        $posts = Post::orderBy('created_at', 'DESC')->paginate(4);

        $category = Category::all();

        return view('dashboard.index', compact('posts', 'category'));
    }

    public function destroy($id)
    {
        $posts = Post::findOrFail($id);

        $posts->delete();

        $user_id = Auth::user()->id;

        Session::flash('delete', 'Your Post was successfully delete !!!');

        return redirect()->route('posts.show', $user_id);
    }
}

