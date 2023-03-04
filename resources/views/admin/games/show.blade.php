
@extends ('layouts.admin.games.index')

@section('content')
<ul>
    <li> <span>Название игры</span> - <span>{{$game->title}}</span><hr></li>
    <li> <span>Ваша оценка игры</span> - <span>{{$game->gameScore}}</span><hr></li>
    <li> <span>Продолжительность игры</span> - <span>{{$game->length}} ч.</span><hr></li>
    <li> <span>Дата создания игры</span> - <span>{{date_format(date_create($game->releaseDate) ,'d.m.Y')}}</span><hr></li>   
    <li><span>Разработчик игры</span> - <span>{{$game->developer->title}}</span> <hr></li>
    <li><span>Жанры игры</span> - <span>{{$game->genresString}}</span> <hr></li>   
</ul> 
<a style="margin-left: 20px" class="btn btn-primary" href={{route("$section.games.index")}}>Назад</a>
<a style="margin-left: 20px" class="btn btn-primary" href={{route("$section.games.edit",$game->id)}}>Редактировать</a>
<form  style="display:inline" action="{{route("$section.games.destroy",$game->id)}}" method="POST">
@csrf
@method('delete')
<input style="margin-left: 20px" class="btn btn-primary" type="submit" value="Удалить">



</form>



@endsection
