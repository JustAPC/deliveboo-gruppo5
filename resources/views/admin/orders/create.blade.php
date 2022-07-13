@extends('layouts.app')

@section('content')
    @if ($errors->any())
        {{-- Se sono presenti errori backend --}}
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('admin.orders.store') }}" method="POST">
        @csrf

        <div class="bg"></div>
        <div class="bg bg2"></div>
        <div class="bg bg3"></div>

        <div class="container d-flex flex-column mt-5 pt-5">
            <div class="row d-flex content">
                <div class="col-md-6 col-sm-12">

                    {{-- sezione cliente --}}

                    <h3 class="my-2">Cliente</h3>

                    {{-- riga nome + cognome --}}
                    <div class="form-row">
                        <div class="d-flex flex-wrap col-md-12">

                            <div class="col-md-6 col-sm-6">
                                <label class="mr-4" for="customer_name">Nome:</label>
                                <input type="text" id="customer_name" name="customer_name" value="{{ old('customer_name') }}">
                            </div>

                            <div class="col-md-6 col-sm-6">
                                <label for="name">Cognome:</label>
                                <input type="text" id="customer_lastname" name="customer_lastname"
                                    value="{{ old('customer_lastname') }}">
                            </div>

                        </div>
                    </div>

                    {{-- riga indirizzo + numero di telefono --}}
                    <div class="form-row">
                        <div class="form-group d-flex flex-wrap col-md-12 col-sm-12">

                            <div class="col-md-6 col-sm-12">
                                <label class="mr-2" for="customer_address">Indirizzo:</label>
                                <input type="text" id="customer_address" name="customer_address"
                                    value="{{ old('customer_address') }}">
                            </div>

                            <div class="col-md-6 col-sm-12">
                                <label class="mr-2" for="name">Telefono:</label>
                                <input type="text" id="customer_phone" name="customer_phone"
                                    value="{{ old('customer_phone') }}">
                            </div>

                        </div>
                    </div>

                    {{-- riga completato + pagato --}}
                    <div class="form-group d-flex form-row">
                        <div class="col-md-6">
                            <span>Ordine completato:</span>
                            <select name="completed" id="completed">
                                <option value="1">Si</option>
                                <option value="0">No</option>
                            </select>
                        </div>
    
                        <div class="col-md-6">
                            <span>Pagamento ricevuto:</span>
                            <select name="payment_received" id="payment_received">
                                <option value="1">Si</option>
                                <option value="0">No</option>
                            </select>
                        </div>
                    </div>

                    {{-- Selezione piatti --}}
                    <div class="d-flex flex-column flex-wrap">
                        
                        <h3 class="my-2">Seleziona gli articoli</h3>
                        
                        @foreach ($dishcategories as $category)
                            <div class="col-12 d-flex flex-column">
            
                                {{-- Nome della categoria dei piatti --}}
                                <h5 class="text-capitalize mt-2">{{ $category->name }}</h5>
                                {{-- Stampo tutti i piatti della categoria --}}
                                @foreach ($dishes as $dish)
                                    @if ($dish->dishcategory_id == $category->id)

                                        <div class="row px-5">
                                            <input type="checkbox" class="form-check-input" id="dish-checkbox-{{ $dish->id }}"
                                                name="dishes[]" value="{{ $dish->id }}"
                                                onchange="addToCart({{ $dish->id }})"
                                                @if (in_array($dish->id, old('dishes', []))) checked @endif>

                                            <span class="col-8" id="dish-{{ $dish->id }}">{{ $dish->name }}</span>
            
                                            <span class="col-2 text-center" id="dish-{{ $dish->id }}-price">{{ $dish->price }}€</span>
            
                                            <div class="col-2">
                                                <input type="number" name="quantity[]" id="dish-quantity-{{ $dish->id }}" disabled
                                                    style="width: 60px" min="1" value="1"
                                                    onchange="updateCart({{ $dish->id }})">
                                            </div>
                                        </div>
                                    @endif
                                @endforeach
            
                            </div>
                        @endforeach
                    </div>

                </div>

                {{-- carrello --}}
                <div class="col-md-6 d-flex flex-column h-auto col-sm-12 bg_deliveboo rounded p-4">
                    <h2>Carrello</h2>

                    <div class="row d-flex">
                        <span class="col-8 font-weight-bold">Articolo</span>
                        <span class="col-1 text-center font-weight-bold">Prezzo</span>
                        <span class="col-3 text-center font-weight-bold">Qt.</span>
                    </div>

                    <div class="cart">

                    </div>

                    <div class="d-flex h-100 justify-content-end">
                        <h4 class="mr-1 align-self-end">Totale carrello:</h4>
                        <h4 id="prezzoTotale" class="font-weight-bold mr-1 align-self-end"></h4>
                        <h4 id="prezzoTotale"></h4>
                    </div>
                </div>
            </div>

            <div class="d-flex flex-wrap mt-5 col-8">


            </div>


            <input type="text" name="total_price" id="prezzoTotaleDB" value="" style="display: none">

            {{-- submit --}}
            <button type="submit" id="btn-invia" class="btn mt-3 mb-5">Invia</button>
        </div>
    </form>

    <script>
        let selectedDishes = [];
        let totalPriceDB = document.getElementById("prezzoTotaleDB");
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
                    `<div class="cart-item row my-1" id="item-${e}">
                    <span class="col-8 dish-name-${e}">${dishName}</span>
                    <span class="col-2 dish-price-${e}">${singlePrice}</span>
                    <span class="col-2 dish-quantity-${e}">${quantity}</span>
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
                        selectedDishes[i] = singleDish;
                    }
                };

                dishquantity.remove();
                cartItem.innerHTML +=
                    `<span class="dish-quantity-${e}">Quantità: ${quantity}</span>`;
                stampaPrezzo.innerHTML = totalPrice(selectedDishes) + "€"
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
        padding:5vmin;
    }

    @keyframes slide {
        0% {
        transform:translateX(-15%);
        }
        100% {
        transform:translateX(15%);
        }
    }

    .bg_deliveboo {
        background-color: #cc960056;
    }

    /* Stile bottoni */
    #btn-invia {
    background-color: #e98c22;
    color: white;
}

    #btn-invia:hover {
        background-color: #ec9530;
    }
</style>
