<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FornecedorController extends Controller
{
    public function index(){
        $fornecedores = [
            0 => [
                'nome' => 'Fornecedor 1',
                'status' => 'N',
                'cnpj' => '0',
                'ddd' => '',
                'telefone' => '0000-0000',
            ],
            1 => [
                'nome' => 'Fornecedor 2',
                'status' => 'S',
                'cnpj' => null,
                'ddd' => '35',
                'telefone' => '1234-5678',
            ],
            2 => [
                'nome' => 'Fornecedor 3',
                'status' => 'S',
                'cnpj' => '27.118.510/0001-14',
                'ddd' => '53',
                'telefone' => '3252-4555',
            ],
            3 => [
                'nome' => 'Fornecedor 4',
                'status' => 'N',
                'cnpj' => '59.798.838/0001-15',
                'ddd' => '57',
                'telefone' => '5569-8842',
            ]
        ];
        return view('app.fornecedores.index', compact('fornecedores'));
    }
}
