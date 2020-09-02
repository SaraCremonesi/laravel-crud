<ul>
  @foreach ($movies as $movie)
    <li class="movie">
      <h2><a href="movies/{{$movie->id}}">{{$movie->title}}</a></h2>
      <p>Anno: {{$movie->year}}</p>
      <p>Voto: {{$movie->rating}}</p>
      <p>Descrizione: {{$movie->description}}</p>
    </li>
  @endforeach
</ul>
