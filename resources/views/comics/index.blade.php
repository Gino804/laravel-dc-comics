@extends('layouts.main')

@section('title', 'Comics')

@section('main-content')
  <main>
    @foreach ($comics as $comic)
      <ul class="pt-4">
        <li>Titolo:
          <a href="{{ route('comics.show', $comic->id) }}">{{ $comic->title }}</a>
          <a class="btn btn-success ms-3" href="{{ route('comics.edit', $comic) }}">Modifica</a>
          <form action="{{ route('comics.destroy', $comic) }}" method="POST" class="d-inline">
            @csrf
            @method('DELETE')
            <button class="btn btn-danger">Elimina</button>
          </form>
        </li>
        <li>Descrizione: {{ $comic->description }}</li>
      </ul>
    @endforeach
  </main>
@endsection
