<?php

use App\Livewire\Produtos\ProdutoCreate;
use App\Livewire\Produtos\ProdutoIndex;
use Illuminate\Support\Facades\Route;

Route::get('/produto/create', ProdutoCreate::class)->name('produto.create');
Route::get('/produto', ProdutoIndex::class)->name('produto.index');
