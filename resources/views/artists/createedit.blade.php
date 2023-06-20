@extends('artists.layout.main_artists')

@section('title')
  Show
@endsection

@section('content')

<div class="container p-3 text-center">

  <h1 class="fs-2 text-secondary my-4">{{$title}}</h1>
<div class="container">


  <form action="{{ $route }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('{{$method}}')
    <div class="mb-3">

      <label for="name" class="form-label">name</label>
      <input
        id="name"
        name="name"

        value="{{old('name', $artist->name)}}"

        class="form-control"
        placeholder="name"
        type="text"
      >
      <div id="" class="form-text">messaggio errore</div>

        {{-- --------------------------- --}}
      <div class="mb-3">
      <label for="surname" class="form-label">surname</label>
      <input
        id="surname"
        name="surname"

        value="{{old('surname', $artist->name)}}"

        class="form-control"
        placeholder="surname"
        type="text"
      >
      <div id="" class="form-text">messaggio errore</div>
    </div>
        {{-- --------------------------- --}}

      <label for="date_of_birth" class="form-label">date_of_birth</label>
      <input
        id="date_of_birth"
        name="date_of_birth"

        value="{{old('date_of_birth', $artist->name)}}"

        class="form-control"
        placeholder="date_of_birth"
        type="text"
      >
      <div id="" class="form-text">messaggio errore</div>

        {{-- --------------------------- --}}

      <label for="date_of_death" class="form-label">date_of_death</label>
      <input
        id="date_of_death"
        name="date_of_death"

        value="{{old('date_of_death', $artist->date_of_death)}}"

        class="form-control"
        placeholder="date_of_death"
        type="text"
      >
      <div id="" class="form-text">messaggio errore</div>
    </div>
        {{-- --------------------------- --}}

      <label for="place_of_birth" class="form-label">place_of_birth</label>
      <input
        id="place_of_birth"
        name="place_of_birth"

        value="{{old('place_of_birth', $artist->place_of_birth)}}"

        class="form-control"
        placeholder="place_of_birth"
        type="text"
      >
      <div id="" class="form-text">messaggio errore</div>
    </div>
        {{-- --------------------------- --}}

      <label for="profession" class="form-label">profession</label>
      <input
        id="profession"
        name="profession"

        value="{{old('profession', $artist->profession)}}"

        class="form-control"
        placeholder="profession"
        type="text"
      >
      <div id="" class="form-text">messaggio errore</div>

            <label for="art_movement" class="form-label">art_movement</label>
            <input
              id="art_movement"
              name="art_movement"

              value="{{old('art_movement', $artist->art_movement)}}"

              class="form-control"
              placeholder="art_movement"
              type="text"
            >
            <div id="" class="form-text">messaggio errore</div>

              {{-- --------------------------- --}}

            <label for="works" class="form-label">works</label>
            <input
              id="works"
              name="works"

              value="{{old('works', $artist->name)}}"

              class="form-control"
              placeholder="works"
              type="text"
            >
            <div id="" class="form-text">messaggio errore</div>
            <div class="mb-3">

              <label for="biography" class="form-label">biography</label>
              <textarea
              class="form-control"

              id="biography"
              name="biography"
              rows="10"
              placeholder="inserisci testo"
              type="biography"
              >
              {{old('biography', $artist->biography )}}
              </textarea>
              <div id="" class="form-text">messaggio errore</div>
            </div>
            {{-- --------------------------- --}}

        <button
          class="btn btn-dark "
          type="submit"
          >
          invia
        </button>
      </form>
          </div>
              {{-- --------------------------- --}}
    </div>
        {{-- --------------------------- --}}
</div>
</div>
</div>



</div>
@endsection
