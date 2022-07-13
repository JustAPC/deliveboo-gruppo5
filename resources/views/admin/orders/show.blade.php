@extends('layouts.app')

@section('optionalscripts')
    <script defer src="{{ asset('js/orderDeleteAlert.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10.16.6/dist/sweetalert2.all.min.js"></script>
@endsection

@section('content')

    <div class="bg"></div>
    <div class="bg bg2"></div>
    <div class="bg bg3"></div>

    @if (session('message-update'))
        <div class="alert alert-success">
            <span>L'ordine</span>
            <span class="text-danger">{{ session('message-update') }}</span>
            <span>è stato modificato con successo!</span>
        </div>
    @elseif(session('message-create'))
        <div class="alert alert-success fs-5">
            <span>L'ordine</span>
            <span class="text-uppercase text-primary">{{ session('message-create') }} </span>
            <span>è stato creato con successo</span>
        </div>
    @endif

    {{-- <div class="content mt-5">
        <div class="border border-success">
            <div class="d-flex flex-column">
                <span>ID: {{ $order->id }}</span>
                <span>Cliente: {{ $order->customer_name }} {{ $order->customer_lastname }} </span>
                <span>Indirizzo: {{ $order->customer_address }}</span>
                <span>Telefono: {{ $order->customer_phone }}</span>
            </div>

            @foreach ($order->Dishesorder as $dish)
                <span><span class="ms-4">{{ $dish->pivot->quantity }}</span> {{ $dish->name }}</span>
            @endforeach
            <a href="{{ route('admin.orders.edit', $order->id) }}" class="btn btn-primary">Edit</a>
            <form action="{{ route('admin.orders.destroy', $order->id) }}" class="d-inline-block delete-form"
                data-name="{{ $order->id }}" method="POST">
                @csrf
                @method('DELETE')
                <input type="submit" class="btn btn-danger" value="Delete">
            </form>
        </div>
    </div> --}}

    {{-- card come in index ordini --}}
    <div class="container mt-5">
        <div class="row">
            <div class="card order-card my-5 col-12">
                <div class="p-3 my-3">
                    <div class="d-flex flex-wrap">
        
                        {{-- informazioni cliente --}}
                        <div class="col-md-5 col-xs-12 px-0 mb-4 rounded">
                            <h5 class="card-title mb-4 text-uppercase"><b>id ordine:</b> {{ $order->id }}</h5>
                            <p class="card-text"><b>Cliente:</b> {{ $order->customer_name }}
                                {{ $order->customer_lastname }}</p>
                            <p class="card-text"><b>Indirizzo:</b> {{ $order->customer_address }}</p>
                            <p class="card-text"><b>Telefono:</b> {{ $order->customer_phone }}</p>
                            <p class="card-text"><b>Prezzo totale:</b> {{ $order->total_price }}€</p>
                        </div>
        
                        {{-- piatti ordinati VERSIONE NUOVA RESPONSIVE --}}
                        <div class="col-md-7 col-12 d-flex flex-column">
                            <div class="row d-flex">
                                <span class="col-6 col-md-8 font-weight-bold">Piatto</span>
                                <span class="col-3 col-md-2 font-weight-bold">Quantità</span>
                                <span class="col-3 col-md-2 font-weight-bold">Prezzo</span>
                            </div>
                            <div class="d-flex justify-content-around row">
                                <div class="row w-100 d-flex align-items-center justify-content-center">
                                    @forelse ($order->Dishesorder as $dish)
                                        <span class="col-md-8 col-6 my-1 display-inline-block">{{ $dish->name }}</span>
                                        <span class="col-md-2 col-3 my-1 display-inline-block">{{ $dish->getOriginal('pivot_quantity') }}</span>
                                        <span class="col-md-2 col-3 my-1 display-inline-block">€{{ $dish->price }}</span>
                                    @empty
                                        <span class="col-md-8 col-6 display-inline-block">-</span>
                                        <span class="col-md-2 col-3 display-inline-block">-</span>
                                        <span class="col-md-2 col-3 display-inline-block">-</span>
                                    @endforelse
                                </div>
                                
                            </div>
                        </div>
        
                    </div>
        
                    </form>
        
                </div>
        
                {{-- Pulsanti --}}
                <div class="mt-1">
                    <div class="my-3 d-flex justify-content-center" style="height: auto">
                        <a href="{{ route('admin.orders.index') }}" class="btn back-button mx-2"><i class="fa-solid fa-circle-arrow-left mr-1"></i></i> Indietro</a>
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

        </div>
    </div>


@endsection

<style>
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
}

@keyframes slide {
    0% {
    transform:translateX(-15%);
    }
    100% {
    transform:translateX(15%);
    }
}

/* Stile pulsanti */

.back-button {
    background-color: #78d04f!important;
    color: white!important;
    display: flex!important;
    align-items: center!important;
}
.back-button:hover {
    background-color: transparent!important;
    color: #78d04f!important;
    border-color: #78d04f!important;
}
</style>
