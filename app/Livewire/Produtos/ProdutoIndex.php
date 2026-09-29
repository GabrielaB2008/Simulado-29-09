<?php

namespace App\Livewire\Produtos;

use App\Models\Produto;
use Livewire\Component;

class ProdutoIndex extends Component
{
    public function render()
    {
        $produtos = Produto::all();
        return view('livewire.produtos.produto-index', compact('produtos'));
    }
}
