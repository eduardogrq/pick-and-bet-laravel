<?php

namespace App\Http\Controllers;

use App\Models\Forecast;
use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class ForecastController extends Controller
{

    public function welcome(){

        $forecasts = Forecast::all()->take(7);
        return view('welcomePick')->with('forecasts', $forecasts);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function freePicks(){
        return view('forecasts.freePicks');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function premiumPicks(){
        return view('forecasts.premiumPicks');
    }

    public function premiumRegister(){
        return view('forecasts.premiumRegister');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $forecasts = Forecast::all();
        return view('forecasts.index')->with('forecasts', $forecasts);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('forecasts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $forecasts = new Forecast();
        $forecasts->event_date = $request->get('event_date');
        $forecasts->event_name = $request->get('event_name');
        $forecasts->forecast = $request->get('forecast');
        $forecasts->category = $request->get('category');
        $forecasts->premium = $request->get('premium');

        $forecasts->save();

        return redirect()->route('forecasts.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
