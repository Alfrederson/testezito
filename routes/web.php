<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Cliente;
use App\Repositories\ClienteRepository;
use App\Http\Controllers\ClienteController;

// Vistas
// gostei de como o laravel tira essa dependência literalmente do além
// se fosse criar uma "api rest", teria usado Route::resource e um 
// "controller"

Route::get('/', function (ClienteController $c) {
    return view('index',[
        "clientes" => $c->getAll()
    ]);
});

Route::get('/editar/{id}', function(int $id, ClienteRepository $repo){
    $cliente = $repo->get($id);
    if(!is_object($cliente)){
        return redirect("/");
    }
    return view('editar',[
        "cliente" => $cliente
    ]);
});

Route::get('/criar', function(){
    return view('criar');
});

Route::get('/deletar/{id}', function($id, ClienteRepository $repo){
    $cliente = $repo->get($id);

    if(!is_object($cliente)){
        return redirect("/");
    }

    return view('deletar',[
        "cliente" => $cliente
    ]);
});

// Criações / Mutações.
Route::post('/clientes/criar', function (Request $request, ClienteController $c ){
    $c->store($request);
    return redirect('/');
});

// Usando post só por causa do form, que não aceita método
// put ou patch.
Route::post('/clientes/editar/{id}', function (int $id, Request $request, ClienteController $c){
    $c->update($id, $request);
    return redirect('/');
});

Route::post('/clientes/deletar/{id}', function (int $id, ClienteRepository $repo){
    $repo->delete($id);
    return redirect('/');
});