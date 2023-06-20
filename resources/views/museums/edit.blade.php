@extends('museums.layout.main_museums')

@section('title')
  Edit
@endsection

@section('content')
  <main>
    <div class="container my-5">
      <h1 class="mb-2">Edit Museo {{$museum->name}}</h1>
    </div>
  </main>
@endsection
