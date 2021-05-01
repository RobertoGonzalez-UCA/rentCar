<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class UserAuthController extends Controller
{
    function login(){
        return view('auth.login');
    }
    function register(){
        return view('auth.register');
    }
    function create(Request $request){
        // Validate request
        $request->validate([
            'name'=>'required',
            'surname'=>'required',
            'rol'=>'required',
            'email'=>'required|email|unique:users',
            'birth_day'=>'required',
            'password'=>'required|min:5|max:12'
        ]);

        // If form validated succesfully, then register new user
        $user = new User;
        $user->name = $request->name;
        $user->surname = $request->surname;
        $user->rol = $request->rol;
        $user->email = $request->email;
        $user->birth_day = $request->birth_day;
        $user->password = Hash::make($request->password);

        $query = $user->save();

        if($query){
            return back()->with('success','You have been succesfully registered');
        }else{
            return back()->with('fail','Something went wrong'); 
        }
    }

    function check(Request $request){
        // Validate Requests
        $request->validate([
            'email'=>'required|email',
            'password'=>'required|min:5|max:12'
        ]);

        //If form validated succesfully, then proccess login
        $user = User::where('email','=', $request->email)->first();

        if($user){
            if(Hash::check($request->password, $user->password)){
                // If password match, then redirect user to menu
                $request->session()->put('LoggedUser',$user->id);
                return redirect('menu');
            }else{
                return back()->with('fail','Invalid');
            }
        }else{
            return back()->with('fail','No Account found for this email');
        }
    }
    
    function menu(){
        
        $user = User::where('id','=',session('LoggedUser'))->first();
        $data = [
            'LoggedUserInfo'=>$user
        ];
        return view('admin.menu',$data);
    }

    function logout(){
        if(session()->has('LoggedUser')){
            session()->pull('LoggedUser');
            return redirect('login');
        }
    }
}