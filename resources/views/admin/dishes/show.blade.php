@extends('layouts.app')

@section('optionalscripts')
    <script defer src="{{ asset('js/deleteAlert.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10.16.6/dist/sweetalert2.all.min.js"></script>
@endsection

@section('content')
    {{-- prova --}}
    @if (session('message-update'))
        <div class="alert alert-success">
            <span>Il piatto</span>
            <span class="text-danger">{{ session('message-update') }}</span>
            <span>è stato modificato con successo!</span>
        </div>
    @elseif(session('message-create'))
        <div class="alert alert-success fs-5">
            <span>Il piatto</span>
            <span class="text-uppercase text-primary">{{ session('message-create') }} </span>
            <span>è stato creato con successo</span>
        </div>
    @endif

    <ul>

        <li>{{ $dish->name }}</li>
        <li>Quantità: {{ $dish->quantity }}</li>
        @if ($dish->ingredients)
            <li>Ingredienti: {{ $dish->ingredients }}</li>
        @endif
        @if ($dish->description)
            <li>Descrizione: </li>
        @endif
        <li>Prezzo: {{ $dish->price }}€</li>
        <li class="text-capitalize">Categoria: {{ $dish->Dishcategory->name }}</li>
        <img src={{ asset("storage/$dish->image") }}" alt="">

        <a href="{{ route('admin.dishes.edit', $dish->id) }}" class="btn btn-primary">Edit</a>
        <form action="{{ route('admin.dishes.destroy', $dish->id) }}" class="d-inline-block delete-form"
            data-name="{{ $dish->name }}"method="POST">
            @csrf
            @method('DELETE')
            <input type="submit" class="btn btn-danger" value="Delete">

    </ul>
@endsection
