<?php

namespace App\Http\Controllers;


use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Models\Ad;

class AdController extends Controller
{
    public function menu(){
        $ads = DB::table('ads')->paginate(4);
        return view('ad.menu')->with(['ads' => $ads]);
    }

    public function show(Ad $ad){
        return view('ad.show')->with(['ad' => $ad]);
    }

    public function brand($brand){
        $ads = DB::table('ads')->where('brand', $brand)->paginate(4);
        return view('ad.brand')->with(['ads' => $ads]);
    }

    public function type($type){
        $ads = DB::table('ads')->where('type', $type)->paginate(4);
        return view('ad.type')->with(['ads' => $ads]);
    }
}