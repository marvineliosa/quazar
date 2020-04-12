<?php

namespace App\Http\Controllers;

use App\Distribuidor;
use Illuminate\Http\Request;

class DistribuidorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
          return view('distribuidor.index');
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
     * @param  \App\Distribuidor  $distribuidor
     * @return \Illuminate\Http\Response
     */
    public function show(Distribuidor $distribuidor)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Distribuidor  $distribuidor
     * @return \Illuminate\Http\Response
     */
    public function edit(Distribuidor $distribuidor)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Distribuidor  $distribuidor
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Distribuidor $distribuidor)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Distribuidor  $distribuidor
     * @return \Illuminate\Http\Response
     */
    public function destroy(Distribuidor $distribuidor)
    {
        //
    }
}
