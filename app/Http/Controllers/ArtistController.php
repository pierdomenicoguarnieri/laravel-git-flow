<?php

namespace App\Http\Controllers;

use App\Models\Artist;
use Illuminate\Http\Request;
use App\Http\Requests\ArtistRequest;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Composer;

class ArtistController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
      $artists = Artist::all();
      return view('artists.index', compact('artists'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Artist $artist){
      $new_artist = new Artist();
      $title = 'crea nuovo artista' . $artist->name . ' ' . $artist->surname ;
      $method = 'POST';
      $route = route('artists.store');
      return view('artists.createedit', compact('artist','title', 'method', 'route'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function store(ArtistRequest $request){

      $new_artist = new Artist();

      $new_artist->fill($form_data);

      $new_artist->save();

      return redirect()->route('artists.show', $new_artist);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Artist  $artist
     * @return \Illuminate\Http\Response
     */
    public function show(Artist $artist){
      return view('artists.show', compact('artist'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Artist  $artist
     * @return \Illuminate\Http\Response
     */
    public function edit(Artist $artist){
      $title = 'edita artista:' . $artist->name . ' ' . $artist->surname ;
      $method = 'PUT';
      $route = route('artists.update', $artist);
      return view('artists.createedit', compact('artist','title','method','route'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Artist  $artist
     * @return \Illuminate\Http\Response
     */

    public function update(Request $request, Artist $artist){
      $form_data = $request->all();
      $artist->update($form_data);
      return redirect()->route('artists.show', $artist);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Artist  $artist
     * @return \Illuminate\Http\Response
     */
    public function destroy(Artist $artist){
      $artist->delete();
      return redirect()->route('artists.index', $artist);

    }
}
