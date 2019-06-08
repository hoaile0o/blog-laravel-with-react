<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Post;
use App\Http\Requests;
use Illuminate\Support\Facades\Session;
use Mail;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */

    public function show($id)
    {
        return view('home', ['posts' => Post::findOrFail($id)]);
    }

    public function mySearch(Request $request)
    {
        if ($request->has('search')) {
            $users = User::search($request->get('search'))->get();
        } else {
            $users = User::get();
        }
        return view('my-search', compact('users'));
    }

    public function postContact(Request $request)
    {
        $this->validate($request, [
            'email'   => 'required|email',
            'subject' => 'required|min:3',
            'message' => 'required|min:10'
        ]);

        $data = array(
            'email' => $request->get('email'),
            'subject' => $request->get('subject'),
            'bodyMessage' => $request->get('message')
        );

        Mail::send('email.contact',$data,function ($message) use ($data){
            $message->from($data['email']);
            $message->to('nguyentanhoai072@gmail.com');
            $message->subject($data['subject']);
        });

        Session::flash('email','Your Email was sent !');

        return redirect()->route('index');
    }
}
