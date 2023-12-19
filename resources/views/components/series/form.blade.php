<form action="{{ $action }}" method="post" enctype="multipart/form-data">
    @csrf
    @if($update)
    @method('PUT')
    @endif
    <div class="mb-3">
        <label for="nome" class="form-label">Nome</label>
        <input type="text"
               @if(!empty($nome))
                   value="{{ $nome }}"
               @endif
               name="nome"
               id="nome"
               class="form-control">
    </div>
    <div class="mb-3">
        <label for="description" class="form-label">Description</label>
        <textarea class="form-control"
                  name="description"
                  id="description">@if(!empty($description)){{ $description }}@endif</textarea>
    </div>
    <div class="mb-3">
        <label for="cover" class="form-label">Capa da Série</label>
        <input type="file" name="cover" id="cover" value="{{$cover_path}}" class="form-control">
    </div>
    <button type="submit" class="btn btn-primary">
        {{ $buttonText }}
        <i class="bi bi-send"></i>
    </button>
    <a href="{{ route("series.index") }}" class="btn btn-secondary">Cancelar</a>
</form>
