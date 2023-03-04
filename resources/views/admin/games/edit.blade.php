@extends ('layouts.admin.games.index')

@section('content')
<form action={{route("$section.games.update",$game->id)}} method="POST" style="width: 500px;margin: 0 auto">
    @csrf
    @method('patch')
    <div class="mb-2">
      <label for="title" class="form-label">Название игры</label>
      <input value="{{$game->title}}" required name="title" type="text" class="form-control" id="title" >
    </div>
    <div class="mb-2">
        <label for="score" class="form-label">Ваша оценка игры (0-10)</label>
        <input value="{{$game->gameScore}}" required name="gameScore" type="number" max="10" min="0" step="0.1" class="form-control" id="score" >
    </div>
    <div class="mb-2">
        <label for="length" class="form-label">Продолжительность игры (в часах)</label>
        <input value="{{$game->length}}" required min="0" name="length" type="number" class="form-control" id="length" >
    </div>
    <div class="mb-2">
        <label for="date" class="form-label">Дата выхода игры</label>
        <input value={{$game->releaseDate}} name="releaseDate" type="date" class="form-control" id="date" >
    </div>
    <div class="mb-2">
      <label for="developer">Разработчик игры</label>
      <select required name="developer_id" class="form-select" aria-label="Default select example" id="developer">
        @foreach($developers as $developer)
        <option value="{{$developer->id}}" {{$developer->id === $game->developer->id ? 'selected' : ''}}>{{$developer->title}}</option>
        @endforeach
      </select>
   </div>
   <div class="mb-2">
    <label for="genres">Жанры игры (зажмите ctrl для того чтобы выделить несколько жанров)</label>
    <select required name="genres[]" class="form-select" multiple aria-label="multiple select example" id="genres">
      @foreach($genres as $genre)
      <option {{in_array($genre->id,$game->genresIds) ? "selected" : ''}} value="{{$genre->id}}">{{$genre->title}}</option>
      @endforeach
    </select>
  </div>
    <button style="margin-top: 20px" type="submit" class="btn btn-primary">Редкатировать</button>
  </form>
@endsection 
