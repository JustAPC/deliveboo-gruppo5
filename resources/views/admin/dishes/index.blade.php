@extends('layouts.app')

@section('optionalscripts')
    <script defer src="{{ asset('js/deleteAlert.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10.16.6/dist/sweetalert2.all.min.js"></script>
@endsection

@section('content')
    @if (session('message-delete'))
        <div class="alert alert-success fs-5">
            <span>Il piatto</span>
            <span class="text-uppercase text-primary">{{ session('message-delete') }}</span>
            <span>è stato eliminato con successo</span>
        </div>
    @endif

    <div class="d-flex justify-content-center">
        <form class="form-inline mr-3" method="GET" action="{{ route('admin.dishes.index') }}">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" name="name">
            <button class="btn btn-outline-success my-2 mx-3 my-sm-0" type="submit">Search</button>
            <button class="btn btn-outline-primary my-2 my-sm-0" type="submit" name="">
                Vedi tutti</button>
        </form>
    </div>

    <div class="container ">
        <a href="{{ route('admin.dishes.create') }}" class="btn btn-success">Aggiungi un nuovo piatto</a>
        <div class="row justify-content-around">

            @forelse ($dishes as $dish)
                <div class="card my-3" style="width: 18rem;">
                    <div class="card-body">
                        @if ($dish->image)
                            @if (Str::startsWith($dish->image, 'http'))
                                <img src="{{ $dish->image }}" alt="" width="150px">
                            @else
                                <img src="{{ asset("storage/$dish->image") }}" alt="" width="150px">
                            @endif
                        @endif

                        <h5 class="card-title">{{ $dish->name }}</h5>
                        {{-- <p class="text-capitalize">{{ $dish->Dishcategory->name }}</p> --}}

                        @if ($dish->ingredients)
                            <h6 class="card-subtitle mb-2 text-muted">Ingredienti: {{ $dish->ingredients }}</h6>
                        @endif
                        @if ($dish->description)
                            <h6 class="card-subtitle mb-2 text-muted">Descrizione: {{ $dish->description }}</h6>
                        @endif
                        <p class="card-text text-right">{{ $dish->price }}€</p>
                        <a href="{{ route('admin.dishes.show', $dish->id) }}" class="btn btn-success">View</a>
                        <a href="{{ route('admin.dishes.edit', $dish->id) }}" class="btn btn-primary">Edit</a>
                        <form action="{{ route('admin.dishes.destroy', $dish->id) }}" class="d-inline-block delete-form"
                            data-name="{{ $dish->name }}"method="POST">
                            @csrf
                            @method('DELETE')
                            <input type="submit" class="btn btn-danger" value="Delete">

                        </form>
                    </div>
                </div>


            @empty
                <li>Niente</li>
            @endforelse
        </div>
    </div>
@endsection
