@extends('layouts.app')

@section('optionalscripts')
    <script defer src="{{ asset('js/dishQuantity.js') }}"></script>
@endsection

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

    <div class="container">
        <form action="{{ route('admin.orders.store') }}" method="POST">
            @csrf
            <div>
                <label for="name">Nome:</label>
                <input type="text" id="customer_name" name="customer_name" value="{{ old('customer_name') }}"
                    class="mx-3">
            </div>
            <div>
                <label for="name">Cognome:</label>
                <input type="text" id="customer_lastname" name="customer_lastname"
                    value="{{ old('customer_lastname') }}" class="mx-3">
            </div>
            <div>
                <label for="name">Indirizzo:</label>
                <input type="text" id="customer_address" name="customer_address" value="{{ old('customer_address') }}"
                    class="mx-3">
            </div>
            <div>
                <label for="name">Numero telefono:</label>
                <input type="text" id="customer_phone" name="customer_phone" value="{{ old('customer_phone') }}"
                    class="mx-3">
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
                    <option value="1">Si</option>
                    <option value="0">No</option>
                </select>
            </div>
            <div class="d-flex flex-wrap mt-5">
                @foreach ($dishcategories as $category)
                    <div class="col-4">
                        <span class="text-capitalize">{{ $category->name }}</span>
                        @foreach ($dishes as $dish)
                            @if ($dish->dishcategory_id == $category->id)
                                <div>
                                    <input type="checkbox" class="form-check-input" id="dish-checkbox-{{ $dish->id }}"
                                        name="dishes[]" value="{{ $dish->id }}" onclick="dishSelection(e)"
                                        @if (in_array($dish->id, old('dishes', []))) checked @endif>
                                    {{ $dish->name }}
                                    <span id="dish-price">{{ $dish->price }}€</span>
                                    <input type="number" name="quantity[]" id="dish-select-{{ $dish->id }}" disabled
                                        style="width: 60px" min="1" value="1">
                                    </select>
                                </div>
                            @endif
                        @endforeach
                    </div>
                @endforeach
            </div>
            <button type="submit" class="mt-5">Invia</button>
        </form>
        <div id="prova"></div>
    </div>
@endsection

<script>
    var dishes = {!! json_encode($dishes->toArray(), JSON_HEX_TAG) !!};
</script>
