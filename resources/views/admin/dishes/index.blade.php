@extends('layouts.app')

@section('optionalscripts')
    <script defer src="{{ asset('js/deleteAlert.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10.16.6/dist/sweetalert2.all.min.js"></script>
@endsection

@section('content')

    @if (Auth::user()->restaurant_img)
        @if (Str::startsWith(Auth::user()->restaurant_img, 'http'))
            <img src="{{ Auth::user()->restaurant_img }}" alt="{{ Auth::user()->restaurant_name }}" width="100%" margin="-50px">
        @else
            <img src="{{ asset("storage/Auth::user()->restaurant_img") }}" alt="{{ Auth::user()->restaurant_name }}" width="100%" margin="-50px">
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
    <h1 class="text-center p-4">{{ Auth::user()->restaurant_name }}</h1>


    {{-- searchbar superiore --}}
    <div class="d-flex row-cols-sm-12 flex-wrap justify-content-between w-50 mx-auto mb-4">
        <a href="{{ route('admin.dishes.create') }}" class="btn btn-deliveboo col-sm-12 col-md-3">Aggiungi un nuovo piatto</a>
        <form class="d-flex justify-content-between col-sm-8" method="GET" action="{{ route('admin.dishes.index') }}">
            <input class="form-control col-sm-8 col-xs-12" type="search" placeholder="Cerca un piatto..." name="name">
            <button class="btn btn-outline-deliveboo col-md-2 ml-2" type="submit">Cerca</button>
            <button class="btn btn-outline-primary col-md-2 ml-2" type="submit" name="">Vedi tutti</button>
        </form>
    </div>



    <div class="container">
        <div class="row-cols-4 d-flex flex-wrap justify-content-around">

            @forelse ($dishes as $dish)

                {{-- card --}}
                <div class="card menu-card col-auto my-3" style="width: 18rem;">
                    <div class="card-body d-flex flex-column">
                        @if ($dish->image)
                            @if (Str::startsWith($dish->image, 'http'))
                                <img src="{{ $dish->image }}" alt="" height="150px" class="rounded">
                            @else
                                <img src="{{ asset("storage/$dish->image") }}" alt="" height="150px" class="rounded">
                            @endif
                        @else
                            <img src="https://2csolution.it/wp-content/themes/consultix/images/no-image-found-360x260.png" alt="nessuna immagine trovata" height="150px" class="rounded">
                        @endif

                        <h5 class="card-title font-weight-bold text-center mt-2">{{ $dish->name }}</h5>
                        <p class="text-capitalize text-center badge badge-pill badge-deliveboo w-50 align-self-center">Categoria: {{ $dish->Dishcategory->name }}</p>

                        @if ($dish->ingredients)
                            <h6 class="card-subtitle mb-2 text-muted">Ingredienti: {{ $dish->ingredients }}</h6>
                        @endif
                        @if ($dish->description)
                            <h6 class="card-subtitle mb-2 text-muted">Descrizione: {{ $dish->description }}</h6>
                        @endif
                        <p class="card-text text-right">€ {{ $dish->price }}</p>

                        <div class="d-flex justify-content-around">
                            <a href="{{ route('admin.dishes.show', $dish->id) }}" class="btn btn-outline-success">Vedi</a>
                            <a href="{{ route('admin.dishes.edit', $dish->id) }}" class="btn btn-outline-primary">Modifica</a>
                            <form action="{{ route('admin.dishes.destroy', $dish->id) }}" class="d-inline-block delete-form"
                                data-name="{{ $dish->name }}"method="POST">
                                @csrf
                                @method('DELETE')
                                <input type="submit" class="btn btn-outline-danger" value="Elimina">
                            </form>
                        </div>
                    </div>
                </div>


            @empty
                <h4 class="mt-4 text-center">Nessun piatto rispetta il criterio di ricerca</h4>
            @endforelse
        </div>
    </div>
@endsection
