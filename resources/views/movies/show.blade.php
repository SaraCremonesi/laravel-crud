<ul>
  <li class="movie">
    <h2>{{$movie->title}}</h2>
    <p>Anno: {{$movie->year}}</p>
    <p>Voto: {{$movie->rating}}</p>
    <p>Descrizione: {{$movie->description}}</p>
    <a href="{{ asset('movies') }}">< Torna Indietro</a>
  </li>
</ul>
