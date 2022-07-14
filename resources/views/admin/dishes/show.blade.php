@extends('layouts.app')

@section('optionalscripts')
    <script defer src="{{ asset('js/deleteAlert.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10.16.6/dist/sweetalert2.all.min.js"></script>
@endsection

@section('content')
    @if (session('message-update'))
        <div class="alert alert-success">
            <span>Il piatto</span>
            <span class="text-danger">{{ session('message-update') }}</span>
            <span>è stato modificato con successo!</span>
        </div>
    @elseif(session('message-create'))
        <div class="alert alert-success fs-5">
            <span>Il piatto</span>
            <span class="text-uppercase text-primary">{{ session('message-create') }}</span>
            <span>è stato creato con successo</span>
        </div>
    @endif

    <div class="container my-5 pt-5  d-flex flex-column justify-content-center">

        {{-- background animato --}}
        <div class="bg"></div>
        <div class="bg bg2"></div>
        <div class="bg bg3"></div>


        <div class="content">

            {{-- nome piatto --}}
            <h1 class="text-center mb-5">{{ $dish->name }}</h1>

            <div class="row">
    
                {{-- immagine --}}
                <div class="col-12 col-lg-4">
                    @if ($dish->image)
                        @if (Str::startsWith($dish->image, 'http'))
                            <img src="{{ $dish->image }}" width="100%" alt=""  class="rounded">
                        @else
                            <img src="{{ asset("storage/$dish->image") }}" width="100%" alt=""  class="rounded">
                        @endif
                    @else
                        <img src="https://2csolution.it/wp-content/themes/consultix/images/no-image-found-360x260.png" alt="nessuna immagine trovata" height="150px" class="rounded">
                    @endif
                </div>
    
                {{-- colonna a destra --}}
                <div class="col-12 col-lg-8 d-flex flex-column">
    
                    {{-- dettagli --}}
                    <div class="d-flex flex-column align-items-center dettagli-show">
                        <span class="d-5 text-capitalize"><b>Categoria:</b> {{ $dish->Dishcategory->name }}</span>
                        <span class="d-5"><b>Quantità:</b> {{ $dish->quantity }}</span>
                        <span class="d-5"><b>Prezzo:</b> € {{ $dish->price }}</span>
                        @if ($dish->ingredients)
                            <p class="d-5"><b>Ingredienti:</b> {{ $dish->ingredients }}</p>
                        @endif
                        @if ($dish->description)
                            <p class="d-5"><b>Descrizione:</b> {{$dish->description}} </p>
                        @endif
                    </div>
    
                    {{-- bottoni --}}
                    <div class="d-flex justify-content-around" style="height: 3.5rem">
                        <a href="{{ route('admin.dishes.edit', $dish->id) }}" class="btn edit-button mr-1"><i class="fa-solid fa-pen-to-square mr-1"></i> Modifica</a>
                        <form action="{{ route('admin.dishes.destroy', $dish->id) }}" class="delete-form h-100 mr-1" data-name="{{ $dish->name }}"method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn delete-button h-100" value="Delete"><i class="fa-solid fa-trash-can mr-1"></i> Elimina</button>
                        </form>
                        <a href="{{ route('admin.dishes.index') }}" class="btn back-button mr-1"><i class="fa-solid fa-circle-arrow-left mr-1"></i></i> Indietro</a>
                    </div>
                </div>
            </div>

        </div>

        
    </div>
@endsection

<style>
    html {
    height:100%;
}

body {
    margin:0;
}

.bg {
    animation:slide 3s ease-in-out infinite alternate;
    background-image: linear-gradient(-60deg, #6c3 50%, #09f 50%);
    bottom:0;
    left:-50%;
    opacity:.5;
    position:fixed;
    right:-50%;
    top:0;
    z-index:-1;
}

.bg2 {
    animation-direction:alternate-reverse;
    animation-duration:4s;
}

.bg3 {
    animation-duration:5s;
}

.content {
    background-color:rgba(255,255,255,.8);
    border-radius:.25em;
    box-shadow:0 0 .25em rgba(0,0,0,.25);
    box-sizing:border-box;
    left:50%;
    padding:5vmin;
    position:fixed;
    text-align:center;
    top:50%;
    transform:translate(-50%, -50%);
}

@keyframes slide {
    0% {
    transform:translateX(-25%);
    }
    100% {
    transform:translateX(25%);
    }
}
</style>
