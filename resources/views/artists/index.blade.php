@extends('artists.layout.main_artists')

@section('title_artists')
  Index
@endsection

@section('content_artists')
  <main>
    <div class="container my-5">
      <h1>Index Artisti</h1>
    </div>
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
        <tr>
          @foreach ($artists as $artist )
            <th>{{ $artist['id'] }}</th>
            <td>{{ $artist['name'] }}</td>
            <td>{{ $artist['surname'] }}</td>
            <td><a class="btn" href="{{route('artists.show')}}">Dettagli</a></td>
          @endforeach
        </tr>
      </tbody>
    </table>
  </main>
@endsection
