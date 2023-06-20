@extends('artists.layout.main_artists')

@section('title')
  Index
@endsection

@section('content')
  <main class="container">
    <div class="container my-5">
      <h1>Index Artisti</h1>
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
        @foreach ($artists as $artist )
        <tr>
            <th>{{ $artist['id'] }}</th>
            <td>{{ $artist['name'] }}</td>
            <td>{{ $artist['surname'] }}</td>
            <td>
              <a href="{{route('artists.show', $artist)}}" class="btn btn-primary">Vai</a>
              <a href="{{route('artists.edit', $artist)}}" class="btn btn-warning">Modifica</a>
              <a href="" class="btn btn-danger">Elimina</a>
            </td>
          </tr>
        @endforeach
      </tbody>
    </table>
  </main>
@endsection
