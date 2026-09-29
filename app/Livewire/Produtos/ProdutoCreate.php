<?php

namespace App\Livewire\Produtos;

use App\Models\Produto;
use Livewire\Component;

class ProdutoCreate extends Component
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

    public function salvar(){

        $this->validate([
            'nome' =>  'required',
            'cor' => 'required',
            'textura' => 'required',
            'peso' => 'required',
            'unidade_medida' => 'required',
            'aplicacao' => 'required',
            'prazo_validade' => 'required|date',
            'preco' => 'required|numeric',
            'qtd_estoque' => 'required|integer',
            'qtd_minima' => 'required|integer',
        ]);

        Produto::create([
            'nome' => $this->nome,
            'cor' => $this->cor,
            'textura' => $this->textura,
            'peso' => $this->peso,
            'unidade_medida' => $this->unidade_medida,
            'aplicacao' => $this->aplicacao,
            'prazo_validade' => $this->prazo_validade,
            'preco' => $this->preco,
            'qtd_estoque' => $this->qtd_estoque,
            'qtd_minima' => $this->qtd_minima,
        ]);

        session()->flash('success', 'Produto cadastrado com sucesso');
        return redirect()->route('produto.index');
        



    }

    public function render()
    {
        return view('livewire.produtos.produto-create');
    }
}
