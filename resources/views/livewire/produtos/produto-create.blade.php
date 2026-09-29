<div>
    <form wire:submit="salvar">
        <h5>Nome</h5>
        <input type="text" wire:model="nome">
        <h5>Cor</h5>
        <input type="text" wire:model="cor">
        <h5>Textura</h5>
        <input type="text" wire:model="textura">
        <h5>Peso</h5>
        <input type="text" wire:model="peso">
        <h5>Unidade de Medida</h5>
        <input type="text" wire:model="unidade_medida">
        <h5>Aplicação</h5>
        <input type="text" wire:model="aplicacao">
        <h5>Prazo de Validade</h5>
        <input type="date" wire:model="prazo_validade">
        <h5>Preço</h5>
        <input type="integer" wire:model="preco">
        <h5>Quantidade no Estoque</h5>
        <input type="integer" wire:model="qtd_estoque">
        <h5>Quantidade Mínima</h5>
        <input type="integer" wire:model="qtd_minima">

        <button type="submit">Salvar</button>
    </form>
</div>
