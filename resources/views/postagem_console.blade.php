@extends('layouts.app')

@section('title', 'Consoles')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header"><i class="bi bi-joystick"></i> {{ __('Postagem de Consoles') }} </div>
                    <div class="col-md-10 offset-md-1 dashboard-events-container">

                    <div id="event-create-container" class="col-md-6 offset-md-3"><br>
                        <h4><a class="btn btn-info edit-btn" href="/cadastrar_console">Cadastrar Console</a><br></h4>

                        @foreach($consoles as $a)    
                            <hr>    
                            <p><a class="nav-link" href="/vitrine/{{ $a->username }}"><b>Console:</b> {{ $a->nome }} - <b>Desenvolvedora:</b> {{ $a->plataforma }} - <b>Usuário:</b> {{ $a->username }} - <b>Data da publicação:</b> {{ $a->created_at }}</p>
                                <div id="image-container" class="col-md-6">
                                    <img src="/img/consoles/{{ $a->image }}" class="imagepostconsole"></a>
                                </div>            
                        @endforeach
                        </div>       
                    </div>
                    <br>
        </div>
    </div>
</div>  

@endsection