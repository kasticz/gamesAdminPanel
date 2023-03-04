@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    @if ( isset($data))
                    <h2 style="text-align: center">Что то пошло не так</h2>
                    <p>{{$data}}</p>                    
                    @endif
                    {{__('Вы залогинены!')}}

                </div>
            </div>
            <a style="margin-top: 20px" class="btn btn-primary" href={{route('admin.index')}}>Административная панель</a>
            <a style="margin:20px 0 0 20px" class="btn btn-primary" href={{route('user.index')}}>Мои игры</a>
        </div>
    </div>
</div>
@endsection
