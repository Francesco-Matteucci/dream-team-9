@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Aggiungi un Nuovo Gioco</h2>

    <form action="{{ route('admin.store') }}" method="POST">
        @csrf

        <div class="mb-3">
            <label for="name" class="form-label">Nome</label>
            <input type="text" name="name" class="form-control" id="name" required>
        </div>

        <div class="mb-3">
            <label for="description" class="form-label">Descrizione</label>
            <textarea name="description" class="form-control" id="description" rows="3"></textarea>
        </div>

        <div class="mb-3">
            <label for="price" class="form-label">Prezzo</label>
            <input type="number" name="price" class="form-control" id="price" step="0.01" required>
        </div>

        <div class="mb-3">
            <label for="release_date" class="form-label">Data di Rilascio</label>
            <input type="date" name="release_date" class="form-control" id="release_date" required>
        </div>

        <div class="mb-3">
            <label for="thumb" class="form-label">URL Immagine</label>
            <input type="text" name="thumb" class="form-control" id="thumb">
        </div>

        <button type="submit" class="btn btn-primary">Salva Gioco</button>
    </form>
</div>
@endsection
