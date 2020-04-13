<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cliente;
use App\Estado;

class AppController extends Controller
{
    function estados(){
        $estados = Estado::all();

        return view("cadastroClientes", [ "estados"=> $estados]);
    }
}
