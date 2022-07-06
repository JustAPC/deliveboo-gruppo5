@extends('layouts.app')

@section('optionalscripts')
    <script defer src="{{ asset('js/deleteAlert.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10.16.6/dist/sweetalert2.all.min.js"></script>
@endsection

@section('content')
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

    <ul>

        <li>Cliente: {{ $order->customer_name }} {{ $order->customer_lastname }} </li>
        <li>Indirizzo: {{ $order->customer_address }}</li>
        <li>Telefono: {{ $order->customer_phone }}</li>

        @foreach ($order->Dishesorder as $dish)
            <li><span class="ms-4">{{ $dish->pivot->quantity }}</span> {{ $dish->name }}</li>
        @endforeach

        <form action="{{ route('admin.orders.destroy', $order->id) }}" class="d-inline-block delete-form"
            data-name="{{ $order->customer_name }}" method="POST">
            @csrf
            @method('DELETE')
            <input type="submit" class="btn btn-danger" value="Delete">
        </form>

    </ul>
@endsection
