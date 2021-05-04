<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Http\Controllers\AdController;
use App\Models\Ad;

class RentController extends Controller
{
    public function create(Ad $ad, Request $request) {

        $request->validate([
            'date'=>'required',
            'date_expire'=>'required'
        ]);

        $date = $request->input('date');
        $date_expire = $request->input('date_expire');
        DB::insert("INSERT INTO `rents`(`date`, `date_expire`, `bail`, `uid`, `adid`) VALUES ($date, $date_expire, $ad->bail, '4' ,$ad-adid)");
        echo "Todo se ha realizado correctamente!.<br/>";
        echo '<a href = "/menu">Volver</a>';
     }
}