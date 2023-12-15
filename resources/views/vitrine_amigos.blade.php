@extends('layouts.app')

@section('title', 'Vitrine: ') 

@section('content')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header"><i class="bi bi-star-fill"></i> {{ __('Vitrine ') }} </div>

                <div class="col-md-10 offset-md-1 games-container">
                    <div class="game-container"><br>
                    <h3>Games</h3> 
                    
                    @foreach($games as $a) 
                        {{ $games->nome }}
                    @endforeach
                    
                    
                <div>          
            </div>                
        </div>
    </div>
</div>


@endsection