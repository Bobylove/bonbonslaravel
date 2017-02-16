<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Bonbon;

class BonbonController extends Controller
{
	public function getIndex(){
		
		$bonbons = \App\Bonbon::all();
		return view('welcome', ['bonbons'=>$bonbons]);
	}

	public function getValue(Request $request){
		$bonbons = new Bonbon();
		$bonbons->name = $request->name;
		$bonbons->qty = $request->qty;
		$bonbons->save();
		return back();


	}

	public function postDelete(Request $request){

		$bonbons = Bonbon::find($request->id);
		$bonbons->delete();
		return back();

	}

	public function postSell($id){
		$bonbons = Bonbon::find($id);
		$bonbons->qty--;
		$bonbons->save();
		return response($bonbons->qty);
	}

	public function postRestock($id){
		$bonbons = Bonbon::find($id);
		$bonbons->qty++ ;
		$bonbons->save();
		return response($bonbons->qty);
	}


}
