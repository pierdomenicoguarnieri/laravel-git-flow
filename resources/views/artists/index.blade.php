@extends('artists.layout.main_artists')

@section('title')
  Index
@endsection

@section('content')
  <main class="container">
    <div class="container my-5 m-auto">
      <h1>Index Artisti</h1>
      <a class="btn btn-success mb-4" href="{{route('artists.create')}}">Crea un nuovo artista</a>
      <table class="table">
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
          <td class="col-4">
            <a href="{{route('artists.show', $artist)}}" class="btn btn-primary">Vai</a>
            <a href="{{route('artists.edit', $artist)}}" class="btn btn-warning">Modifica</a>
            <form action="{{route('artists.destroy', $artist->id)}}" method="POST" class="d-inline" onsubmit="return confirm('Sei sicuro di voler cancellare {{$artist->name}}?')">
              @csrf
              @method('DELETE')
              <button type="submit" class="btn btn-danger" title="elimina">Elimina</button>
            </form>
          </td>
        </tr>
        @endforeach
      </tbody>
      </table>
    </div>
  </main>
@endsection
