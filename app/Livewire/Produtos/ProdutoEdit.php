<?php

namespace App\Livewire\Produtos;

use App\Models\Produto;
use Livewire\Component;

class ProdutoEdit extends Component
{
    public $nome;
    public $cor;
    public $textura;
    public $peso;
    public $unidade_medida;
    public $aplicacao;
    public $prazo_validade;
    public $preco;
    public $qtd_estoque;
    public $qtd_minima;

    public function update(){
        
    }

    public function render()
    {
        return view('livewire.produtos.produto-edit');
    }
}
