<?php

namespace App\Http\Controllers;

use App\Models\Rest;
use Illuminate\Http\Request;

class RestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = Rest::all();
        return response()->json([
            'data' => $items
        ], 200);
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
     * @param  \App\Models\Rest  $rest
     * @return \Illuminate\Http\Response
     */
    public function show(Rest $rest)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Rest  $rest
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Rest $rest)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Rest  $rest
     * @return \Illuminate\Http\Response
     */
    public function destroy(Rest $rest)
    {
        //
    }
}
