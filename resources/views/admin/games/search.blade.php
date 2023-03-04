@extends ('layouts.admin.games.index')

@section('content')

<form style="width: 500px;margin: 0 auto" action={{route("$section.games.index")}}>
  @csrf
    <div style="background-color:#f5f5f5;margin-top:10px" >           
      <div class="mb-3 input-wrapper">
        <label for="title" class="form-label">Название игры</label>
        <input  value=""  name="title" type="text" class="form-control" id="title" >
      </div>
      <div class="mb-3 input-wrapper input-with-operator">
        <select name="gameScoreOperator" id="gamescoreOperator">
          <option value="<"><</option>
          <option value=">">></option>
          <option value="=">=</option>
        </select>
        <div>
          <label for="score" class="form-label">Оценка игры(0-10)</label>
          <input   name="gameScore" type="number" max="10" min="0" step="0.1" class="form-control" id="score" >   
        </div >       
      </div>

      </div>
      <div class="mb-3 input-wrapper input-with-operator">
        <select name="lengthOperator" id="lengthOperator">
          <option value="<"><</option>
          <option value=">">></option>
          <option value="=">=</option>
        </select>
        <div>
          <label for="length" class="form-label">Продолжительность игры (в часах)</label>
          <input  value=""  name="length" type="text" class="form-control" id="length" >
        </div>
      </div>
      <div class="mb-3 input-wrapper input-with-operator">
        <select name="releaseDateOperator" id="releaseDateOperator">
          <option value="<"><</option>
          <option value=">">></option>
          <option value="=">=</option>
        </select>
        <div>
          <label for="gameReleaseDate" class="form-label">Дата выхода игры</label>
          <input  value="" name="releaseDate" type="date" class="form-control" id="gameReleaseDate" >
        </div>
      </div>
      <div>
        <label for="developer">Разработчик игры</label>
        <select  name="developer_id" class="form-select" aria-label="Default select example" id="developer">
          <option value="">Не выбрано</option>
          @foreach($devs as $dev)
          <option value="{{$dev->id}}">{{$dev->title}}</option>
          @endforeach
        </select>
     </div>
     <div>
      <label for="genres">Жанры игры (зажмите ctrl для того чтобы выделить несколько жанров)</label>
      <select   name="genres[]" class="form-select" multiple aria-label="multiple select example" id="genres">
        @foreach($genres as $genre)
        <option value="{{$genre->id}}">{{$genre->title}}</option>
        @endforeach
      </select>
    </div>
    <button type="submit" style="margin-top: 20px" class="btn btn-primary">Найти игру</button>
</form>
@endsection

