@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><i class="bi bi-person-fill"></i> {{ __('Dashboard') }} </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>                        
                    @endif
                    <div id="home">                                   
                    <a class="nav-link" href="/meusgames"><i class="bi bi-controller"></i> Meus games </a><br>
                    <a class="nav-link" href="/meusconsoles"> <i class="bi bi-joystick"></i> Meus consoles </a>                    
                    <br>
                    <div>                        
                        <form action="/home" method="GET">
                            <input class="" type="text" id="search" name="search" class"form-control" placeholder="Pesquisar Game...">
                            <a href="" class="btn btn-warning delete-btn"><ion-icon name="create-outline"></ion-icon><i class="bi bi-search"></i></a>
                        </form>
                    </div><br>

                    <div>                        
                        <form action="/" method="GET">                            
                            <input class="" type="text" id="search" name="search" class"form-control" placeholder="Pesquisar Console...">
                            <a href="#" class="btn btn-info edit-btn"><ion-icon name="create-outline"></ion-icon><i class="bi bi-search"></i></a> 
                        </form>
                    </div><br>

                    <div>                        
                        <form action="/" method="GET">
                            <input class="" type="text" id="search" name="search" class"form-control" placeholder="Pesquisar Interesse...">
                            <a href="#" class="btn btn-success"><ion-icon name="create-outline"></ion-icon><i class="bi bi-search"></i></a>
                        </form>
                    </div>
                    </div><br>                                     
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
