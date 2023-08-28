@extends('layouts.main')

@section('title', "Edit $comic->title")

@section('main-content')

  <div class="container">
    <form class="py-5" method="POST" action="{{ route('comics.update', $comic) }}">

      @csrf
      @method('PUT')

      <div class="mb-3">
        <label for="title" class="form-label">Titolo </label>
        <input type="text" class="form-control" name="title" id="title" value="{{ $comic->title }}">
      </div>

      <div class="mb-3">
        <label for="description" class="form-label">Descrizione </label>
        <textarea class="form-control" name="description" id="description">{{ $comic->description }}</textarea>
      </div>

      <div class="mb-3">
        <label for="thumb" class="form-label">Copertina </label>
        <input type="text" class="form-control" name="thumb" id="thumb" value="{{ $comic->thumb }}">
      </div>

      <div class="mb-3">
        <label for="price" class="form-label">Prezzo </label>
        <input type="text" class="form-control" name="price" id="price" value="{{ $comic->price }}">
      </div>

      <div class="mb-3">
        <label for="series" class="form-label">Serie </label>
        <input type="text" class="form-control" name="series" id="series" value="{{ $comic->series }}">
      </div>

      <div class="mb-3">
        <label for="sale_date" class="form-label">Data di vendita </label>
        <input type="text" class="form-control" name="sale_date" id="sale_date" value="{{ $comic->sale_date }}">
      </div>

      <div class="mb-3">
        <label for="type" class="form-label">Tipo </label>
        <input type="text" class="form-control" name="type" id="type" value="{{ $comic->type }}">
      </div>

      <div class="mb-3">
        <label for="artists" class="form-label">Artisti </label>
        <input type="text" class="form-control" name="artists" id="artists" value="{{ $comic->artists }}">
      </div>

      <div class="mb-3">
        <label for="writers" class="form-label">Scrittori </label>
        <input type="text" class="form-control" name="writers" id="writers" value="{{ $comic->writers }}">
      </div>

      <button type="submit" class="btn btn-primary text-white">Salva Modifiche</button>

    </form>
  </div>

@endsection
