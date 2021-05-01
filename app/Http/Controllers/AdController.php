<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class AdController extends Controller
{
    public function menu(){
        $ads = DB::table('ads')->paginate(4);
        return view('menu')->with(['ads' => $ads]);
    }
}