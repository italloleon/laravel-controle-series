<x-layout title="Lista de Series">
    @isset($mensagem)
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ $mensagem }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endisset
    <a class="d-inline-block btn btn-dark my-4" href="{{ route('series.create') }}">
        Adicionar Serie
        <i class="bi bi-plus-circle-fill"></i>
    </a>
    <ul class="list-group">
        @foreach($series as $serie)
            <li class="list-group-item list-group-item-light p-3 d-flex justify-content-between align-items-center">
                <span>
                    {{ $serie->nome }}
                </span>

                <div class="action-button d-flex">
                    <a title="Editar serie" href="{{ route('series.show', $serie->id) }}" class="btn btn-primary me-1">
                        <i class="bi bi-eye"></i>
                    </a>
                    <button title="Abrir modal serie" class="btn btn-danger me-1" data-bs-toggle="modal" data-bs-target="#modalSerie{{$serie->id}}">
                        <i class="bi bi-trash"></i>
                    </button>
                    <a title="Editar serie" href="{{ route('series.edit', $serie->id) }}" class="btn btn-warning">
                        <i class="bi bi-pencil-fill"></i>
                    </a>
                </div>
                <x-series.delete-modal title="{{$serie->nome}}" seriesId="{{$serie->id}}">

                </x-series.delete-modal>
            </li>
        @endforeach
    </ul>
</x-layout>
