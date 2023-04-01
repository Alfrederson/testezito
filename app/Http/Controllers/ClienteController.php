<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Repositories\ClienteRepository;
use App\Models\Cliente;

class ClienteController extends Controller{
    //
    public function __construct(ClienteRepository $repo){
        $this->repo = $repo;
    }

    public function getAll(){
        return $this->repo->getAll();
    }

    public function index(){
        return $this->getAll();
    }

    public function show($id){
        return $this->repo->get($id);
    }

    public function store(Request $request){
        $dados = $request->validate([
            'nome'     => ['required', 'unique:clientes', 'max:64'],
            'cic'      => ['required', 'unique:clientes'],
            'endereco' => ['required']
        ]);
        $cliente = new Cliente(0, $dados["nome"], $dados["cic"], $dados["endereco"]);
        $this->repo->create($cliente);
        return "OK";
    }

    public function update(int $id, Request $request){
        $dados = $request->validate([
            'nome'     => ['required', 'unique:clientes,nome,'.$id, 'max:64'],
            'cic'      => ['required', 'unique:clientes,cic,'.$id],
            'endereco' => ['required']
        ]);

        $cliente = new Cliente($id, $dados["nome"], $dados["cic"], $dados["endereco"]);
        $this->repo->update($cliente);
        return "OK";
    }

    public function destroy($id){
        $this->repo->delete($id);
        return "OK";
    }
}
