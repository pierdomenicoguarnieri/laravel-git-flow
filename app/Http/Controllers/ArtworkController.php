<?php

namespace App\Http\Controllers;

use App\Models\Artwork;
use Illuminate\Http\Request;
use App\Http\Requests\ArtworkRequest;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Composer;

class ArtworkController extends Controller
{
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index(){
    $artworks = Artwork::all();
    return view('artworks.index', compact('artworks'));
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function create(Artwork $artwork)
  {
    $title = 'Nuova opera d\'arte';
    $method = 'POST';
    $route = route('artworks.store');
    return view('artworks.create-edit', compact('title','method','route', 'artwork'));
  }

  /**
   * Store a newly created resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */
  public function store(ArtworkRequest $request, Artwork $artwork)

  {
          // dd($request);
      // classic storage
      $form_data = $request;
      $new_artwork = new Artwork;

      $new_artwork->title = $form_data['title'];
      $new_artwork->type = $form_data['type'];
      $new_artwork->description = $form_data['description'];
      $new_artwork->year = $form_data['year'];
      $new_artwork->artist = $form_data['artist'];
      $new_artwork->image_path = $form_data['image_path'];
      $new_artwork->image_name = $form_data['image_name'];

      // dd($new_artist);

      // $new_artist->fill($request);

      $new_artwork->save();

    return redirect()->route('artworks.show', $new_artwork);
  }

  /**
   * Display the specified resource.
   *
   * @param  \App\Models\Artwork  $artwork
   * @return \Illuminate\Http\Response
   */
  public function show(Artwork $artwork)
  {

    return view('artworks.show',  compact('artwork'));
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  \App\Models\Artwork  $artwork
   * @return \Illuminate\Http\Response
   */
  public function edit(Artwork $artwork)
  {
    $title = 'Edit:' . ' ' . $artwork->title;
    $method = 'PUT';
    $route = route('artworks.update', $artwork);
    return view('artworks.create-edit', compact('artwork','title','method','route'));
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  \App\Models\Artwork  $artwork
   * @return \Illuminate\Http\Response
   */
  public function update(ArtworkRequest $request, Artwork $artwork)
  {
    $form_data = $request->all();
    $artwork->update($form_data);
    return redirect()->route('artworks.show', $artwork);
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  \App\Models\Artwork  $artwork
   * @return \Illuminate\Http\Response
   */
  public function destroy($id)
  {
    $artwork = Artwork::find($id);
    $artwork->delete();
    return redirect()->route('artworks.index');
  }
}
