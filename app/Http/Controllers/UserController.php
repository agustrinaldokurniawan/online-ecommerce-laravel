<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Auth;

class UserController extends Controller
{
    public function getSignup(){
        return view('user.signup');
    }

    public function postSignup(Request $request){
        $this->validate($request, [
            'name'=>'required|min:5',
            'email'=>'email|required|unique:users',
            'password'=>'required|min:8'
        ]);

        $user = new User([
            'name'=>$request->input('name'),
            'email'=>$request->input('email'),
            'password'=>bcrypt($request->input('password'))
        ]);

        $user->save();

        Auth::login($user);

        return redirect()->route('product.index');
    }

    public function getSignin(){
        if(Auth::check()){
            return redirect()->route('product.index');
        }
        return view('user.signin');
    }

    public function postSignin(Request $request){
        $this->validate($request, [
            'email'=>'email|required',
            'password'=>'required|min:8'
        ]);

        if(Auth::attempt([
            'email'=>$request->input('email'),
            'password'=>$request->input('password')
        ])){
            return redirect()->route('product.index');
        }
        return redirect()->back();
    }

    public function getProfile(){
        if(Auth::check()){
            return view('user.profile');
        }
        return redirect()->route('product.index');
    }

    public function getLogout(){
        if(Auth::check()){
            Auth::logout();
            return redirect()->route('product.index');
        }
        return redirect()->route('product.index');
    }
}
