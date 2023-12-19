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
    <div class="container">
        <ul class="row p-0">
            @foreach($series as $serie)
                <li class="col-sm-3 mb-3 mb-sm-0 list-group-item">
                    <div class="card">
                        <div class="card-header text-center">
                            <h5 class="card-title">{{ $serie->nome }}</h5>
                        </div>
                        <img src="{{ asset('storage/' . $serie->cover_path) }}" class="rounded-0" alt="Imagem da serie {{ $serie->nome }}">
                        <div class="card-body">
                            <p class="card-text">{{ $serie->nome }}</p>
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
                        </div>
                    </div>
                </li>
                <x-series.delete-modal title="{{$serie->nome}}" seriesId="{{$serie->id}}" />
            @endforeach
        </ul>
    </div>
</x-layout>
