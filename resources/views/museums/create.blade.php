@extends('museums.layout.main_museums')

@section('title_museums')
  Create
@endsection

@section('content_museums')
  <main>
    <div class="container my-5">
      <h1 class="mb-2">Create Musei</h1>

      <form action="{{route('museums.store')}}" method="POST" enctype="multipart/form-data">
        <div class="mb-3">
          <label for="name" class="form-label">Nome Museo</label>
          <input type="text" class="form-control" id="name">
        </div>
        <div class="mb-3">
          <label for="founder" class="form-label">Fondatore</label>
          <input type="text" class="form-control" id="founder" rows="3"></input>
        </div>
        <div class="mb-3">
          <label for="construction_date" class="form-label">Data di costruzione</label>
          <input type="text" class="form-control" id="construction_date" rows="3"></input>
        </div>
        <div class="mb-3">
          <label for="founder" class="form-label">Fondatore</label>
          <input type="text" class="form-control" id="founder" rows="3"></input>
        </div>

      <button type="submit" class="btn btn-primary">Aggiungi</button>
      </form>
    </div>
  </main>
@endsection
