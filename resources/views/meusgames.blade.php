@extends('layouts.app')

@section('title', 'Meus games: ') 

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header"><i class="bi bi-controller"></i> {{ __('Meus games') }}  <a href="/home" class="bi bi-arrow-left"></a><br></div>
                <div class="col-md-10 offset-md-1 dashboard-events-container">
                <br>
                <a class="nav-link" href="/cadastrar_jogo">Cadastrar novo game</a>                 
                    @if(count($games) > 0)         
                    <table class="table">
                        <thead>
                            <tr>                                            
                                <th scope="col">Nome</th>
                                <th scope="col">Console</th>
                                <th scope="col">Capa</th>
                                <th scope="col">Ações</th>
                            </tr>
                        </thead>
                    
                        <tbody>
                        @foreach($games as $game)            
                            <tr>
                                
                                <td><a href="/meusgames{{ $game->id }}"> {{ $game->nome }} </a></td>
                                <td><a href="/meusgames{{ $game->id }}"> {{ $game->plataforma }} </a></td>
                                <td><a href="/meusgames{{ $game->id }}"> <img src="/img/games/{{ $game->image }}" class="meusgames" ></td>
                                <td>
                                    <a href="/editgames/{{ $game->id }}" class="btn btn-info edit-btn"><ion-icon name="create-outline"></ion-icon>Editar</a> 
                                    <form action="/meusgames/{{ $game->id }}" method="POST">
                                    @csrf
                                    @method('Delete')        
                                    <button type="submit" class="btn btn-danger delete-btn"><ion-icon name="trash-outline"></ion-icon>Deletar</button>
                                    </form> 
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <br>
                    @else
                    <p>Você ainda não tem games, <a href="/cadastrar_jogo">Cadastrar game</a></p>
                    @endif
                    </div>

                </div>
            </div>
        </div>
</div>

@endsection