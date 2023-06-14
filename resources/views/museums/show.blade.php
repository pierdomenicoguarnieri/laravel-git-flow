@extends('museums.layout.main_museums')

@section('title_museums')
  Show
@endsection

@section('content_museums')
  <main>
    <div class="container my-5">
      <h1 class="mb-2">Show {{$museum->name}}</h1>

    </div>
  </main>
@endsection
