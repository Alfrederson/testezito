<?php

namespace App\Repositories;

use App\Models\Cliente;

use Illuminate\Support\Facades\DB;

// Isso pode ser adequadamento substituído por um genérico, ex: Repository<Cliente>
// mas PHP não tem genérico, apenas workarounds pra conseguir fazer a mesma coisa.

class ClienteRepository implements IRepository{

    public function getAll(){
        return DB::table("clientes")->get();
    }

    public function get($id){
        return DB::table("clientes")->where("id","=",$id)->first();
    }

    public function delete($id){
        return DB::table("clientes")->where("id","=",$id)->delete();
    }

    public function create($cliente){
        return DB::insert("insert into clientes (nome, cic, endereco) values (?, ?, ?)",[
                $cliente->nome,
                $cliente->cic,
                $cliente->endereco
            ]);
    }

    public function update($cliente){
        return DB::update("update clientes set nome = ?, cic = ?, endereco = ? WHERE id = ?",[
                $cliente->nome,
                $cliente->cic,
                $cliente->endereco,
                $cliente->id
            ]);
    }
}