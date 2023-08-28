@extends('layouts.main')

@section('title', 'Comics')

@section('main-content')
  <main>
    @foreach ($comics as $comic)
      <ul>
        <li>Titolo:
          <a href="{{ route('comics.show', $comic->id) }}">{{ $comic->title }}</a>
          <a class="text-success ps-2" href="{{ route('comics.edit', $comic) }}">Modifica</a>
        </li>
        <li>Descrizione: {{ $comic->description }}</li>
      </ul>
    @endforeach
  </main>
@endsection
