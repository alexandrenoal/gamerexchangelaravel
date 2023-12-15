@extends('layouts.app')

@section('title', 'Editando: ') 

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header"><i class="bi bi-pen-fill"></i></i> {{ Auth::user()->name }} - {{ __('Editando') }} - <b>{{ $game->nome }} </b></div>
                <div id="event-create-container" class="col-md-6 offset-md-3">
                    <br>
                    <form action="/meusgames/update/{{ $game->id }}" method="POST" enctype="multipart/form-data"> 
                        @csrf 
                        @method('PUT')
                        <div class="form-group">
                            <label for="title">Nome:</label>
                            <input type="text" class="form-control" id="nome" name="nome" value="{{ $game->nome }}">
                        </div>
                        <div class="form-group">
                            <label for="title">Plataforma:</label>
                            <input type="text" class="form-control" id="plataforma" name="plataforma" value="{{ $game->plataforma }}">
                        </div> 
                        <div class="form-group">
                            <label for="title">Descrição:</label>
                            <input type="text" class="form-control" id="descricao" name="descricao" value="{{ $game->descricao }}">
                        </div> 
                        <div class="form-group">
                            <label for="title">Endereço:</label>
                            <input type="text" class="form-control" id="endereco" name="endereco" value="{{ $game->endereco }}">
                        </div>
                        <div class="form-group">
                        <label for="image">Imagem do game:</label>
                        <input type="file" id="image" name="image" class="form-control-file">
                    </div>
                        <br>        
                        <input type="submit" class="btn btn-primary" value="Editar game"><br><br>
                    </form>
                    
                    </div>

                </div>

            </div>
        </div>
    </div>
</div>
@endsection