<x-layout title="Nova Série">
    <form action="/series/salvar" method="post">
        <!-- TODO Cross site request for do i -->
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Nome: </label>
            <input type="text" id="name" name="name" class="form-control">
        </div>
        <button type="submit" class="btn btn-primary mb-3">Adicionar</button>
    </form>
    <hr>
    <a href="/series" class="btn btn-dark mb-2">Voltar Lista</a>
</x-layout>

