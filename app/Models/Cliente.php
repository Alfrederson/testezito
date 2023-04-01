<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model{
    public $id;
    public $nome;
    public $cic;
    public $endereco;

    public function __construct($id, $nome, $cic, $endereco){
        $this->id = $id;
        $this->nome = $nome;
        $this->cic  = $cic;
        $this->endereco = $endereco;
    }

}
