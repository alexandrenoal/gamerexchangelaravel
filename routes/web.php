<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use App\http\Controllers\GameController;
use App\Http\Controllers\UserController;

Route::get('/amigos', [UserController::class, 'amigos']);

Route::get('/mensagem', [GameController::class, 'mensagem']);
Route::get('/mensagem/{username}', [GameController::class, 'show_mensagens']);
Route::get('/home', [GameController::class, 'index']);
Route::get('/explorar', [GameController::class, 'explorar']);
Route::get('/postagem_jogo', [GameController::class, 'games']); 
Route::get('/postagem_console', [GameController::class, 'consoles']); 
Route::get('/meusgames', [GameController::class, 'meusgames']);
Route::get('/meusconsoles', [GameController::class, 'meusconsoles']);

Route::get('/mensagem', [GameController::class, 'show_mensagens']);

Route::get('/vitrine', [GameController::class, 'show_vitrine']);
Route::get('/vitrine/{username}', [GameController::class, 'show_vitrine_amigos']);
Route::get('/editgames/{id}', [GameController::class, 'editgames']);

Route::post('/postagem_jogo', [GameController::class, 'cadastrogame']);
Route::post('/postagem_console', [GameController::class, 'cadastroconsole']);
Route::post('/mensagem', [GameController::class, 'cadastromensagem']);

Route::put('meusgames/update/{id}', [GameController::class, 'gameupdate']); 

Route::delete('/meusgames/{id}', [GameController::class, 'destroy']);   

Route::get('/', function () {
    return view('welcome');
});

//Route::get('/mensagem', function () {
//    return view('mensagem');
//});

Route::get('/comentario_jogo', function () {
    return view('comentario_jogo');
});

Route::get('/cadastrar_jogo', function () {
    return view('cadastrar_jogo');
});

Route::get('/cadastrar_console', function () {
    return view('cadastrar_console');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
