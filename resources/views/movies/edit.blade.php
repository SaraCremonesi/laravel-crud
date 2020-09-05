<h1>Modifica {{ $movie->title }}</h1>

<div>
  <form action="{{ route('movies.update', $movie->id) }}" method="post">
      <div>
        <label>Title</label>
        <input type="text" name="title" value="{{ $movie->title }}">
      </div>

      <div>
        <label>Year</label>
        <input type="integer" name="year" value="{{ $movie->year }}">
      </div>

      <div>
        <label>Description</label>
        <textarea name="description" rows="8" cols="80">{{ $movie->description }}</textarea>
      </div>

      <div>
        <label>Rating</label>
        <input type="float" name="rating" value="{{ $movie->rating }}">
      </div>

      <div>
        <input type="submit" value="Save">
      </div>
    </form>
  </form>
</div>
