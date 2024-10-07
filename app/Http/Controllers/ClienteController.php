<?php

namespace App\Http\Controllers;
use Iluminate\Http\Response;
use Illuminate\Http\Request;

class ClienteController extends Controller
{
    


    public function salvar()
    {

    }

    public function listar()
    {
       return ApiResponse::success(data: ["nome" => "Lucas"]);
    }

    public function editar(int $id)
    {

    }

    public function excluir(int $id)
    {

    }

}