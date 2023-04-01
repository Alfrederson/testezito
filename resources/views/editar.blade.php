<x-layout>
    <form action="/clientes/editar/{{ $cliente->id }}" method="post">
        @csrf
        <table>
            <tr>
                <td>Nome:</td>
                <td><input type="text" name="nome" required value="{{ $cliente->nome }}"/></td>
            </tr>
            <tr>
                <td>CIC:</td>
                <td><input type="text" name="cic" required value="{{ $cliente->cic }}"/></td>
            </tr>
            <tr>
                <td>Endereço:</td>
                <td><input type="text" name="endereco" required value="{{ $cliente->endereco }}"/></td>
            </tr>
        </table>
        <input type="submit"/>
        <button type="button" onclick="history.back()">Cancelar</button>
    </form>
</x-layout>