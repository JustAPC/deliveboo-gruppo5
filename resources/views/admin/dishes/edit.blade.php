@extends('layouts.app')

@section('optionalscripts')
    <script defer src="{{ asset('js/imageUpload.js') }}"></script>
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

        <form action="{{ route('admin.dishes.update', $dish->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <label for="name">Nome del piatto:</label>
            <input type="text" id="name" name="name" value="{{ old('name', $dish->name) }}" class="mx-3 my-5">

            <label for="quantity">Quantità:</label>
            <input type="number" id="quantity" name="quantity" min="1"
                value="{{ old('quantity', $dish->quantity) }}" class="mx-3 my-5">

            <label for="ingredients">Ingredienti:</label>
            <input type="text" id="ingredients" name="ingredients" value="{{ old('ingredients', $dish->ingredients) }}"
                class="mx-3 my-5">

            <label for="available">Disponibile:</label>
            <select name="available" id="available">
                <option value="1" @if (old('available', $dish->available) == 1) selected @endif>Si</option>
                <option value="2" @if (old('available', $dish->available) == 0) selected @endif>No</option>
            </select>

            <label for="name">Prezzo:</label>
            <input type="text" id="price" name="price" value="{{ old('price', $dish->price) }}"
                class="mx-3 my-5">

            <label for="description">Descrizione:</label>
            <input type="text" id="description" name="description" value="{{ old('description', $dish->description) }}"
                class="mx-3 my-5">

            <label for="dishcategory">Categoria Piatto:</label>
            <select name="dishcategory_id" id="dishcategory">
                <option disabled>Scegli una categoria...</option>
                @foreach ($dishcategories as $category)
                    <option @if (old('dishcategory_id', $dish->dishcategory_id) == $category->id) selected @endif value="{{ $category->id }}">
                        {{ $category->name }}
                    </option>
                @endforeach
            </select>

            <div class="mt-5" style="padding-top: 200px">
                <p>Immagine del piatto:</p>
                <input id="myfiles" name="image" type="file" accept="image/*">
                <button id="file_remove" disabled>Rimuovi</button>
                <div id="img-preview"></div>
                <div class="mt-5">
                    <label for="image_url">oppure</label>
                    <input type="url" name="image" id="image_url" class="mx-3">
                </div>
            </div>

            <button type="submit" class="mt-5">Invia</button>
        </form>
    </div>
@endsection
