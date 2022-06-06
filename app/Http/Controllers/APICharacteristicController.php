<?php

namespace App\Http\Controllers;

use App\Models\Characteristic;
use Illuminate\Http\Request;

class APICharacteristicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $characteristic = Characteristic::paginate(10);
        return response()->json($characteristic);
    }

   
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Characteristic  $characteristic
     * @return \Illuminate\Http\Response
     */
    public function show(Characteristic $characteristic)
    {
        return response()->json($characteristic);

    }


}
