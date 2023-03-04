@extends ('layouts.admin.games.index')

@section('content')

<ul>
    @foreach($games as $game)
        <li> <a href={{route("$section.games.show",$game->id)}}>{{ $game->title}} </a></li>
    @endforeach  
</ul>
<div style="margin-left: 20px;width:500px">{{$games->withQueryString()->links()}}</div>

<a style="margin-left: 20px" class="btn btn-primary" href={{route("$section.games.create")}}>Создать игру</a>
<a style="margin-left: 20px" class="btn btn-primary" href={{route("$section.games.restore")}}>Восстановить удалённые игры</a>
@endsection

