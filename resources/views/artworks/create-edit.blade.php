@extends('artworks.layout.main-artworks')

@section('title')
  {{ $title }}
@endsection

@section('content')

  <div class="container p-3">

    <h1 class="fs-2 text-secondary my-4">{{ $title }}</h1>

    @if ($errors->any())
      <div class="alert alert-danger" role="alert">
        <ul>
          @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
          @endforeach
        </ul>
      </div>
    @endif

    <div class="container">

    <form action="{{ $route }}" method="POST" enctype="multipart/form-data">
      @csrf
      @method($method)

      <div class="mb-3">
        <label for="title" class="form-label">Titolo</label>
        <input id="title" name="title" value="{{ old('title', $artwork->title) }}" class="form-control"
          placeholder="Titolo" type="text">
        <div id="" class="form-text">messaggio errore</div>
      </div>

      {{-- --------------------------- --}}
      <div class="mb-3">
        <label for="type" class="form-label">Tipo di opera</label>
        <input id="type" name="type" value="{{ old('type', $artwork->type) }}" class="form-control"
          placeholder="Inserire il tipo" type="text">
        <div id="" class="form-text">messaggio errore</div>
      </div>
      {{-- --------------------------- --}}

      <div class="mb-3">
        <label for="description" class="form-label">Descrizione</label>
        <textarea id="description" name="description" class="form-control" placeholder="Descrizione...">
            {{ old('description', $artwork->description) }}
          </textarea>
        <div id="" class="form-text">messaggio errore</div>
      </div>

      {{-- --------------------------- --}}
      <div class="b-3">
        <label for="year" class="form-label">Anno</label>
        <input id="year" name="year" value="{{ old('year', $artwork->year) }}" class="form-control"
          placeholder="Anno" type="number">
        <div id="" class="form-text">messaggio errore</div>
      </div>
      {{-- --------------------------- --}}

      <div class="mb-3">
        <label for="artist" class="form-label">Artista</label>
        <input id="artist" name="artist" value="{{ old('artist', $artwork->artist) }}" class="form-control"
          placeholder="Inserire il nome dell'artista" type="text">
        <div id="" class="form-text">messaggio errore</div>
      </div>

      <div class="mb-3">
        <label for="image" class="form-label">Immagine</label>
        <input class="form-control" onchange="showImg(event)" type="file" id="image" name="image">
        <img src="{{ asset('storage/' . $artwork?->image_path) }}" id="image" width="200" alt=""
          class="mt-4" onerror="this.src='/img/no-image.jpg'">
      </div>

      <button class="btn btn-dark " type="submit">
        invia
      </button>
    </form>
  </div>

  <script>
    function showImg(event) {
      const tagImage = document.getElementById('image');
      tagImage.src = URL.createObjectURL(event.target.files[0]);
    }
  </script>
@endsection
