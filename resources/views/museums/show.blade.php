@extends('museums.layout.main_museums')

@section('title_museums')
  Show
@endsection

@section('content_museums')
  <main>
    <div class="container my-5">
      <h1 class="mb-2">Show {{$museum->name}}</h1>

        <div class="card w-50" style="width: 18rem;">
          <img class="card-img-top">
          <div class="card-body">
            <h5 class="card-title">{{$museum->name}}</h5>
            <p class="card-text">{{$museum->founder}}</p>
          </div>
          <ul class="list-group list-group-flush">
            <li class="list-group-item">{{$museum->construction_date}}</li>
            <li class="list-group-item">Numero di visitarori: {{$museum->number_of_visitors}}</li>
            <li class="list-group-item">Numero di reparti: {{$museum->number_of_departments}}</li>
            <li class="list-group-item">Coordinate Geografiche{{$museum->geographic_coordinates}}</li>

          </ul>
    </div>
  </main>
@endsection
