<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//use App\Http\Request;

class UdemyController extends Controller
{
    public function index()
    {
        $contatos = [
            (object)["nome"=>"Fernanda", "Idade"=>"32 anos"],
            (object)["nome"=>"Jessica", "Idade"=>"29 anos"]
        ];
        return view ('contatos.index', compact ('contatos'));
    }

    public function create()
    {
        return "Controller Criar";
    }

    public function edit()
    {
        return "Controller Editar";
    }
    //
}
