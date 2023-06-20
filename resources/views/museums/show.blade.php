@extends('museums.layout.main_museums')

@section('title')
  Show
@endsection

@section('content')
  <main>
    <div class="container my-5">
      <h1 class="mb-2">Show {{$museum->name}}</h1>

        <div class="card w-50" style="width: 18rem;">
          <img class="card-img-top">
          <div class="card-body">
            <h5 class="card-title fs-3"><strong>{{$museum->name}}</strong></h5>
            <p class="card-text">Fondatore: <strong>{{$museum->founder}}</strong></p>
          </div>
          <ul class="list-group list-group-flush">
            <li class="list-group-item">Data di costruzione: <strong>{{$museum->construction_date}}</strong></li>
            <li class="list-group-item">Numero di visitarori: <strong>{{$museum->number_of_visitors}}</strong></li>
            <li class="list-group-item">Numero di reparti: <strong>{{$museum->number_of_departments}}</strong></li>
            <li class="list-group-item">Coordinate Geografiche: <strong>{{$museum->geographic_coordinates}}</strong></li>

          </ul>
    </div>
  </main>
@endsection
