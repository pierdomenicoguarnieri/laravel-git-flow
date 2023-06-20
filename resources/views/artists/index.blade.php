@extends('artists.layout.main_artists')

@section('title')
  Index
@endsection

@section('content')
  <main class="container">
    <div class="container my-5">
      <h1>Index Artisti</h1>
    </div>
    <div class="btn btn-dark"><a class="" href="{{route('artists.create')}}">crea</a></div>
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
        @foreach ($artists as $artist )
        <tr>
            <th>{{ $artist['id'] }}</th>
            <td>{{ $artist['name'] }}</td>
            <td>{{ $artist['surname'] }}</td>
            <td><a class="btn" href="{{route('artists.show', $artist)}}">Dettagli</a></td>
            <td><a class="btn" href="{{route('artists.edit', $artist)}}">edit</a></td>
          </tr>
        @endforeach
      </tbody>
    </table>
  </main>
@endsection
