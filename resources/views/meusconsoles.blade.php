@extends('layouts.app')

@section('title', 'Meus consoles: ') 

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header"><i class="bi bi-controller"></i> {{ __('Meus consoles') }}  <a href="/home" class="bi bi-arrow-left"></div>
                <div class="col-md-10 offset-md-1 dashboard-events-container">
                <br>
                <a class="nav-link" href="/cadastrar_console">Cadastrar novo console</a>  <br>
                    @if(count($consoles) > 0)         
                    <table class="table">
                        <thead>
                            <tr>                                            
                                <th scope="col">Nome</th>
                                <th scope="col">Plataforma</th>
                                <th scope="col">Capa</th>
                                <th scope="col">Ações</th>
                            </tr>
                        </thead>
                    
                        <tbody>
                        @foreach($consoles as $console)            
                            <tr>
                                
                                <td><a class="nav-link" href="/meusconsoles{{ $console->id }}"> {{ $console->nome }} </a></td>
                                <td><a class="nav-link" href="/meusconsoles{{ $console->id }}"> {{ $console->plataforma }} </a></td>
                                <td><a href="/meusconsoles{{ $console->id }}"> <img src="/img/consoles/{{ $console->image }}" class="meusconsoles"></td>
                                <td>
                                    <a href="/editconsoles/{{ $console->id }}" class="btn btn-info edit-btn"><ion-icon name="create-outline"></ion-icon>Editar</a> 
                                    <form action="/meusconsoles/{{ $console->id }}" method="POST">
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
                    <p>Você ainda não tem consoles, <a href="/cadastrar_console">Cadastrar console</a></p>
                    @endif
                    </div>

                </div>
            </div>
        </div>
</div>


@endsection