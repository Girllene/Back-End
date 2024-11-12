<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProdutoController extends Controller
{
    public function create (){
        return view('produtos.create');
    }

    public function store (Request $request){
        $request->validate([
            'nome'=> 'required|string|max:200',
            'descricao'=> 'nullable|text',
            'tamanho'=> 'nullable|string:10',
            'cor'=> 'required|',
            'preco'=> 'required|',
            'quantidade'=> 'required|',
            'imagem'=> 'required|',
        ])
    }
    
}
