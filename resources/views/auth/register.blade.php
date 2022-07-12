@extends('layouts.app')

@section('content')
<div class="w-50 m-auto">

    <h1 class="my-4">Registrazione</h1>
    <form method="POST" action="{{ route('register') }}" class="needs-validation" novalidate>
        @csrf

        {{-- Nome Utente --}}
        <div class="form-group mb-4">
            <label for="name">{{ __('Nome del ristoratore') }}</label>
            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror " name="name"
                value="{{ old('name') }}" autocomplete="name" autofocus>
            <div class="invalid-feedback">
                Inserisci il nome utente
            </div>

        </div>

        {{-- Nome Attività --}}
        <div class="form-group mb-4 ">
            <label for="restaurant_name">{{ __('Nome Attività') }}</label>
            <input id="restaurant_name" type="text" class="form-control @error('restaurant_name') is-invalid @enderror "
                name="restaurant_name" value="{{ old('restaurant_name') }}" required autocomplete="restaurant_name"
                autofocus>
            <div class="invalid-feedback">
                Inserisci il nome dell'attività
            </div>

        </div>


        {{-- Indirizzo --}}
        <div class="form-group mb-4">
            <label for="address">{{ __('Indirizzo') }}</label>
            <input id="address" type="text" class="form-control @error('address') is-invalid @enderror " name="address"
                value="{{ old('address') }}" required autocomplete="address" autofocus>
            <div class="invalid-feedback">
                Inserisci un indirizzo
            </div>
        </div>

        {{--Stato città - Zip --}}
        <div class="form-row mb-4">
            {{-- Stato --}}
            <div class="form-group col-6 col-md-4">
                <label for="state">{{ __('Stato') }}</label>
                <input id="state" type="text" class="form-control @error('state') is-invalid @enderror " name="state"
                    value="{{ old('state') }}" required autocomplete="state" autofocus>
                <div class="invalid-feedback">
                    Inserisci uno stato
                </div>
            </div>

            {{-- Città --}}
            <div class="form-group col-6 col-md-4">
                <label for="city">{{ __('Città') }}</label>
                <input id="city" type="text" class="form-control @error('city') is-invalid @enderror " name="city"
                    value="{{ old('city') }}" required autocomplete="city" autofocus>
                <div class="invalid-feedback">
                    Inserisci una città
                </div>
            </div>

            {{-- Codice Postale --}}
            <div class="form-group col-6 offset-md-1 col-md-3">
                <label for="zip">{{ __('Codice postale') }}</label>
                <input id="zip" type="text" class="form-control @error('zip') is-invalid @enderror " name="zip"
                    value="{{ old('zip') }}" required autocomplete="zip" autofocus>
                <div class="invalid-feedback">
                    Inserisci un codice postale valido
                </div>
            </div>
        </div>

        {{-- Numero di telefono --}}
        <div class="form-group mb-4 ">
            <label for="phone_number">{{ __('Telefono') }}</label>
            <input id="phone_number" type="text" class="form-control @error('phone_number') is-invalid @enderror "
                name="phone_number" value="{{ old('phone_number') }}" required autocomplete="phone_number" autofocus>
            <div class="invalid-feedback">
                Inserisci un numero di telefono valido
            </div>

        </div>

        {{-- P IVA --}}
        <div class="form-group mb-4">
            <label for="vat">{{ __('P.IVA') }}</label>
            <input id="vat" type="text" class="form-control @error('vat') is-invalid @enderror " name="vat"
                value="{{ old('vat') }}" required autocomplete="vat" autofocus>
            <div class="invalid-feedback">
                Inserisci un numero di partita iva valido
            </div>

        </div>

        {{-- Tipo di ristorante --}}
        <div class="mb-4">
            <p>Categorie</p>
            <div class="border p-2">
                @foreach ($types as $type)
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" id="type-{{$type->id}}" value="{{$type->id}}" @if(
                        in_array($type->id , old('types', []) ) ) checked @endif
                    name="types[]"
                    >
                    <label class="form-check-label" for="type-{{$type->id}}">{{$type->name}}</label>
                </div>
                @endforeach
                <div class="invalid-feedback">
                    Seleziona almeno una categoria
                </div>
            </div>

        </div>

        {{-- Immagine ristorante --}}
        <div class="form-group mb-4">
            <label for="restaurant_img">{{ __('Url immagine ristorante') }}</label>
            <input id="restaurant_img" type="text" class="form-control @error('restaurant_img') is-invalid @enderror "
                name="restaurant_img" value="{{ old('restaurant_img') }}" autocomplete="restaurant_img" autofocus>
        </div>

        {{-- Email --}}
        <div class="form-group mb-4">
            <label for="email">{{ __('E-Mail') }}</label>
            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror " name="email"
                value="{{ old('email') }}" required autocomplete="email">
            <div class="invalid-feedback">
                Inserisci una mail valida
            </div>
        </div>

        {{-- Password --}}
        <div class="form-group mb-4">
            <label for="password">{{ __('Password') }}</label>
            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror "
                name="password" required autocomplete="new-password">
        </div>

        {{-- Password confirm --}}
        <div class="form-group mb-4">
            <label for="password-confirm">{{ __('Confirm Password') }}</label>
            <input id="password-confirm" type="password" class="form-control " name="password_confirmation" required
                autocomplete="new-password">
        </div>

        {{-- Button registe --}}
        <div class="form-group row mb-4">
            <div class="col-6">
                <button type="submit" class="btn btn-primary">
                    {{ __('Register') }}
                </button>
            </div>
        </div>
    </form>

</div>

@endsection

{{-- Validazione client-side --}}
<script>
    (function () {
        'use strict';
        window.addEventListener('load', function () {
            var forms = document.getElementsByClassName('needs-validation');
            var validation = Array.prototype.filter.call(forms, function (form) {
                form.addEventListener('submit', function (event) {
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
