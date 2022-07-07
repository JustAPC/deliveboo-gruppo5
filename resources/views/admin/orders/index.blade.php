@extends('layouts.app')

@section('optionalscripts')
    <link rel="stylesheet" href="{{ asset('css/orderIndex.css') }}">
    <script defer src="{{ asset('js/orderDeleteAlert.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10.16.6/dist/sweetalert2.all.min.js"></script>
@endsection

@section('content')
    @if (session('message-delete'))
        <div class="alert alert-success fs-5">
            <span>L'ordine di</span>
            <span class="text-uppercase text-primary">{{ session('message-delete') }}</span>
            <span>è stato eliminato con successo</span>
        </div>
    @endif

    <div class="container">
        <div class="d-flex justify-content-between">
            <a href="{{ route('admin.orders.create') }}" class="btn btn-success">Aggiungi un nuovo ordine</a>
            <form class="form-inline mr-3" method="GET" action="{{ route('admin.orders.index') }}">
                <input class="form-control mr-sm-2" type="search" placeholder="Cerca per id" name="id">
                <button class="btn btn-outline-success my-2 mx-3 my-sm-0" type="submit">Search</button>
                <button class="btn btn-outline-primary my-2 my-sm-0" type="submit" name="">
                    Vedi tutti</button>
            </form>
        </div>
        @forelse ($orders as $order)
            <div class="card my-3 col-12">
                <div class="card-body">
                    <div class="d-flex">
                        <div class="col-4 px-0 h-100">
                            <h5 class="card-title mb-4">ID: {{ $order->id }}</h5>
                            <p class="card-text">Cliente: {{ $order->customer_name }}
                                {{ $order->customer_lastname }}</p>
                            <p class="card-text">Indirizzo: {{ $order->customer_address }}</p>
                            <p class="card-text">Telefono: {{ $order->customer_phone }}</p>
                            <p class="card-text">Prezzo totale: {{ $order->total_price }}€</p>
                        </div>

                        <div class="col-8 right-column">
                            <div class="mx-0 px-0 row text-center">
                                <h4 class="col-4 mb-0">Piatto</h4>
                                <h4 class="col-4 mb-0">Quantità</h4>
                                <h4 class="col-4 mb-0">Prezzo</h4>
                            </div>
                            <div class="d-flex right-column-content text-center">
                                <div class="col-4">
                                    @forelse ($order->Dishesorder as $dish)
                                        <p>{{ $dish->name }}</p>
                                    @empty
                                    @endforelse
                                </div>
                                <div class="col-4">
                                    @forelse ($order->Dishesorder as $dish)
                                        <p>{{ $dish->getOriginal('pivot_quantity') }}</p>
                                    @empty
                                        -
                                    @endforelse
                                </div>
                                <div class="col-4">
                                    @forelse ($order->Dishesorder as $dish)
                                        <p>{{ $dish->price }}€</p>
                                    @empty
                                    @endforelse
                                </div>
                            </div>
                        </div>
                    </div>

                    </form>

                </div>
                <div class="my-3 d-flex justify-content-center">
                    <a href="{{ route('admin.orders.show', $order->id) }}" class="btn btn-success mx-2">Dettagli
                        dell'ordine</a><br>
                    <a href="{{ route('admin.orders.edit', $order->id) }}" class="btn btn-primary mx-2">Modifica
                        l'ordine</a><br>
                    <form action="{{ route('admin.orders.destroy', $order->id) }}" class="d-inline-block delete-form"
                        data-name="{{ $order->id }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <input type="submit" class="btn btn-danger mx-2" value="Elimina l'ordine">
                </div>
            </div>


        @empty
            <h1>Non ci sono ordini</h1>
        @endforelse

    </div>
@endsection
