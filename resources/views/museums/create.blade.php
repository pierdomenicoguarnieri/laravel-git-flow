@extends('museums.layout.main_museums')

@section('title_museums')
  Create
@endsection

@section('content_museums')
  <main>
    <div class="container my-5">
      <h1 class="mb-2">Create Musei</h1>

      <form action="{{route('museums.store')}}" method="POST">

      <button type="submit" class="btn btn-primary">Crea</button>
      </form>
    </div>
  </main>
@endsection
