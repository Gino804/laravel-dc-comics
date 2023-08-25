@extends('layouts.main')

@section('title', '{{ $comic->title }}')

@section('main-content')
  <main>
    <ul>
      <li><a href="{{ route('comics.index') }}">Indietro</a></li>
      <li>Titolo: {{ $comic->title }}</li>
      <li>Descrizione: {{ $comic->description }}</li>
    </ul>
  </main>
@endsection
