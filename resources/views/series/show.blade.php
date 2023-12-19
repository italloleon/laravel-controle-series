<x-layout title="{{ $serie->nome  }}">
    <hr>
    <div class="container">
        <div class="row">
            <div class="col-4">
                <img class="img-fluid w-100 border shadow rounded" src="{{ asset('storage/' . $serie->cover_path) }}" alt="Capa da série">
            </div>
            <div class="col-8">
                <h4>Descriçao</h4>
                <p class="fs-5 mt-5">
                    {{ $serie->description }}
                </p>
            </div>
        </div>
    </div>
</x-layout>
