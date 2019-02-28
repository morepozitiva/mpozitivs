<?php

namespace App\Http\Controllers;

use App\Castle;
use Illuminate\Http\Request;

class CastleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $castles = Castle::all();
        return view('pages.castle', compact('castles'));
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
     * @param  \App\Castle  $castle
     * @return \Illuminate\Http\Response
     */
    public function show(Castle $castle)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Castle  $castle
     * @return \Illuminate\Http\Response
     */
    public function edit(Castle $castle)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Castle  $castle
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Castle $castle)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Castle  $castle
     * @return \Illuminate\Http\Response
     */
    public function destroy(Castle $castle)
    {
        //
    }
}
