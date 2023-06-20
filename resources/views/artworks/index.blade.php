@extends('artists.layout.main_artists')

@section('title')
  Index
@endsection

@section('content')
  <main class="container">
    <div class="container my-5">
      <h1>Index Opere D'Arte</h1>
    </div>
    <table class="table ">
      <thead>
        <tr>
          <th scope="col">ID</th>
          <th scope="col">Nome</th>
          <th scope="col">Cognome</th>
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
            <td><a class="btn" href="{{route('artworks.show', $artwork)}}">Dettagli</a></td>
          </tr>
        @endforeach
      </tbody>
    </table>
  </main>
@endsection
