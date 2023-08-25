@extends('layouts.main')

@section('title', 'Add Comic')

@section('main-content')

  <form class="py-5" action="{{ route('comics.store') }}" method="POST">

    @csrf

    <label for="title">Titolo: </label>
    <input type="text" name="title" id="title"><br><br>

    <label for="description">Descrizione: </label>
    <input type="text" name="description" id="description"><br><br>

    <label for="thumb">Copertina: </label>
    <input type="text" name="thumb" id="thumb"><br><br>

    <label for="price">Prezzo: </label>
    <input type="text" name="price" id="price"><br><br>

    <label for="series">Serie: </label>
    <input type="text" name="series" id="series"><br><br>

    <label for="sale_date">Data di vendita: </label>
    <input type="text" name="sale_date" id="sale_date"><br><br>

    <label for="type">Tipo: </label>
    <input type="text" name="type" id="type"><br><br>

    <label for="artists">Artisti: </label>
    <input type="text" name="artists" id="artists"><br><br>

    <label for="writers">Scrittori: </label>
    <input type="text" name="writers" id="writers"><br><br>

    <button type="submit">Invia</button>

  </form>

@endsection
