@extends ('layouts.admin.games.index')

@section('content')
<form action={{route("$section.games.store")}} method="POST" style="width: 500px;margin: 0 auto">
    @csrf
    <div class="mb-2">
      <label for="title" class="form-label">Название игры</label>
      <input value="{{old('title')}}" required name="title" type="text" class="form-control" id="title" >
      @error('title')
      <p style="margin-top: 5px" class="text-danger">{{$message}}</p>       
      @enderror
    </div>
    <div class="mb-2">
        <label for="score" class="form-label">Ваша оценка игры (0-10)</label>
        <input value="{{old('gameScore')}}" required name="gameScore" type="number" max="10" min="0" step="0.1" class="form-control" id="score" >
    </div>
    <div class="mb-2">
        <label for="length" class="form-label">Продолжительность игры (в часах)</label>
        <input value="{{old('length')}}" min="0" required name="length" type="number" class="form-control" id="length" >
    </div>
    <div class="mb-2">
        <label for="date" class="form-label">Дата выхода игры</label>
        <input value="{{old('date')}}" name="releaseDate" type="date" class="form-control" id="date" >
    </div>
    <div class="mb-2">
      <label for="developer">Разработчик игры</label>
      <select required name="developer_id" class="form-select" aria-label="Default select example" id="developer">
        @foreach($devs as $dev)
        <option {{old('developer_id') == $dev->id ? 'selected' : ''}} value="{{$dev->id}}">{{$dev->title}}</option>
        @endforeach
      </select>
   </div>
   <div class="mb-2">
    <label for="genres">Жанры игры (зажмите ctrl для того чтобы выделить несколько жанров)</label>
    <select required name="genres[]" class="form-select" multiple aria-label="multiple select example" id="genres">
      @foreach($genres as $genre)
      <option value="{{$genre->id}}">{{$genre->title}}</option>
      @endforeach
    </select>
  </div>
    <button style="margin: 20px 0 " type="submit" class="btn btn-primary">Создать игру</button>
  </form>
@endsection




