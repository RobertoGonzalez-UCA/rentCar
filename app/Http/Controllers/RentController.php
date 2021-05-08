<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use App\Models\Rent;
use App\Models\User;
use App\Http\Requests\NewRentRequest;
use App\Http\Requests\UpdateRentRequest;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class RentController extends Controller
{
    public function list()
    {
        $current_user = User::where('id','=',session('LoggedUser'))->first();
        $rents = DB::table('rents')->where('uid', $current_user->id)->paginate(4);
        return view('rent.list')->with(['rents' => $rents]);
    }

    public function store(NewRentRequest $request)
    {
        $request->validate([
            'date' => 'required|after_or_equal:today|before_or_equal:date_expire',
            'date_expire' => 'required'
        ]);

        Rent::create($request->all());
        return redirect()->route('menu');
    }

    public function showrent(Rent $rent)
    {
        $ad = DB::table('ads')->where('adid', $rent->adid)->first();
        return view('rent.showrent')->with(['rent' => $rent, 'ad' => $ad]);
    }
    
    public function edit(Rent $rent)
    {
        //
    }

    public function update(UpdateRentRequest $request, Rent $rent)
    {
        //
    }

    public function destroy(Rent $rent)
    {
        //
    }

    public function data_charge(Int $id)
    {
        $ad = DB::table('ads')->where('adid', $id)->first();
        return $ad;
    }
}
