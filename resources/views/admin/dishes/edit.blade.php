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

    <div class="bg"></div>
    <div class="bg bg2"></div>
    <div class="bg bg3"></div>

    <div class="container mt-5 pt-5 ">

        <h1 class="mb-5 pt-5">Modifica il piatto</h1>

        <form action="{{ route('admin.dishes.update', $dish->id) }}" method="POST" enctype="multipart/form-data"
            class="needs-validation" novalidate>
            @csrf
            @method('PUT')
            {{-- Riga nome --}}
            <div class="form-group floating">
                <input type="text" id="name" name="name" required value="{{ old('name', $dish->name) }}"
                    class="form-control floating">
                <div class="invalid-feedback">
                    Inserisci il nome del piatto
                </div>
                <label for="name">Nome del piatto</label>
            </div>

            {{-- riga quantità + ingredienti + disponibile + prezzo --}}
            <div class="form-row">
                <div class="form-group floating col-md-1">
                    <input type="number" id="quantity" name="quantity" min="1" value="1"
                        value="{{ old('quantity', $dish->quantity) }}" class="form-control floating">
                    <label for="quantity">Quantità:</label>
                </div>

                <div class="form-group floating col-md-8">
                    <input type="text" id="ingredients" name="ingredients" required
                        value="{{ old('ingredients', $dish->ingredients) }}" class="form-control floating">
                    <div class="invalid-feedback">
                        Inserisci gli ingredienti
                    </div>
                    <label for="ingredients">Ingredienti</label>
                </div>

                <div class="form-group floating col-md-1">
                    <select name="available" id="available" class="form-control floating">
                        <option value="1" @if (old('available', $dish->available) == 1) selected @endif>Si</option>
                        <option value="2" @if (old('available', $dish->available) == 0) selected @endif>No</option>
                    </select>
                    <label for="available">Disponibile:</label>
                </div>

                <div class="form-group floating col-md-2">
                    <input type="number" step=".01" id="price" name="price" required
                        value="{{ old('price', $dish->price) }}" class="form-control floating">
                    <div class="invalid-feedback">
                        Inserisci il prezzo
                    </div>
                    <label for="name">Prezzo in €</label>
                </div>
            </div>

            {{-- riga descrizione + categoria piatto --}}
            <div class="form-row">
                <div class="form-group floating col-md-8">
                    <input type="text" id="description" name="description"
                        value="{{ old('description', $dish->description) }}" class="form-control floating">
                    <label for="description">Descrizione:</label>
                </div>

                <div class="form-group floating col-md-4">
                    <select name="dishcategory_id" id="dishcategory_id" class="form-control floating" required>
                        <option disabled selected value="">Scegli una categoria...</option>
                        @foreach ($dishcategories as $category)
                            <option @if (old('dishcategory_id', $dish->dishcategory_id) == $category->id) selected @endif value="{{ $category->id }}">
                                {{ $category->name }}
                            </option>
                        @endforeach
                    </select>
                    <div class="invalid-feedback">
                        Seleziona una categoria
                    </div>


                </div>
            </div>

            {{-- riga immagine caricamento file + url --}}
            <div class="form-row d-flex align-items-center">
                <div class="form-group col-md-4">
                    <input id="myfiles" name="image" type="file" accept="image/*">
                    <button id="file_remove" class="btn btn-orange mt-3" disabled>Rimuovi</button>
                    <div id="img-preview" class="pt-5"></div>
                </div>
                <div class="form-group col-md-8">
                    <input type="url" name="image" id="image_url" class="form-control" value="{{ old('image') }}">
                    <label for="image_url">oppure inserisci url</label>
                </div>
            </div>

            {{-- submit button --}}
            <div class="form-group mt-5 d-flex justify-content-center">
                <button type="submit" class="btn btn-orange w-25 h-75">Invia</button>
            </div>

        </form>
    </div>
@endsection


{{-- Validazione client-side --}}
<script>
    (function() {
        'use strict';
        window.addEventListener('load', function() {
            var forms = document.getElementsByClassName('needs-validation');
            var validation = Array.prototype.filter.call(forms, function(form) {
                form.addEventListener('submit', function(event) {
                    if (form.checkValidity() === false) {
                        event.preventDefault();
                        event.stopPropagation();
                    }
                    form.classList.add('was-validated');
                }, false);
            });
        }, false);
    })();
</script>
