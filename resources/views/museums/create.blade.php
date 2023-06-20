@extends('museums.layout.main_museums')

@section('title_museums')
  Create
@endsection

@section('content_museums')
  <main>
    <div class="container my-5">
      <h1 class="mb-2">Create Musei</h1>

      <form action="{{route('museums.store')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
          <label for="name" class="form-label">Nome Museo</label>
          <input type="text" class="form-control" id="name" name="name">
        </div>
        <div class="mb-3">
          <label for="founder" class="form-label">Fondatore</label>
          <input type="text" class="form-control" id="founder" name="founder"></input>
        </div>
        <div class="mb-3">
          <label for="construction_date" class="form-label">Data di costruzione</label>
          <input type="text" class="form-control" id="construction_date" name="construction_date"></input>
        </div>
        <div class="mb-3">
          <label for="number_of_visitors" class="form-label">Numero di visitatori</label>
          <input type="text" class="form-control" id="number_of_visitors" name="number_of_visitors"></input>
        </div>
        <div class="mb-3">
          <label for="number_of_departments" class="form-label">Numero di reparti</label>
          <input type="text" class="form-control" id="number_of_departments" name="number_of_departments"></input>
        </div>
        <div class="mb-3">
          <label for="geographic_coordinates" class="form-label">Coordinate geografiche</label>
          <input type="text" class="form-control" id="geographic_coordinates" name="geographic_coordinates"></input>
        </div>
        <div class="input-group mb-3">
          <input type="file" class="form-control" id="image">
          <label class="input-group-text" for="image">Aggiungi file</label>
        </div>


      <button type="submit" class="btn btn-primary">Aggiungi</button>
      </form>
    </div>
  </main>
@endsection
