@extends('layouts.app')

@section('title', 'Vitrine: ') 

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header"><i class="bi bi-star-fill"></i> {{ __('Vitrine') }} - 
                
                    @if(request()->route('username'))
                        Usuario: {{ request()->route('username') }} 
                    @else
                        {{ Auth::user()->name }}
                    @endif 
                
                </div>                                 

                <div class="col-md-10 offset-md-1 games-container">
                    <div class="game-container"><br>
                    <h3>Games</h3>                 
                    <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
                    <ul class="navbar-nav ms-auto">
                    <li class="nav-item">    
                        <a class="nav-link" href="/meusgames">Gerenciar games</a><br>                
                    </li>
                    <li>       
                        @php
                            $username = request()->route('username');
                        @endphp       

                        @if($username)
                            <a class="nav-link" href="/mensagem/{{ $username }}">Mensagens</a><br>
                        @else
                            <a class="nav-link" href="/mensagem">Mensagens</a><br>
                        @endif
                    </li>
                    </ul></nav>
                    @foreach($games as $a)                            
                        <div>
                            <img src="/img/games/{{ $a->image }}" class="image"> 
                        </div>          
                    @endforeach
                    </div>                  
                    
                    <h3>Consoles</h3>
                    <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
                    <ul class="navbar-nav ms-auto">
                    <li class="nav-item"> 
                        <a class="nav-link" href="/meusconsoles">Gerenciar consoles</a>
                    </li>
                    </ul></nav>
                    @foreach($consoles as $a)                            
                        <div>
                            <img src="/img/consoles/{{ $a->image }}" class="imageconsole">
                        </div>            
                    @endforeach 
                    
                <div>    
                    
            </div>   
                         
        </div>        
        
    </div>
                    
</div>

    

@endsection