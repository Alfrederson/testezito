<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Cliente;
use App\Repositories\ClienteRepository;


// Vistas
// gostei de como o laravel tira essa dependência literalmente do além
Route::get('/', function (ClienteRepository $repo) {
    return view('index',[
        "clientes" => $repo->getAll()
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
Route::post('/clientes/criar', function (Request $request, ClienteRepository $repo ){
    $nome    = $request->input("nome");
    $cic     = $request->input("cic");
    $endereco= $request->input("endereco");

    $cliente = new Cliente(0, $nome, $cic, $endereco);
    $repo->create($cliente);

    return redirect('/');
});

// Usando post só por causa do form, que não aceita método
// put ou patch.
Route::post('/clientes/editar/{id}', function (int $id, Request $request, ClienteRepository $repo){
    $nome     = $request->input("nome");
    $cic      = $request->input("cic");
    $endereco = $request->input("endereco");

    $cliente = new Cliente($id, $nome, $cic, $endereco);
    $repo->update($cliente);

    return redirect('/');
});

Route::post('/clientes/deletar/{id}', function (int $id, ClienteRepository $repo){
    $repo->delete($id);
    return redirect('/');
});