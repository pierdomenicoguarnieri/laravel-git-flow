<?php

namespace App\Http\Controllers;

use App\Models\Museum;
use Illuminate\Http\Request;

class MuseumsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
      $museums = Museum::all();
      return view('museums.index', compact('museums'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(){
      return view('museums.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request){

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Museums  $museums
     * @return \Illuminate\Http\Response
     */
    public function show(Museum $museum){
      return view('museums.show', compact('museum'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Museums  $museums
     * @return \Illuminate\Http\Response
     */
    public function edit(Museum $museum){
      return view('museums.edit', compact('museum'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Museum $museums
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Museum $museums){

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Museums  $museums
     * @return \Illuminate\Http\Response
     */
    public function destroy(Museum $museums){

    }
}
