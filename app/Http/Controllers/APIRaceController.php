<?php

namespace App\Http\Controllers;

use App\Models\Race;
use Illuminate\Http\Request;
use App\Http\Resources\RaceResource;

class APIRaceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
           $races = Race::paginate(10);
           return response()->json($races);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Race  $race
     * @return \Illuminate\Http\Response
     */
    public function show(Race $race)
    {
        
        return new RaceResource($race);
    }

}
