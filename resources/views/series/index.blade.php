<x-layout title="Séries">

    <a href="/series/criar" class="btn btn-dark mb-2">Adicionar</a>

    <ul class="list-group">
        @foreach($series as $serie)
            <li class="list-group-item"> {{ $serie->name }} </li>
        @endforeach
    </ul>

    <scrip>
        <!-- TODO Desta forma ele retorna um Json, mas com erros de caracteres
        //const series = {{ json_encode( $series ) }};
        -->
        <!-- const series = {{ Js::from( $series ) }};-->
    </scrip>

</x-layout>
