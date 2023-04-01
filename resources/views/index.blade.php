<x-layout>
    <a href="/criar">Cadastrar</a>

    <div class="table-holder">
        <table>
            <thead>
                <td>🧍 Nome</td>
                <td>💳 CIC</td>
                <td>📍 Endereço</td>
                <td>Criação</td>
                <td>Alteração</td>
                <td></td>
            </thead>
            <tbody>
            @foreach ($clientes as $cliente)
                <tr>
                    <td>{{ $cliente->nome }}</td>
                    <td>{{ $cliente->cic }}</td>
                    <td>{{ $cliente->endereco }}</td>
                    <td>{{ $cliente->created_at}}</td>
                    <td>{{ $cliente->updated_at}}</td>
                    <td style="padding-left:2em">
                        <a href="/editar/{{ $cliente->id }}">📝 Editar</a>
                        <a href="/deletar/{{ $cliente->id }}">🗑️ Deletar</a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
</div>
</x-layout>