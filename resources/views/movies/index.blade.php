@foreach ($movies as $movie)
    <h4><a href="{{route('movies.show', $movie->id)}}">{{$movie->title}}</a></h4>
    <a href="{{ route('movies.edit', $movie->id) }}"></a>
    <ul>
      <li>Anno: {{$movie->year}}</li>
      <li>Genere: {{$movie->description}}</li>
      <li>Voto: {{$movie->rating}}</li>
    </ul>
    <form  action="{{ 'movies.destroy', $movie->id }}" method="post">
      @csrf
      @method('DELETE');
      <input type="submit" value="Delete">
    </form>
  @endforeach

  <div>
    <a href="{{ route('movies.create') }}">Create new movie</a>
  </div>
