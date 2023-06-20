@extends('museums.layout.main_museums')
@section('title')
  Index
@endsection
@section('content')
  <main>
    <div class="container my-5">
      <h1>Index Musei</h1>
      <h1 class="mb-2">Index Musei</h1>

      <a href="{{route('museums.create')}}" class="btn btn-success mb-2">Crea un nuovo museo</a>

      <div class="pg-table-wrapper">
        <table class="table">
          <thead>
            <tr>
              <th scope="col">#ID</th>
              <th scope="col">Name</th>
              <th scope="col">Coordinate Geografiche</th>
              <th scope="col">Azioni</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th scope="row">1</th>
              <td>Mark</td>
              <td>Otto</td>
              <td>
                <a href="{{route('museums.show', 'ciao')}}" class="btn btn-primary">Vai</a>
                <a href="{{route('museums.edit', 'ciao')}}" class="btn btn-warning">Modifica</a>
                <a href="" class="btn btn-danger">Elimina</a>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </main>
@endsection
