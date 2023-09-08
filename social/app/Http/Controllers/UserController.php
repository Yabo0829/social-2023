<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Post;
use Auth;

class UserController extends Controller
{
    public function register()
    {
        return view('media.register');
    }
    public function login()
    {
        return view('media.login');
    }
    public function registerUser(Request $request)
    {
        
        $data = [

            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password
        ];
        $newUser = User::create($data);
        return redirect(route('social.login'));
    }
    public function loginUser(Request $request)
    {
        if(Auth::attempt([

            'email' => $request->email,
            'password' => $request->password
        ]
        ))
        {
            return redirect(route('social.index'));
        }
        return redirect()->back();

    }
    public function main()
    {
        $user_id = Auth::user()->id;
        $posts = Post::whereUserId($user_id)->get();

        return view('media.index', ['posts' => $posts], compact('user_id'));
     
    }
    public function logout()
    {
        Auth::logout();
        return redirect(route('social.login'));
    }

}
