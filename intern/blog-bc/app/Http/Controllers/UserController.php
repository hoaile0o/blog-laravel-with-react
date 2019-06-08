<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Http\Requests;
use Image;


class UserController extends Controller
{
    public function update_avatar(Request $request)
    {
        if($request->hasFile('avatar')){
            $avatar=$request->file('avatar');
            $filename= time() . '.' . $avatar->getClientOriginalExtension();
            Image::make($avatar)->resize(250,250)->save(public_path('images/upload/') . $filename);
            $users = Auth::user();
            $users->avatar = $filename;
            $users->save();
        }
        return redirect()->route('posts.show',Auth::user()->id);
    }


}
