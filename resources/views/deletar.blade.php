<x-layout>
    <h1>Deletar mesmo o registro de {{ $cliente->nome }}?<h1>
    <p>Isso acarretará em instauração de processo administrativo.</p>

    <form action="/clientes/deletar/{{$cliente->id}}" method="post">
        @csrf
        <button type="submit">SIM</button>
        <button type="button" onclick="history.back()">Cancelar</button>
    </form>
</x-layout>