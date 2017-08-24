<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\CatsManagmentRequest;
use App\Managments as Manag;

class ManagmentController extends Controller
{
	
	public function index(){

		return view('managment.home');
	}

	public function update(Request $what){

		$manager = new Manag();
		$manager->whatUpdate($what);
		return redirect('managment');
	}
	public function insert(CatsManagmentRequest $request){

	
		Manag::insertCat($request);
		return redirect('managment');
	}


}
