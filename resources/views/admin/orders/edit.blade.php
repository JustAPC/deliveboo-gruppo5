@extends('layouts.app')

@section('optionalscripts')
    <script defer src="{{ asset('js/dishQuantity.js') }}"></script>
@endsection


@section('content')
{{-- Variabile per ciclare le quantità --}}
@php
$i = 0
@endphp
<div class="container">
    <form action="{{ route('admin.orders.update', $order->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div>
            <label for="name">Nome:</label>
            <input type="text" id="customer_name" name="customer_name"
                value="{{ old('customer_name', $order->customer_name) }}" class="mx-3">
        </div>

        <div>
            <label for="name">Cognome:</label>
            <input type="text" id="customer_lastname" name="customer_lastname"
                value="{{ old('customer_lastname', $order->customer_lastname) }}" class="mx-3">
        </div>

        <div>
            <label for="name">Indirizzo:</label>
            <input type="text" id="customer_address" name="customer_address"
                value="{{ old('customer_address', $order->customer_address) }}" class="mx-3">
        </div>

        <div>
            <label for="name">Numero telefono:</label>
            <input type="text" id="customer_phone" name="customer_phone"
                value="{{ old('customer_phone', $order->customer_phone) }}" class="mx-3">
        </div>

        <div>
            <span>Ordine completato:</span>
            <select name="completed" id="completed">
                <option value="1">Si</option>
                <option value="0">No</option>
            </select>
        </div>

        <div>
            <span>Pagamento ricevuto:</span>
            <select name="payment_received" id="payment_received">
                <option @if (old('payment_received', $order->payment_received == 1)) selected @endif value="1">Si</option>
                <option @if (old('payment_received', $order->payment_received == 0)) selected @endif value="0">No</option>
            </select>
        </div>

        <div class="d-flex flex-wrap mt-5">

            @foreach ($dishcategories as $category)
                <div class="col-4">

                    {{-- Nome della categoria dei piatti --}}
                    <span class="text-capitalize">{{ $category->name }}</span>
                    {{-- Stampo tutti i piatti della categoria --}}
                    @foreach ($dishes as $dish)

                        @if ($dish->dishcategory_id == $category->id)
                        {{-- @dd($dish) --}}
                            <div>

                                <input type="checkbox"
                                class="form-check-input"
                                id="dish-checkbox-{{ $dish->id }}"
                                name="dishes[]"
                                value="{{ $dish->id }}"
                                @if (in_array($dish->id, old('dishes', $dishesChecked))) checked @endif
                                >
                                {{ $dish->name }}

                                <span id="dish-price">{{ $dish->price }}€</span>

                                <input type="number"
                                name="quantity[]"
                                id="dish-select-{{ $dish->id }}" disabled
                                style="width: 60px" min="1"
                                @if ( in_array($dish->id, $dishesChecked) )
                                    value="{{$order->Dishesorder[$i++]->pivot->quantity}}"
                                @else
                                    value="1"
                                @endif>

                            </div>

                        @endif

                    @endforeach

                </div>
            @endforeach

        </div>

        {{-- Prezzo totale --}}
        <div>
            <label for="name">Conto:</label>
            <h1 id="prezzoTotale"></h1>
        </div>
        <input type="text" name="total_price" id="prezzoTotaleDB" value="" style="display: none">
        <button type="submit" class="mt-5">Invia</button>

    </form>
</div>
@endsection

<script>
    var dishes = {!! json_encode($dishes->toArray(), JSON_HEX_TAG) !!};
</script>

