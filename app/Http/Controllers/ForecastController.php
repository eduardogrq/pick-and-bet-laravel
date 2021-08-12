<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Forecast;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class ForecastController extends Controller
{

    public function welcome(){

        $forecasts = Forecast::all()->where('premium', false)->take(4);
        return view('welcomePick')->with('forecasts', $forecasts);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function freePicks(){
        $categories = Category::all();

        $picks = Forecast::all();

//        Se crean arreglos que almacenan los picks por categorías.
        $boxCategory = array();
        $basketballCategory = array();
        $futbolCategory = array();
        $soccerCategory = array();
        $tenisCategory = array();
        $beisbolCategory = array();

//      Se hace push en los arreglos
        foreach ($picks as $pick){
            if ($pick->category->name == "UFC/ Box" && !$pick->premium){
                array_push($boxCategory, $pick);
            } elseif ($pick->category->name == "Basketball" && !$pick->premium){
                array_push($basketballCategory, $pick);
            } elseif ($pick->category->name == "Fútbol Americano" && !$pick->premium){
                array_push($futbolCategory, $pick);
            } elseif ($pick->category->name == "Fútbol Soccer" && !$pick->premium){
                array_push($soccerCategory, $pick);
            } elseif ($pick->category->name == "Tenis" && !$pick->premium){
                array_push($tenisCategory, $pick);
            } elseif ($pick->category->name == "Béisbol" && !$pick->premium){
                array_push($beisbolCategory, $pick);
            }
        }

//      Se determinan los campos a mostrar en la vista

        $boxCategory = array_slice($boxCategory, 0, 2);
        $basketballCategory = array_slice($basketballCategory, 0, 2);
        $futbolCategory = array_slice($futbolCategory, 0, 3);
        $soccerCategory = array_slice($soccerCategory, 0, 5);
        $tenisCategory = array_slice($tenisCategory, 0, 2);
        $beisbolCategory = array_slice($beisbolCategory, 0, 3);

//        dd($soccerCategory);

        return view('forecasts.freePicks', compact('categories', 'basketballCategory', 'boxCategory',
                        'futbolCategory', 'soccerCategory', 'tenisCategory', 'beisbolCategory'));
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function premiumPicks(){
        $categories = Category::all();

        $picks = Forecast::all();

//        Se crean arreglos que almacenan los picks por categorías.
        $boxCategory = array();
        $basketballCategory = array();
        $futbolCategory = array();
        $soccerCategory = array();
        $tenisCategory = array();
        $beisbolCategory = array();

//      Se hace push en los arreglos
        foreach ($picks as $pick){
            if ($pick->category->name == "UFC/ Box" && $pick->premium){
                array_push($boxCategory, $pick);
            } elseif ($pick->category->name == "Basketball" && $pick->premium){
                array_push($basketballCategory, $pick);
            } elseif ($pick->category->name == "Fútbol Americano" && $pick->premium){
                array_push($futbolCategory, $pick);
            } elseif ($pick->category->name == "Fútbol Soccer" && $pick->premium){
                array_push($soccerCategory, $pick);
            } elseif ($pick->category->name == "Tenis" && $pick->premium){
                array_push($tenisCategory, $pick);
            } elseif ($pick->category->name == "Béisbol" && $pick->premium){
                array_push($beisbolCategory, $pick);
            }
        }

//      Se determinan los campos a mostrar en la vista

        $boxCategory = array_slice($boxCategory, 0, 2);
        $basketballCategory = array_slice($basketballCategory, 0, 2);
        $futbolCategory = array_slice($futbolCategory, 0, 3);
        $soccerCategory = array_slice($soccerCategory, 0, 5);
        $tenisCategory = array_slice($tenisCategory, 0, 2);
        $beisbolCategory = array_slice($beisbolCategory, 0, 3);

//        dd($soccerCategory);

        return view('forecasts.premiumPicks', compact('categories', 'basketballCategory', 'boxCategory',
            'futbolCategory', 'soccerCategory', 'tenisCategory', 'beisbolCategory'));
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
        return view('admin.forecasts.index')->with('forecasts', $forecasts);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        return view('admin.forecasts.create', compact('categories'));
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
        $forecasts->category_id = $request->get('category');
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
        $forecast = Forecast::find($id);
        $categories = Category::all();
        return view('admin.forecasts.edit', compact('forecast', 'categories'));
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
        $forecast = Forecast::find($id);

        $forecast->event_date = $request->get('event_date');
        $forecast->event_name = $request->get('event_name');
        $forecast->forecast = $request->get('forecast');
        $forecast->category_id = $request->get('category');
        $forecast->premium = $request->get('premium');

        $forecast->save();

        return redirect()->route('forecasts.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $forecast = Forecast::find($id);
        $forecast->delete();
        return redirect()->route('forecasts.index');
    }
}
