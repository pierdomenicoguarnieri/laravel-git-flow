<?php

namespace App\Http\Controllers;

use App\Models\Museum;
use Illuminate\Http\Request;
use App\Http\Requests\MuseumRequest;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Composer;

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
    public function create(Museum $museum){
      $new_museum = new Museum();
      $title = 'crea nuovo museo' . $museum->name . ' ' .
      $method = 'POST';
      $route = route('museums.store');
      return view('museums.create', compact('museum','title', 'method', 'route'));
      return view('museums.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(MuseumRequest $request, Museum $museum){
      $form_data = $request->all();
      $new_museum = new Museum;
      $new_museum->name = $form_data['name'];
      $new_museum->founder = $form_data['founder'];
      $new_museum->construction_date = $form_data['construction_date'];
      $new_museum->number_of_visitors = $form_data['number_of_visitors'];
      $new_museum->number_of_departments = $form_data['number_of_departments'];
      $new_museum->geographic_coordinates = $form_data['geographic_coordinates'];

      // $new_museum->fill($form_data);
      $new_museum->save();
      return redirect()->route('museums.show', $new_museum);
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
      $title = 'edita artista:' . $museum->name . ' ' . $museum->surname ;
      $method = 'PUT';
      $route = route('museums.update', $museum);
      return view('museums.edit', compact('museum','title','method','route'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Museum $museums
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Museum $museum){
      $form = $request->all();

      $museum->update($form);
      return redirect()->route('museums.show', $museum);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Museums  $museums
     * @return \Illuminate\Http\Response
     */
    public function destroy($id){
      $museum = Museum::find($id);

      $museum->delete();
      return redirect()->route('museums.index');

    }
}
