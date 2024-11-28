@extends('layouts.app')

@section('title', 'Consoles')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header"><i class="bi bi-pen"></i> {{ __('Mensagens') }} 

                    @if(request()->route('username'))
                        Usuario: {{ request()->route('username') }} 
                    @else
                        {{ Auth::user()->name }}
                    @endif 
                    
                </div>
                
                    <div class="col-md-10 offset-md-1 dashboard-events-container"></div>

                    <div id="event-create-container" class="col-md-6 offset-md-3"><br>
                        
                        <form action="/mensagem" method="POST" enctype="multipart/form-data"> 
                        @csrf
                        <div class="form-group">
                            <label for="title">Mensagem:</label>
                            <input type="textarea" class="form-control" id="mensagem" name="mensagem" placeholder="">
                        </div>
                        <div class="form-group">                                                      
                            <input type="hidden" class="form-control" id="mensageiro" name="mensageiro" value="{{ Auth::user()->name }}" placeholder="{{ Auth::user()->name }}">
                        </div> 
                        <div class="form-group">                           
                            <input type="text" class="form-control" id="username" name="username" value="{{ request()->route('username') }}" placeholder="{{ request()->route('username') }}">
                        </div>                       
                        <input type="submit" class="btn btn-info" value="Enviar mensagem"><br><br>   
                    </form>    


                    @foreach($mensagens as $a)    
                            <hr>    
                            <p><a class="nav-link" href="/vitrine/{{ $a->username }}"><b>Mensageiro:</b> {{ $a->mensageiro }} <b>Mensagens:</b> {{ $a->mensagem }} </p>
                                <div id="image-container" class="col-md-6">
                                    
                                </div>            
                        @endforeach

                        </div>       
                    </div>
                <br>
        </div>
    </div>
</div>  

@endsection