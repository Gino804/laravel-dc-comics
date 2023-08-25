@extends('layouts.main')

@section('title', 'Comics')

@section('main-content')
  <main>
    @foreach ($comics as $comic)
      <ul>
        <li>Titolo: {{ $comic->title }}</li>
        <li>Descrizione: {{ $comic->description }}</li>
      </ul>
    @endforeach
  </main>
@endsection
