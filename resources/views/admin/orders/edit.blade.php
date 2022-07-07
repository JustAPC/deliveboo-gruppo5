@extends('layouts.app')

@section('optionalscripts')
    {{-- <script defer src="{{ asset('js/dishQuantity.js') }}"></script> --}}
    <style>
        .cart {
            height: 400px;
            overflow: auto;
        }
    </style>
@endsection


@section('content')
    {{-- Variabile per ciclare le quantità --}}
    @php
    $i = 0;
    @endphp
    <form action="{{ route('admin.orders.update', $order->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="container">
            <div class="row">
                <div class="col-7">
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

                </div>
                <div class="col-4 offset-1">
                    <div class="cart border border-dark">

                    </div>
                    <div class="border border-dark">
                        <p id="prezzoTotale"></p>
                    </div>
                </div>
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

                                    <input type="checkbox" class="form-check-input" id="dish-checkbox-{{ $dish->id }}"
                                        name="dishes[]" value="{{ $dish->id }}"
                                        onchange="addToCart({{ $dish->id }})"
                                        @if (in_array($dish->id, old('dishes', $dishesChecked))) checked @endif>
                                    <span id="dish-{{ $dish->id }}">{{ $dish->name }}</span>

                                    <span id="dish-{{ $dish->id }}-price">{{ $dish->price }}€</span>

                                    <input type="number" name="quantity[]" id="dish-quantity-{{ $dish->id }}" disabled
                                        style="width: 60px" min="1" onchange="updateCart({{ $dish->id }})"
                                        @if (in_array($dish->id, $dishesChecked)) value="{{ $order->Dishesorder[$i++]->pivot->quantity }}"
                                @else
                                    value="1" @endif>
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

        </div>
    </form>

    <script>
        let priceSum = [];
        let totalPriceDB = document.getElementById("prezzoTotaleDB");
        let selectedDishes = [];

        // Stampa dei dati durante l'edit
        let dishesID = [];
        dishes.forEach(e => {
            dishesID.push(e.id);
        });

        dishesID.forEach(e => {
            const checkbox = document.getElementById(`dish-checkbox-${e}`);
            if (checkbox.checked) {
                const select = document.getElementById(`dish-quantity-${e}`);
                let quantity = select.value;
                const dishName = document.getElementById(`dish-${e}`).textContent;
                const singlePrice = document.getElementById(`dish-${e}-price`).textContent.slice(0, -1);
                const price = document.getElementById(`dish-${e}-price`).textContent;
                const cartItem = document.getElementById(`item-${e}`);
                const stampaPrezzo = document.getElementById("prezzoTotale");

                select.removeAttribute("disabled");
                let singleDish = {
                    dish_id: e,
                    quantity: quantity,
                    total_price: singlePrice * quantity
                }
                selectedDishes.push(singleDish);
                document.querySelector(".cart").innerHTML +=
                    `<div class="cart-item" id="item-${e}">
                    <p class="dish-name-${e}">Piatto: ${dishName}</p>
                    <p class="dish-price-${e}">${price}</p>
                    <p class="dish-quantity-${e}">Quantità: ${quantity}</p>
                </div>`;
                stampaPrezzo.innerHTML = totalPrice(selectedDishes) + "€";
            }
        });

        //Funzione di aggiunta al carrello
        const stampaPrezzo = document.getElementById("prezzoTotale");

        function addToCart(e) {
            const checkbox = document.getElementById(`dish-checkbox-${e}`);
            const select = document.getElementById(`dish-quantity-${e}`);
            let quantity = select.value;
            const dishName = document.getElementById(`dish-${e}`).textContent;
            const singlePrice = document.getElementById(`dish-${e}-price`).textContent.slice(0, -1);
            const cartItem = document.getElementById(`item-${e}`);

            if (checkbox.checked) {
                select.removeAttribute('disabled');
                let singleDish = {
                    dish_id: e,
                    quantity: quantity,
                    total_price: singlePrice * quantity,
                }
                selectedDishes.push(singleDish);
                document.querySelector(".cart").innerHTML +=
                    `<div class="cart-item" id="item-${e}">
                    <p class="dish-name-${e}">Piatto: ${dishName}</p>
                    <p class="dish-price-${e}">${singlePrice}</p>
                    <p class="dish-quantity-${e}">Quantità: ${quantity}</p>
                </div>`;
                stampaPrezzo.innerHTML = totalPrice(selectedDishes) + "€";
                totalPriceDB.value = totalPrice(selectedDishes);
            } else {
                select.setAttribute("disabled", "");
                select.value = 1;
                if (cartItem) {
                    cartItem.remove();
                }
                selectedDishes = selectedDishes.filter((data) => data.dish_id != e)
                stampaPrezzo.innerHTML = totalPrice(selectedDishes) + "€";
                totalPriceDB.value = totalPrice(selectedDishes);
            }
        }

        function updateCart(e) {
            const checkbox = document.getElementById(`dish-checkbox-${e}`);
            let dishquantity = document.querySelector(`.dish-quantity-${e}`)
            let cartItem = document.getElementById(`item-${e}`);
            const singlePrice = document.getElementById(`dish-${e}-price`).textContent.slice(0, -1);
            let quantity = document.getElementById(`dish-quantity-${e}`).value;

            if (checkbox.checked) {
                let singleDish = {
                    dish_id: e,
                    quantity: quantity,
                    total_price: singlePrice * quantity
                }
                for (let i = 0; i < selectedDishes.length; i++) {
                    if (selectedDishes[i].dish_id == singleDish.dish_id) {
                        selectedDishes[i].total_price = singleDish.total_price;
                    }
                };

                dishquantity.remove();
                cartItem.innerHTML +=
                    `<p class="dish-quantity-${e}">Quantità: ${quantity}</p>`;
                stampaPrezzo.innerHTML = totalPrice(selectedDishes)
                totalPriceDB.value = totalPrice(selectedDishes);
            } else {
                cartItem.innerHTML = ""
            }
        }

        function totalPrice(array) {
            let prezzoTotale = 0;
            for (let i = 0; i < array.length; i++) {
                prezzoTotale += parseFloat(array[i].total_price);
            }
            return prezzoTotale.toFixed(2);
        }
    </script>
@endsection

<script>
    var dishes = {!! json_encode($dishes->toArray(), JSON_HEX_TAG) !!};
</script>
