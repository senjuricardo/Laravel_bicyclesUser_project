<?php

namespace App\Http\Controllers;

use App\Bicycle;
use Illuminate\Http\Request;

class BicycleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bicycles = Bicycle::all();
        return view('pages.Bicycles.index', ['bicycles' => $bicycles]);
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
     * @param  \App\Bicycle  $bycicle
     * @return \Illuminate\Http\Response
     */
    public function show(Bicycle $bycicle)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Bicycle  $bycicle
     * @return \Illuminate\Http\Response
     */
    public function edit(Bicycle $bycicle)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Bicycle  $bycicle
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Bicycle $bycicle)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Bicycle  $bycicle
     * @return \Illuminate\Http\Response
     */
    public function destroy(Bicycle $bycicle)
    {
        //
    }
}
