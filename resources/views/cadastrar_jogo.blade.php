@extends('layouts.app')

@section('title', 'Games')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><i class="bi bi-controller"></i> {{ __('Cadastrar Game') }} </div>

            <div id="event-create-container" class="col-md-6 offset-md-3">
                <br>   
                    <form action="/postagem_jogo" method="POST" enctype="multipart/form-data"> 
                        @csrf 
                        <div class="form-group">
                            <label for="title">Nome:</label>
                            <input type="text" class="form-control" id="nome" name="nome" placeholder="Nome do Game">
                        </div>
                        <div class="form-group">
                            <label for="title">Plataforma:</label>
                            <input type="text" class="form-control" id="plataforma" name="plataforma" placeholder="Console do game">
                        </div> 
                        <div class="form-group">
                            <label for="title">Descrição:</label>
                            <input type="text" class="form-control" id="descricao" name="descricao" placeholder="Descrição">
                        </div> 
                        <div class="form-group">
                            <label for="title">Endereço:</label>
                            <input type="text" class="form-control" id="endereco" name="endereco" placeholder="Endereço">
                        </div>
                        <div class="form-group">                            
                            <input type="hidden" class="form-control" id="username" name="username" value="{{ Auth::user()->name }}">
                        </div>
                        <div class="form-group">
                            <label for="image">Imagem do game:</label>
                            <input type="file" class="inputfile" name="image" class="form-control-file">
                        </div>                        
                        <br>        
                        <input type="submit" class="btn btn-info" value="Cadastrar Game"><br><br>      
                        
                    </form>    
                </div>
            </div>
            @endsection