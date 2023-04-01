<?php

namespace App\Repositories;

// Interface implementada por uma única classe => não faça.
// ou use genéricos, se a linguagem permitir.
interface IRepository{
    public function getAll();
    public function get($id);
    public function delete($id);
    public function create($data);
    public function update($cliente);
}