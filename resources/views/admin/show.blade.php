@extends('layouts.app')

@section('content')

<h1 class="text-danger">Details of Game</h1>

<div class="card" style="width: 18rem;">
    <img class="card-img-top" src="{{ $game->thumb ?? 'https://www.generation4x4mag.fr/wp-content/uploads/2022/12/Steam-logo-png.png' }}" alt="Game Thumbnail">
    <div class="card-body">
        <h3 class="card-title">{{ $game->title }}</h3>
        <p class="card-text"><strong>Description:</strong> {{ $game->description }}</p>
        <p class="card-text"><strong>Price:</strong> ${{ number_format($game->price, 2, '.', ',') }}</p>
        <p class="card-text"><strong>Release Date:</strong> {{ $game->release_date->format('F d, Y') }}</p>
        <a href="#" class="btn btn-dark">Go back</a>
    </div>
</div>

@endsection
