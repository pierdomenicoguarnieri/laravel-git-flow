@extends('artists.layout.main_artists')

@section('title')
  Show
@endsection

@section('content')
  <main class="container">
    <div class="container my-5">
      <h1>Show Opere D'Arte</h1>
    </div>

    <div class="card w-50" style="width: 18rem;">
      <img class="card-img-top">
      <p>{{$artwork->image_name}}</p>
      <div class="card-body">
        <h5 class="card-title">{{$artwork->title}}</h5>
        <p class="card-text">{{$artist['description']}}</p>
      </div>
      <ul class="list-group list-group-flush">
        <li class="list-group-item">{{$artwork['year']}}</li>
        <li class="list-group-item">{{$artwork['artist']}}</li>
      </ul>
      <div class="card-body">
        <ul>

          <li>{{$artist['works']}}</li>

        </ul>
      </div>
    </div>


  </main>
@endsection
