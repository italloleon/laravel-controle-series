<x-layout title="Editar Serie '{{ $serie->nome  }}'">
    <x-series.form
        action="{{ route('series.update', $serie->id) }}"
        nome="{{$serie->nome}}"
        description="{{ $serie->description }}"
        coverPath="{{ asset('storage/' . $serie->cover_path) }}"
        buttonText="Editar Serie"
        update="true"
    />
</x-layout>
