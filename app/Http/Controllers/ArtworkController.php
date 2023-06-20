<?php

namespace App\Http\Controllers;

use App\Models\Artwork;
use Illuminate\Http\Request;

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
  public function store(Request $request)
  {
    //
  }

  /**
   * Display the specified resource.
   *
   * @param  \App\Models\Artwork  $artwork
   * @return \Illuminate\Http\Response
   */
  public function show(Artwork $artwork)
  {
    //
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
  public function update(Request $request, Artwork $artwork)
  {
    //
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  \App\Models\Artwork  $artwork
   * @return \Illuminate\Http\Response
   */
  public function destroy(Artwork $artwork)
  {
    //
  }
}
