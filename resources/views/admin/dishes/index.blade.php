@extends('layouts.app')

@section('optionalscripts')
    <script defer src="{{ asset('js/deleteAlert.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10.16.6/dist/sweetalert2.all.min.js"></script>
@endsection

@section('content')

    @if (Auth::user()->restaurant_img)
        @if (Str::startsWith(Auth::user()->restaurant_img, 'http'))
            <img src="{{ Auth::user()->restaurant_img }}" alt="{{ Auth::user()->restaurant_name }}" width="100%"
                margin="-50px">
        @else
            <img src="{{ asset('storage/Auth::user()->restaurant_img') }}" alt="{{ Auth::user()->restaurant_name }}"
                width="100%" margin="-50px">
        @endif
    @endif

    @if (session('message-delete'))
        <div class="alert alert-success fs-5">
            <span>Il piatto</span>
            <span class="text-uppercase text-primary">{{ session('message-delete') }}</span>
            <span>è stato eliminato con successo</span>
        </div>
    @endif

    {{-- titolo nome ristorante --}}
    <h1 class="text-center text-white p-4" style="font-size: 3.5rem">{{ Auth::user()->restaurant_name }}</h1>

    {{-- searchbar superiore --}}
    <div class="d-flex flex-wrap row-cols-md-2 w-75 mx-auto justify-content-around align-items-center mb-4">
        <a id="new-dish-btn" href="{{ route('admin.dishes.create') }}" class="btn col-sm-1 col-md-2 m-2">Aggiungi un nuovo
            piatto</a>
        <form class="form-inline d-flex justify-content-between align-items-center my-auto" method="GET" action="{{ route('admin.dishes.index') }}">
            <input class="form-control col-md-7 col-sm-12 m-1" type="search" placeholder="Cerca un piatto..." name="name">
            <button class="btn col-md-2 col-xs-6 m-1" id="btn-cerca-vedi" type="submit">Cerca</button>
            <button class="btn col-md-2 col-xs-6 m-1" id="btn-cerca-vedi" type="submit" name="">Vedi tutti</button>
        </form>
    </div>

    <div class="container-fluid">

        {{-- background animato --}}
        <div class="bg"></div>
        <div class="bg bg2"></div>
        <div class="bg bg3"></div>

        <div class="row-cols-3 w-75 mx-auto d-flex flex-wrap justify-content-around">

            @forelse ($dishes as $dish)
                @if ($dish->available == 1)

                    {{-- card --}}
                    <div class="card menu-card col-auto my-3 content" style="width: 18rem;">
                        <div class="card-body d-flex flex-column w-100">

                            {{-- immagine + titolo + categoria + dettagli --}}
                            <div class="w-100" style="margin-bottom: auto">

                                {{-- immagine --}}
                                @if ($dish->image)
                                    @if (Str::startsWith($dish->image, 'http'))
                                        <div style="width: 100%; height: 150px; background-image: url({{ $dish->image }}); background-size: cover; background-position: center">
                                            
                                        </div>
                                    @else
                                        <div style="width: 100%; height: 150px; background-image: url({{ asset("storage/$dish->image") }}); background-size: cover; background-position: center">
                                            
                                        </div>
                                    @endif
                                @else
                                    <div style="width: 100%; height: 150px; background-image: url('https://2csolution.it/wp-content/themes/consultix/images/no-image-found-360x260.png'); background-size: cover; background-position: center">
                                        
                                    </div>
                                @endif
    
                                {{-- categoria --}}
                                <h5 class="card-title font-weight-bold text-center mt-2">{{ $dish->name }}</h5>
                                <p class="text-capitalize text-center badge badge-pill badge-deliveboo w-50 align-self-center">
                                    Categoria: {{ $dish->Dishcategory->name }}</p>

                                {{-- ingredienti --}}
                                @if ($dish->ingredients)
                                    <h6 class="card-subtitle mb-2 text-muted">Ingredienti: {{ $dish->ingredients }}</h6>
                                @endif
    
                                {{-- descrizione --}}
                                @if ($dish->description)
                                    <h6 class="card-subtitle mb-2 text-muted">Descrizione: {{ $dish->description }}</h6>
                                @endif

                            </div>


                            {{-- prezzo + pulsanti --}}
                            <div>

                                {{-- prezzo --}}
                                <p class="card-text text-right"><b>€ {{ $dish->price }}</b></p>
    
                                {{-- pulsanti --}}
                                <div class="d-flex justify-content-around align-items-end" style="height: auto">
                                    <a href="{{ route('admin.dishes.show', $dish->id) }}"
                                        class="btn show-button"><i class="fa-solid fa-eye"></i></a>
                                    <a href="{{ route('admin.dishes.edit', $dish->id) }}"
                                        class="btn edit-button"><i class="fa-solid fa-pen-to-square"></i></a>
                                    <form action="{{ route('admin.dishes.destroy', $dish->id) }}"
                                        class="d-inline-block delete-form" data-name="{{ $dish->name }}" method="POST" style="margin-bottom: auto">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn delete-button" value="Elimina"><i class="fa-solid fa-trash-can"></i></button>
                                    </form>
                                </div>

                            </div>


                        </div>
                    </div>
                @endif
            @empty
                <h4 class="mt-4 text-center">Nessun piatto rispetta il criterio di ricerca</h4>
            @endforelse
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
    padding:5vmin;
    position:fixed;
    text-align:center;
    top:50%;
}

@keyframes slide {
    0% {
    transform:translateX(-25%);
    }
    100% {
    transform:translateX(25%);
    }
}

#new-dish-btn {
    background-color: #e98c22;
    color: white;
}

#btn-cerca-vedi {
    border: 2px solid #e98c22;
    font-weight: bold;
    color: #e98c22;
    background-color: white;
    border-radius: 5px;
    font-size: 14px;
    padding: 6px 12px;
    margin-bottom: 0;
}

#btn-cerca-vedi:hover {
    border: 2px solid white!important;
    font-weight: bold!important;
    color: white!important;
    background-color: #e98c22!important;
}

.show-button {
    background-color: #78d04f!important;
    color: white!important;
    display: flex!important;
    align-items: center!important;
}

.edit-button {
    background-color: #49afca!important;
    color: white!important;
    display: flex!important;
    align-items: center!important;
}

.delete-button {
    background-color: #e98c22!important;
    color: white!important;
    display: flex!important;
    align-items: center!important;
}
</style>
