@extends('layouts.app')

@section('optionalscripts')
    <script defer src="{{ asset('js/imageUpload.js') }}"></script>
@endsection


@section('content')
    <div class="container">
        <form action="{{ route('admin.dishes.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <label for="name">Nome del piatto:</label>
            <input type="text" id="name" name="name" value="{{ old('name') }}" class="mx-3">

            <label for="quantity">Quantità:</label>
            <input type="number" id="quantity" name="quantity" min="1" value="1"
                value="{{ old('quantity') }}" class="mx-3">

            <label for="ingredients">Ingredienti:</label>
            <input type="text" id="ingredients" name="ingredients" value="{{ old('ingredients') }}" class="mx-3">

            <label for="available">Disponibile:</label>
            <select name="available" id="available">
                <option value="1">Si</option>
                <option value="0">No</option>
            </select>

            <label for="name">Prezzo:</label>
            <input type="text" id="price" name="price" value="{{ old('price') }}" class="mx-3">

            <label for="description">Descrizione:</label>
            <input type="text" id="description" name="description" value="{{ old('description') }}" class="mx-3">

            <span>Categoria Piatto:</span>
            <select name="dishcategory_id" id="dishcategory">
                <option value="">Scegli una categoria...</option>
                @foreach ($dishcategories as $category)
                    <option value="{{ $category->id }}" class="text-capitalize">{{ $category->name }}</option>
                @endforeach
            </select>

            <div class="mt-5" style="padding-top: 200px">
                <p>Immagine del piatto:</p>
                <input id="myfiles" name="image" type="file" accept="image/*">
                <button id="file_remove" disabled>Rimuovi</button>
                <div class="mt-5">
                    <label for="image_url">oppure</label>
                    <input type="url" name="image" id="image_url" class="mx-3">
                </div>
            </div>

            <button type="submit" class="mt-5">Invia</button>
        </form>
    </div>
@endsection
