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
            <div>
                @foreach ($dishcategories as $category)
                    <div>
                        <p>{{ $category->name }}</p>
                        @foreach ($dishes as $dish)
                            <div class="form-check form-check-inline">
                                @if ($dish->dishcategory_id == $category->id)
                                    <input type="checkbox" class="form-check-input" id="dish-{{ $dish->id }}"
                                        name="dishes[]" value="{{ $dish->id }}"
                                        @if (in_array($dish->id, old('dishes', []))) checked @endif>
                                    {{ $dish->name }}
                                    <select name="dishes[]" id="quantity">
                                        @for ($i = 1; $i < 11; $i++)
                                            <option value={{ $i }}>{{ $i }}</option>
                                        @endfor
                                    </select>
                                @endif
                            </div>
                        @endforeach
                    </div>
                @endforeach
            </div>
            <div>
                <label for="name">Conto:</label>
                <input type="text" id="total_price" name="total_price" value="{{ old('total_price') }}"
                    class="mx-3">
            </div>
            <button type="submit" class="mt-5">Invia</button>
        </form>
    </div>
@endsection
