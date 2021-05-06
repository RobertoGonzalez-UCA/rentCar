<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\User;

class AdminController extends Controller
{
    public function menu(){

        $current_user = User::where('id','=',session('LoggedUser'))->first();
        $user_rol = DB::table('users')->select('rol')->where('id', '=', $current_user->id)->get()->toArray();

        if($user_rol[0]->rol != 'admin'){
            return view('admin.notpermited');
        }
        
        $ads = DB::table('ads')->paginate(4);
        
        $isAdminMenu = true;
        
        return view('admin.menu')->with(['isAdminMenu' => $isAdminMenu,'ads' => $ads]);
    }
}
