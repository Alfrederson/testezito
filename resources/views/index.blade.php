<x-layout>
    <a href="/criar">Cadastrar</a>

    <table class="table">
        <thead>
            <td>Nome</td>
            <td>CIC</td>
            <td>Endereço</td>
            <td></td>
        </thead>
        <tbody>
        @foreach ($clientes as $cliente)
            <tr>
                <td>{{ $cliente->nome }}</td>
                <td>{{ $cliente->cic }}</td>
                <td>{{ $cliente->endereco }}</td>
                <td>
                    <a href="/editar/{{ $cliente->id }}">Editar</a>
                    <a href="/deletar/{{ $cliente->id }}">Deletar</a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</x-layout>