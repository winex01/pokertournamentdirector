<?php

namespace App\Http\Controllers;
use App\Prizemoney;

use Illuminate\Http\Request;

class TournamentController extends Controller
{
	public function storeprize(Request $request){
		$prizemoney = new Prizemoney;

		$prizemoney->place = $request->input('place');
		$prizemoney->amount = $request->input('amount');

		$prizemoney->save();

	}
    
}
