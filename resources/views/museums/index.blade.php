@extends('museums.layout.main_museums')

@section('title')
  Index
@endsection

@section('content')
  <main>
    <div class="container my-5">
      <h1 class="mb-2">Index Musei</h1>

      <a href="{{route('museums.create')}}" class="btn btn-success mb-4">Crea un nuovo museo</a>

      <div class="pg-table-wrapper">
        <table class="table">
          <thead>
            <tr>
              <th scope="col">#ID</th>
              <th scope="col">Name</th>
              <th scope="col">Opere d'arte</th>
              <th scope="col">Coordinate Geografiche</th>
              <th scope="col">Azioni</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($museums as $museum)
            <tr>
              <th scope="row">{{$museum->id}}</th>
              <td>{{$museum->name}}</td>
              <td>{{$museum->artworks}}</td>
              <td>{{$museum->geographic_coordinates}}</td>
              <td>
                <a href="{{route('museums.show', $museum)}}" class="btn btn-primary">Vai</a>
                <a href="{{route('museums.edit', $museum)}}" class="btn btn-warning">Modifica</a>

                <form action="{{route('museums.destroy', $museum->id)}}" method="POST" class="d-inline" onsubmit="return confirm('Sei sicuro di voler cancellare {{$museum->name}}?')">
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
    </div>
  </main>
@endsection
