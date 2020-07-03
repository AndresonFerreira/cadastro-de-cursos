<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Contato;

class ContatoController extends Controller
{
    public function index()
    {

        $contatos = [
            (object)["nome" =>"Maria", "tel"=>"8383"],
            (object)["nome" =>"Pedro", "tel"=>"12383"],
        ];

        $contato = new Contato();
        $con = $contato->lista();
        dd($con->nome);

        return view('contato.index', compact('contatos'));
        // return view('contato.index', compact('contatos', 'outra lista aqui'));
    }

    public function criar(Request $req)
    {
        dd($req->all());
        return "esse é o criar do cContatoController";
    }

    public function editar()
    {
        return "esse é o editar do cContatoController";
    }
}
