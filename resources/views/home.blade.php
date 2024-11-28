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
                    <div class="container d-flex" style="gap: 10px;">
                        <div class="card" style="width: 18rem;">
                            <img src="img/nintendo64.jpg" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Meus games</h5>
                                    <p class="card-text">Organizar biblioteca de games</p>
                                    <a href="/meusgames" class="btn btn-primary">Meus games</a>
                                </div>
                        </div>
                        <div class="card" style="width: 18rem;">
                            <img src="img/xxx.jpg" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Meus consoles</h5>
                                    <p class="card-text">Organizar consoles </p>
                                    <a href="/meusconsoles" class="btn btn-primary">Meus consoles</a>
                                </div>
                        </div>
                        <div class="card" style="width: 18rem;">
                            <img src="img/museu_nintendo.jpg" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Minha vitrine</h5>
                                    <p class="card-text">Gerenciar minha vitrine </p>
                                    <a href="/vitrine" class="btn btn-primary">Minha vitrine</a>
                                </div>
                        </div>
                    </div><br>

                    <div id="home"><h4>Pesquisas</h4></div><br><br>
                    
                    
                    <div class="container d-flex" style="gap: 18px;">
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
