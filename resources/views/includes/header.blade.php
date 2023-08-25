<header>
  <div class="container">
    <nav>
      <figure>
        <img src="{{ asset('images/dc-logo.png') }}" alt="DC Logo">
      </figure>
      <ul>
        <li><a href="{{ route('home') }}">HOME</a></li>
        <li><a href="{{ route('comics.index') }}">COMICS</a></li>
        <li><a href="{{ route('comics.create') }}">ADD COMIC</a></li>

      </ul>
    </nav>
  </div>

  <section id="jumbotron">
    <img src="{{ asset('images/jumbotron.jpg') }}" alt="Jumbotron">
  </section>
</header>
