@extends('layouts.app')

@section('title', 'Games')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header"><i class="bi bi-controller"></i> {{ __('Postagem de Games') }} </div>
                    <div class="col-md-10 offset-md-1 dashboard-events-container">

                    <div id="event-create-container" class="col-md-6 offset-md-3"><br>                     
                        <h4><a class="btn btn-info edit-btn" href="/cadastrar_jogo">Cadastrar game</a></h4>

                        @foreach($games as $a)    
                            <hr>    
                            <p><a href="/vitrine/{{ $a->username }}"><b>Game:</b> {{ $a->nome }} - <b>Console:</b> {{ $a->plataforma }} - <b>Usuário:</b> {{ $a->username }} - <b>Data da publicação:</b> {{ $a->created_at }}</p>
                                <div id="image-container" class="col-md-6"></a>
                                <a href=""> <img src="/img/games/{{ $a->image }}" class="imagepostgame"></a>
                                </div>            
                        @endforeach
                    </div>       
                    <br>
            </div>
        </div>
    </div>
</div>

@endsection