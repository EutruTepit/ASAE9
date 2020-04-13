<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cliente;

class ClienteController extends Controller
{
    function addCliente(Request $req){
        $nome     = $req->input('nome');
        $endereco = $req->input('endereco');
        $cep      = $req->input('cep');
        $cidade   = $req->input('cidade');
        $estado_id   = $req->input('estado');

        $cliente = new Cliente();
        $cliente->nome      = $nome;
        $cliente->endereco  = $endereco;
        $cliente->cep       = $cep;
        $cliente->cidade    = $cidade;
        $cliente->estado_id = $estado_id;

        if($cliente->save()){
            $msg = "Cliente $cliente->nome adicionado com sucesso";
        }else{
            $msg = "Cliente não cadastrado";
        }

        return view("resultado", ["mensagem" => $msg]);
    }

    function listarCliete(){
        $clientes = Cliente::all();
        return view("lista", ["clientes" => $clientes]);
    }

}
