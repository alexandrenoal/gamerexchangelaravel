@extends('layouts.app')

@section('title', 'Vitrine: ') 

@section('content')

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
                    <a class="nav-link" href="/meusgames">Gerenciar games</a><br>                

                    @foreach($games as $a)                            
                        <div>
                            <img src="/img/games/{{ $a->image }}" class="image"> 
                        </div>          
                    @endforeach
                    </div>                  
                    
                    <h3>Consoles</h3>
                    <a class="nav-link" href="/meusconsoles">Gerenciar consoles</a>
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