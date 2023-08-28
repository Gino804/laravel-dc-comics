@extends('layouts.main')

@section('title', "Edit $comic->title")

@section('main-content')

  <div class="container pt-4">

    @if ($errors->any())

      <div class="alert alert-danger">
        <ul>
          @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
          @endforeach
        </ul>
      </div>

    @endif

    <form class="py-5" method="POST" action="{{ route('comics.update', $comic) }}">

      @csrf
      @method('PUT')

      <div class="mb-3">
        <label for="title" class="form-label">Titolo </label>
        <input type="text" class="form-control" name="title" id="title" value="{{ old('title', $comic->title) }}">
      </div>

      <div class="mb-3">
        <label for="description" class="form-label">Descrizione </label>
        <textarea class="form-control" name="description" id="description">{{ old('description', $comic->description) }}</textarea>
      </div>

      <div class="mb-3">
        <label for="thumb" class="form-label">Copertina </label>
        <input type="text" class="form-control" name="thumb" id="thumb"
          value="{{ old('thumb', $comic->thumb) }}">
      </div>

      <div class="mb-3">
        <label for="price" class="form-label">Prezzo </label>
        <input type="text" class="form-control" name="price" id="price"
          value="{{ old('price', $comic->price) }}">
      </div>

      <div class="mb-3">
        <label for="series" class="form-label">Serie </label>
        <input type="text" class="form-control" name="series" id="series"
          value="{{ old('series', $comic->series) }}">
      </div>

      <div class="mb-3">
        <label for="sale_date" class="form-label">Data di vendita </label>
        <input type="text" class="form-control" name="sale_date" id="sale_date"
          value="{{ old('sale_date', $comic->sale_date) }}">
      </div>

      <div class="mb-3">
        <label for="type" class="form-label">Tipo </label>
        <input type="text" class="form-control" name="type" id="type" value="{{ old('type', $comic->type) }}">
      </div>

      <div class="mb-3">
        <label for="artists" class="form-label">Artisti </label>
        <input type="text" class="form-control" name="artists" id="artists"
          value="{{ old('artists', $comic->artists) }}">
      </div>

      <div class="mb-3">
        <label for="writers" class="form-label">Scrittori </label>
        <input type="text" class="form-control" name="writers" id="writers"
          value="{{ old('writers', $comic->writers) }}">
      </div>

      <button type="submit" class="btn btn-primary text-white">Salva Modifiche</button>

    </form>
  </div>

@endsection
