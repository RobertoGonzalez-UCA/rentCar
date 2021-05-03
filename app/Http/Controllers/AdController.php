<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Models\Ad;

class AdController extends Controller
{
    public function menu(){
        $ads = DB::table('ads')->paginate(4);
        return view('menu')->with(['ads' => $ads]);
    }

    public function show(Ad $ad){
        return view('show')->with(['ad' => $ad]);
    }

    public function brand($brand){
        $ads = DB::table('ads')->where('brand', $brand)->paginate(4);
        return view('brand')->with(['ads' => $ads]);
    }

    public function type($type){
        $ads = DB::table('ads')->where('type', $type)->paginate(4);
        return view('type')->with(['ads' => $ads]);
    }
}