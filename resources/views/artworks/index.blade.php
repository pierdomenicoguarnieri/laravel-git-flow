@extends('artists.layout.main_artists')

@section('title')
  Index
@endsection

@section('content')
  <main class="container">
    <div class="container my-5">
      <h1>Index Opere D'Arte</h1>

      <a href="{{route('artworks.create')}}" class="btn btn-success mb-2">Crea un nuovo museo</a>

    </div>
    <table class="table ">
      <thead>
        <tr>
          <th scope="col">ID</th>
          <th scope="col">Titolo</th>
          <th scope="col">Artista</th>
          <th scope="col">Anno</th>
          <th scope="col">Azioni</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($artworks as $artwork )
        <tr>
            <th>{{ $artwork['id'] }}</th>
            <td>{{ $artwork['title'] }}</td>
            <td>{{ $artwork['artist'] }}</td>
            <td>{{ $artwork['year'] }}</td>
            <td>
              <a href="{{route('artworks.show', $artwork)}}" class="btn btn-primary">Vai</a>
              <a href="{{route('artworks.edit', $artwork)}}" class="btn btn-warning">Modifica</a>
              <a href="" class="btn btn-danger">Elimina</a>
            </td>
          </tr>
        @endforeach
      </tbody>
    </table>
  </main>
@endsection
