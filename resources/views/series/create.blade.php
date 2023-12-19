<x-layout title="Cria nova Serie">
    <x-series.form action="{{ route('series.store') }}" nome="{{ old('nome') }}" description="{{ old('description') }}" buttonText="Adicionar Serie" />
</x-layout>
