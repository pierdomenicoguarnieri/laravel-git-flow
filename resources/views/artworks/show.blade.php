@extends('artworks.layout.main-artworks')

@section('title')
  {{$artwork->title}}
@endsection

@section('content')
  <main class="container m-auto">

    <div class="card border-0 m-auto w-100 mt-4">

      <div class="card-body m-auto w-90 text-center" >
        <h5 class="card-title">{{$artwork->title}}</h5>
        <p class="card-text">{{$artwork->type . $artwork->year }}</p>
        <p class="card-text">{{$artwork->artist}}</p>
      </div>

      <img
      src="https://www.analisidellopera.it/wp-content/uploads/2018/01/Velazquez_Las_Meninas-1042x1200.jpg" class="card-img-top w-75 m-auto"
      alt=""
      >

      <div class="card-body m-auto w-90" >
        <p class="card-text">{{$artwork->description}}</p>
      </div>

      <div class="card-body mb-4">

        <a href="{{route('artworks.edit', $artwork)}}" class="btn btn-warning">Modifica</a>

      </div>
    </div>

  </main>
@endsection
