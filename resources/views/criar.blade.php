<x-layout>
    <form action="/clientes/criar" method="post">
        @csrf
        <table>
            <tr>
                <td>Nome:</td>
                <td><input type="text" name="nome" required /></td>
            </tr>
            <tr>
                <td>CIC:</td>
                <td><input type="text" name="cic" required/></td>
            </tr>
            <tr>
                <td>Endereço:</td>
                <td><input type="text" name="endereco" required/></td>
            </tr>
        </table>
        <button type="submit">Criar</button>
        <button type="button" onclick="history.back()">Cancelar</button>
    </form>
</x-layout>