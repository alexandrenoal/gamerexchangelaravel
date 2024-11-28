@extends('layouts.app')

@section('title', 'Meus consoles: ') 

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header"><i class="bi bi-people-fill"></i> {{ __('Amigos') }} 
                
                </div>

                <div class="col-md-10 offset-md-1 games-container">
                    <div class="game-container"><br>
                    <h3>Lista de amigos</h3>
                    <i class="fa-solid fa-users"></i>

                    @foreach($user as $a)    
                            <hr>    
                            <p><a class="nav-link" href="/vitrine/{{ $a->name }}"></b> {{ $a->name }}</p>
                                   
                            
                        @endforeach

                <div>    
                    
            </div>   
                         
        </div>
        
        
    </div>
                    
</div>
@endsection