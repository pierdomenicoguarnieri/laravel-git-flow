@extends('artists.layout.main_artists')

@section('title_artists')
  Show
@endsection

@section('content_artists')
  <main>
    <div class="container my-5">
      <h1>Show Artisti</h1>
    </div>

    <div class="card" style="width: 18rem;">
      <img src="..." class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">{{ $artist['name'] . $artist['surname'] }}</h5>
        <p class="card-text">{{$artist['biography']}}</p>
      </div>
      <ul class="list-group list-group-flush">
        <li class="list-group-item">{{$artist['date_of_birth']}}</li>
        <li class="list-group-item">{{$artist['date_of_death']}}</li>
        <li class="list-group-item">{{$artist['place_of_birth']}}</li>
        <li class="list-group-item">{{$artist['place_of_death']}}</li>
        <li class="list-group-item">{{$artist['art_movement']}}</li>
        <li class="list-group-item">{{$artist['profession']}}</li>
      </ul>
      <div class="card-body">
        <ul>

          <li>{{$artist['works']}}</li>

        </ul>
      </div>
    </div>


  </main>
@endsection
