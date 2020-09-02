@foreach ($movies as $movie)
    <h4><a href="{{route('movies.show', $movie->id)}}">{{$movie->title}}</a></h4>
    <ul>
      <li>Anno: {{$movie->year}}</li>
      <li>Genere: {{$movie->description}}</li>
      <li>Voto: {{$movie->rating}}</li>
    </ul>
  @endforeach
