@extends('layouts.app')

@section("content")

<div class="container">
    <div class="row justify-content-center">
        <a href="{{ route("admin.create")}}" class="btn btn-danger m-3 d-flex justify-content-center align-content-center col-">
            Aggiungi un nuovo gioco
        </a>
    </div>
    <div class="row mb-2">
        @forelse ($games as $index => $game )
        <div style="width: 18rem;">
            <img src="{{$game->thumb}}" class="card-img-top pt-2" alt="...">
            <div class="card-body">
                <h1 class="card-text">Titolo: {{ $game->title }}</h1>
                <p class="card-text">Data di rilascio: {{ $game->release_date}}</p>
                <p class="card-text">Descrizione: {{ $game->description }}</p>
                <p class="card-text">Prezzo: {{ $game->price }}</p>
            </div>
            <div>
                 <a class="btn btn-secondary mb-2" href="{{route("admin.show" , $game) }} ">
                    Vai al Progetto
                </a>
                <a class="btn btn-secondary mb-2" href="">
                                Edita Il progetto
                </a>
                <form action=" {{ route("admin.destroy" , $game->id)}}"
                method="post">
                    @csrf
                    @method("DELETE")
                    <input type="submit" value="Elimina" class="btn btn-danger mb-2">
                </form>
            </div>
        </div>
        @empty
            There are no games...
        @endforelse
    </div>


</div>



@endsection
