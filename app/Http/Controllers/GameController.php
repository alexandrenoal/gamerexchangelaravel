<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Models\Game;
use App\Models\Console;
use App\Models\User;

class GameController extends Controller
{

    public function games(){ 
       
        $games = Game::all(); 
    
        return view('postagem_jogo',['games' => $games]); 
    }

    public function consoles(){ 
       
        $consoles = Console::all(); 
    
        return view('postagem_console',['consoles' => $consoles]); 
    }

    public function cadastrogame(Request $request) { 

        $game = new Game;

        $game->nome = $request->nome;
        $game->plataforma = $request->plataforma; 
        $game->descricao = $request->descricao;
        $game->endereco = $request->endereco;  
        $game->username = $request->username; 
        
        $user = auth()->user();
        $game->user_id = $user->id;
        

        if($request->hasFile('image') && $request->file('image')->isValid()) {

            $requestImage = $request->image;

            $extension = $requestImage->extension();

            $imageName = md5($requestImage->getClientOriginalName() . strtotime("now")) . "." . $extension;

            $requestImage->move(public_path('img/games'), $imageName);

            $game->image = $imageName;
        }
        
        $game->save();        

        return redirect('/postagem_jogo')->with('msg', 'Game cadastrado com sucesso!');;

    }   

    public function cadastroconsole(Request $request) { 

        $console = new Console;

        $console->nome = $request->nome;
        $console->plataforma = $request->plataforma; 
        $console->descricao = $request->descricao;
        $console->endereco = $request->endereco; 
        $console->username = $request->username;   
        
        $user = auth()->user();
        $console->user_id = $user->id;

        if($request->hasFile('image') && $request->file('image')->isValid()) {

            $requestImage = $request->image;

            $extension = $requestImage->extension();

            $imageName = md5($requestImage->getClientOriginalName() . strtotime("now")) . "." . $extension;

            $requestImage->move(public_path('img/consoles'), $imageName);

            $console->image = $imageName;
        }

        $console->save();

        return redirect('/postagem_console')->with('msg', 'Console cadastrado com sucesso!');;

    }   

    public function meusgames(){ 
       
        $user = auth()->user(); //utilizado para que somente os itens cadastrado pelo usuario sejam exibidos

        $games = $user->games;                
    
        return view('meusgames',['games' => $games]); 
    }

    public function meusconsoles(){ 
       
        $user = auth()->user(); //utilizado para que somente os itens cadastrado pelo usuario sejam exibidos

        $consoles = $user->consoles;                
    
        return view('meusconsoles',['consoles' => $consoles]); 
    }

    public function editgames($id){

        $games = Game::findOrFail($id);

        return view('editgames', ['game' => $games]);

    }

    public function gameupdate(Request $request){

        $data = $request->all();

        if($request->hasFile('image') && $request->file('image')->isValid()) {

            $requestImage = $request->image;

            $extension = $requestImage->extension();

            $imageName = md5($requestImage->getClientOriginalName() . strtotime("now")) . "." . $extension;

            $requestImage->move(public_path('img/games'), $imageName);

            $data['image'] = $imageName;
        }
          
        Game::findOrFail($request->id)->update($data);

        return redirect('/meusgames')->with('msg', 'Evento editado com sucesso!');

    }

    public function destroy($id) {

        Game::findOrFail($id)->delete();        

        return redirect('/meusgames')->with('msg', 'Game excluído!');
    }

    public function index(){ 
       
        $search = request('search'); 

        if($search) {

            $games = Game::where([
                ['nome', 'like', '%'.$search.'%']
            ])->get();

        } else {
            $games = Game::all();
        }        
    
        return view('home',['games' => $games, 'search' => $search ]); 
    }
  
    public function show_vitrine(){
       
        $userId = Auth::id();                    
    
        $games = Game::where('user_id', $userId)->get();
        $consoles = Console::where('user_id', $userId)->get();

        return view('vitrine', compact('games', 'consoles'));
    }   

    public function show_vitrine_amigos($username){                                  
    
        $games = Game::where('username', $username)->get();
        $consoles = Console::where('username', $username)->get();

        return view('vitrine', compact('games', 'consoles'));
    }
        
}
