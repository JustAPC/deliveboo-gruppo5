@extends('layouts.app')

@section('optionalscripts')
    <link rel="stylesheet" href="{{ asset('css/orderIndex.css') }}">
    <script defer src="{{ asset('js/orderDeleteAlert.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10.16.6/dist/sweetalert2.all.min.js"></script>
@endsection

{{-- messaggio di conferma eliminazione --}}
@section('content')
    @if (session('message-delete'))
        <div class="alert alert-success fs-5">
            <span>L'ordine di</span>
            <span class="text-uppercase text-primary">{{ session('message-delete') }}</span>
            <span>è stato eliminato con successo</span>
        </div>
    @endif

    <div class="container p-5">

        {{-- background animato --}}
        <div class="bg"></div>
        <div class="bg bg2"></div>
        <div class="bg bg3"></div>

        {{-- searchbar superiore --}}
        <div class="d-flex flex-wrap row-cols-md-2 mt-5 mx-auto justify-content-around align-items-center mb-4">
            <a href="{{ route('admin.orders.create') }}" id="new-order-btn" class="btn col-sm-1 col-md-3 m-2">Aggiungi un nuovo ordine</a>
            <form class="form-inline col-sm-1 col-md-8 d-flex justify-content-between" method="GET" action="{{ route('admin.orders.index') }}" style="margin-bottom: 0">
                <input class="form-control col-md-7 col-sm-12 m-1" type="search" placeholder="Cerca per id" name="id">
                <button class="btn btn-outline-success col-md-2 col-xs-6 m-1" id="btn-cerca-vedi" type="submit">Search</button>
                <button class="btn btn-outline-primary col-md-2 col-xs-6 m-1" type="submit" id="btn-cerca-vedi" name="">
                    Vedi tutti</button>
            </form>
        </div>

        {{-- card --}}
        @forelse ($orders as $order)
            <div class="card menu-card my-3 col-12">
                <div class="card-body">
                    <div class="d-flex">
                        <div class="col-4 px-0 h-100">
                            <h5 class="card-title mb-4 text-uppercase"><b>id ordine:</b> {{ $order->id }}</h5>
                            <p class="card-text"><b>Cliente:</b> {{ $order->customer_name }}
                                {{ $order->customer_lastname }}</p>
                            <p class="card-text"><b>Indirizzo:</b> {{ $order->customer_address }}</p>
                            <p class="card-text"><b>Telefono:</b> {{ $order->customer_phone }}</p>
                            <p class="card-text"><b>Prezzo totale:</b> {{ $order->total_price }}€</p>
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

                {{-- Pulsanti --}}
                <div>
                    <div class="my-3 d-flex justify-content-center" style="height: auto">
                        <a href="{{ route('admin.orders.show', $order->id) }}" class="btn show-button mx-2"><i class="fa-solid fa-eye mr-1"></i> Dettagli
                            dell'ordine</a><br>
                        <a href="{{ route('admin.orders.edit', $order->id) }}" class="btn edit-button mx-2"><i class="fa-solid fa-pen-to-square mr-1"></i> Modifica
                            l'ordine</a><br>
                        <form action="{{ route('admin.orders.destroy', $order->id) }}" class="d-inline-block delete-form"
                            data-name="{{ $order->id }}" method="POST" style="margin-bottom: auto">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn delete-button mx-2" value="Elimina l'ordine"><i class="fa-solid fa-trash-can mr-1"></i> Elimina l'ordine</button>
                    </div>
                </div>
            </div>


        @empty
            <h1 class="text-white m-5 text-center">Nessun ordine soddisfa il criterio di ricerca</h1>
        @endforelse

    </div>
@endsection

<style>

    /* Stile card */
    .menu-card:hover{
    transform: scale(1.05);
    box-shadow: 0 10px 20px rgba(0,0,0,.12), 0 4px 8px rgba(0,0,0,.06);
    transition: .3s transform cubic-bezier(.155, 1.105, .295, 1.12), .3s box-shadow, .3s -webkit-transform cubic-bezier(.155, 1.105, .295, 1.12);
}

/* Stile background animato */
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

/* Stile pulsanti */
#new-order-btn {
    background-color: #e98c22;
    color: white;
}

#btn-cerca-vedi {
    border: 2px solid #e98c22;
    color: #e98c22;
    font-weight: bold;
    background-color: white;
    border-radius: 5px;
    font-size: 14px;
    padding: 6px 12px;
    margin-bottom: 0;
}

#btn-cerca-vedi:hover {
    border: 2px solid white;
    font-weight: bold;
    color: white;
    background-color: #e98c22;
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
