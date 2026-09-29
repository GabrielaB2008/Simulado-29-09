<div>
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success')}}
        </div>
    @endif
    @if (session('error'))
        <div class="alert alert-danger">
            {{ session('error')}}
        </div>
    @endif
    <table class="table table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Cor</th>
                <th>Textura</th>
                <th>Peso</th>
                <th>Unidade de Medida</th>
                <th>Aplicação</th>
                <th>Prazo de Validade</th>
                <th>Preço</th>
                <th>Quantidade no Estoque</th>
                <th>Quantidade Mínima</th>
            </tr>
        </thead>

        <tbody>
            @foreach ($produtos as $p)
            <tr>
                <td>{{ $p->id }}</td>
                <td>{{ $p->nome }}</td>
                <td>{{ $p->cor }}</td>
                <td>{{ $p->textura }}</td>
                <td>{{ $p->peso }}</td>
                <td>{{ $p->unidade_medida }}</td>
                <td>{{ $p->aplicacao }}</td>
                <td>{{ $p->prazo_validade }}</td>
                <td>{{ $p->preco }}</td>
                <td>{{ $p->qtd_estoque }}</td>
                <td>{{ $p->qtd_minima }}</td>
            </tr>
            @endforeach
        </tbody>

    </table>
</div>
