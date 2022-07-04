@extends('layouts.app')

@section('optionalscripts')
<script defer src="{{ asset('js/deleteAlert.js') }}"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10.16.6/dist/sweetalert2.all.min.js"></script>
@endsection

@section('content')

@if (session('message-delete'))
<div class="alert alert-success fs-5">
    <span>L'ordine</span>
    <span class="text-uppercase text-primary">{{ session('message-delete') }}</span>
    <span>è stato eliminato con successo</span>
</div>
@endif

<div class="container">

    <div class="row justify-content-around">
        @forelse ($orders as $order)

        <div class="card my-3" style="width: 18rem;">
            <div class="card-body">
                <h5 class="card-title">Cliente: {{ $order->customer_name }} {{ $order->customer_lastname }}</h5>
                <p class="card-text">Indirizzo: {{ $order->customer_address }}</p>
                <p class="card-text">Telefono: {{ $order->customer_phone }}</p>
                <p class="card-text">Prezzo totale: {{ $order->total_price }}</p>

                <a href="{{ route('admin.orders.show', $order->id) }}" class="btn btn-success">View</a>
                <form action="{{ route('admin.orders.destroy', $order->id) }}" class="d-inline-block delete-form"
                    data-name="{{ $order->customer_name }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <input type="submit" class="btn btn-danger" value="Delete">
                </form>

            </div>
        </div>


        @empty
        <h1>Non ci sono ordini</h1>
        @endforelse
    </div>
</div>

@endsection
