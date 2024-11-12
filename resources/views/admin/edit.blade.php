@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Modifica Gioco</h2>

    <form action="{{ route('admin.update', $game->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="name" class="form-label">Nome</label>
            <input type="text" name="name" class="form-control" id="name" value="{{ $game->name }}" required>
        </div>

        <div class="mb-3">
            <label for="description" class="form-label">Descrizione</label>
            <textarea name="description" class="form-control" id="description" rows="3">{{ $game->description }}</textarea>
        </div>

        <div class="mb-3">
            <label for="price" class="form-label">Prezzo</label>
            <input type="number" name="price" class="form-control" id="price" step="0.01" value="{{ $game->price }}" required>
        </div>

        <div class="mb-3">
            <label for="release_date" class="form-label">Data di Rilascio</label>
            <input type="date" name="release_date" class="form-control" id="release_date" value="{{ $game->release_date }}" required>
        </div>

        <div class="mb-3">
            <label for="thumb" class="form-label">URL Immagine</label>
            <input type="text" name="thumb" class="form-control" id="thumb" value="{{ $game->thumb }}">
        </div>

        <button type="submit" class="btn btn-primary">Aggiorna Gioco</button>
    </form>
</div>
@endsection
