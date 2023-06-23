@extends('museums.layout.main_museums')

@section('title')
  Edit
@endsection

@if ($errors->any())
<div class="alert alert-danger" role="alert">
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif

@section('content')
  <main>
    <div class="container my-5">
      <h1 class="mb-2">Edit Museo {{$museum->name}}</h1>
        <form action="{{route('museums.update', $museum)}}" method="PUT" enctype="multipart/form-data">
          @csrf

          @method('PUT')
            <div class="mb-3">
              <label for="name" class="form-label">Nome Museo</label>
              <input type="text" class="form-control" id="name" name="name" value="{{$museum->name}}">
            </div>
            <div class="mb-3">
              <label for="founder" class="form-label">Fondatore</label>
              <input type="text" class="form-control" id="founder" name="founder" value="{{$museum->founder}}">
            </div>
            <div class="mb-3">
              <label for="construction_date" class="form-label">Data di costruzione</label>
              <input type="text" class="form-control" id="construction_date" name="construction_date" value="{{$museum->construction_date}}">
            </div>
            <div class="mb-3">
              <label for="number_of_visitors" class="form-label">Numero di visitatori</label>
              <input type="text" class="form-control" id="number_of_visitors" name="number_of_visitors" value="{{$museum->number_of_visitors}}">
            </div>
            <div class="mb-3">
              <label for="number_of_departments" class="form-label">Numero di reparti</label>
              <input type="text" class="form-control" id="number_of_departments" name="number_of_departments" value="{{$museum->number_of_departments}}">
            </div>
            <div class="mb-3">
              <label for="geographic_coordinates" class="form-label">Coordinate geografiche</label>
              <input type="text" class="form-control" id="geographic_coordinates" name="geographic_coordinates" value="{{$museum->geographic_coordinates}}">
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
