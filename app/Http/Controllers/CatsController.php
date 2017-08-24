<?php

namespace App\Http\Controllers;

use App\Cats;
use App\Managments as Manag;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CatsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        //Manag::value($val) -> pobiera z bazy kategorie kotow



$catsCouch = Cats::select('*')->where('type',Manag::value(2))->limit(3)->inRandomOrder();
$catsLongHair = Cats::select('*')->where('type',Manag::value(3))->limit(3)->inRandomOrder();
$catsShortHair = Cats::select('*')->where('type',Manag::value(4))->limit(3)->inRandomOrder();
$cats = Cats::select('*')->limit(3)->inRandomOrder()->unionAll($catsCouch)->unionAll($catsLongHair)->unionAll($catsShortHair)->get();

        return view('home.index',compact('cats'));


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Cats  $cats
     * @return \Illuminate\Http\Response
     */
    public function show(Cats $cats)
    {



       $cat = Cats::find($cats->id);

       return view('home.cat',compact('cat'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Cats  $cats
     * @return \Illuminate\Http\Response
     */
    public function edit(Cats $cats)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Cats  $cats
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Cats $cats)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Cats  $cats
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cats $cats)
    {
        //
    }
}
