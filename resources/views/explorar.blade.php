@extends('layouts.app')

@section('title', 'Meus consoles: ') 

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header"><i class="bi bi-star-fill"></i> {{ __('Explorar') }} 
                
                </div>

                <div class="col-md-10 offset-md-1 games-container">
                    <div class="game-container"><br>
                    
                        @foreach($games as $a)    
                                
                            <a href="/vitrine/{{ $a->username }}">
                                <div>
                                <a href=""> <img src="/img/games/{{ $a->image }}" class="image"></a>
                                </div>            
                        @endforeach    

                        @foreach($consoles as $a)    
                               
                            <a href="/vitrine/{{ $a->username }}">
                                <div>
                                    <img src="/img/consoles/{{ $a->image }}" class="image">
                                </div>            
                        @endforeach
                        

                <div>    
                    
            </div>   
                         
        </div>
        
        
    </div>
                    
</div>
@endsection