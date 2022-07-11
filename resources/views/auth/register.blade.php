@extends('layouts.app')

@section('content')
<div class="w-50 m-auto">

    <h1 class="my-4">Registrazione</h1>
    <form method="POST" action="{{ route('register') }}">
        @csrf

        {{-- Nome utente - nome attività --}}
        <div class="form-row">
            {{-- Nome Utente --}}
            <div class="form-group floating col-5">
                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror floating"
                    name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                <label for="name">{{ __('Nome del ristoratore') }}</label>
                @error('name')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>

            {{-- Nome Attività --}}
            <div class="form-group floating col-5 offset-2">
                <input id="restaurant_name" type="text"
                    class="form-control @error('restaurant_name') is-invalid @enderror floating" name="restaurant_name"
                    value="{{ old('restaurant_name') }}" required autocomplete="restaurant_name" autofocus>
                <label for="restaurant_name">{{ __('Nome Attività') }}</label>
                @error('restaurant_name')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>

        </div>

        {{-- Indirizzo--}}
        <div class="form-row">
            {{-- Indirizzo --}}
            <div class="form-group floating col-8">
                <input id="address" type="text" class="form-control @error('address') is-invalid @enderror floating"
                    name="address" value="{{ old('address') }}" required autocomplete="address" autofocus>
                <label for="address">{{ __('Indirizzo') }}</label>
                @error('address')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
        </div>

        {{--Stato città - Zip --}}
        <div class="form-row">
            {{-- Stato --}}
            <div class="form-group floating col-4">
                <input id="state" type="text" class="form-control @error('state') is-invalid @enderror floating"
                    name="state" value="{{ old('state') }}" required autocomplete="state" autofocus>
                <label for="state">{{ __('Stato') }}</label>
                @error('state')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>

            {{-- Città --}}
            <div class="form-group floating col-4">
                <input id="city" type="text" class="form-control @error('city') is-invalid @enderror floating"
                    name="city" value="{{ old('city') }}" required autocomplete="city" autofocus>
                <label for="city">{{ __('Città') }}</label>
                @error('city')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>

            {{-- Codice Postale --}}
            <div class="form-group floating col-3 offset-1">
                <input id="zip" type="text" class="form-control @error('zip') is-invalid @enderror floating" name="zip"
                    value="{{ old('zip') }}" required autocomplete="zip" autofocus>
                <label for="zip">{{ __('Codice postale') }}</label>
                @error('zip')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
        </div>

        <div class="form-row">
            {{-- Numero di telefono --}}
            <div class="form-group floating col-5">
                <input id="phone_number" type="text"
                    class="form-control @error('phone_number') is-invalid @enderror floating" name="phone_number"
                    value="{{ old('phone_number') }}" required autocomplete="phone_number" autofocus>
                <label for="phone_number">{{ __('Telefono') }}</label>
                @error('phone_number')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>

            {{-- P IVA --}}
            <div class="form-group floating col-5 offset-2">
                <input id="vat" type="text" class="form-control @error('vat') is-invalid @enderror floating" name="vat"
                    value="{{ old('vat') }}" required autocomplete="vat" autofocus>
                <label for="vat">{{ __('P.IVA') }}</label>
                @error('vat')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
        </div>

        {{-- Tipo di ristorante --}}
        <div class="form-group form-control @error('types') is-invalid @enderror mb-5">
            @foreach ($types as $type)
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" id="type-{{$type->id}}" value="{{$type->id}}" @if(
                    in_array($type->id , old('types', []) ) ) checked @endif
                name="types[]"
                >
                <label class="form-check-label" for="type-{{$type->id}}">{{$type->name}}</label>
            </div>
            @endforeach
            @error('types')
            <span class="invalid-feedback" role="alert">
                <strong>You need to check at least one box</strong>
            </span>
            @enderror
        </div>

        {{-- Immagine ristorante --}}
        <div class="form-group floating">
            <input id="restaurant_img" type="text"
                class="form-control @error('restaurant_img') is-invalid @enderror floating" name="restaurant_img"
                value="{{ old('restaurant_img') }}" autocomplete="restaurant_img" autofocus>
            <label for="restaurant_img">{{ __('Url immagine ristorante') }}</label>

            @error('restaurant_img')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>

        {{-- Email --}}
        <div class="form-group floating">
            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror floating"
                name="email" value="{{ old('email') }}" required autocomplete="email">
            <label for="email">{{ __('E-Mail') }}</label>

            @error('email')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>

        {{-- Password --}}
        <div class="form-group floating">
            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror floating"
                name="password" required autocomplete="new-password">
            <label for="password">{{ __('Password') }}</label>

            @error('password')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>

        {{-- Password confirm --}}
        <div class="form-group floating">
            <input id="password-confirm" type="password" class="form-control floating" name="password_confirmation"
                required autocomplete="new-password">
            <label for="password-confirm">{{ __('Confirm Password') }}</label>
        </div>

        {{-- Button registe --}}
        <div class="form-group row mb-0">
            <div class="col-6">
                <button type="submit" class="btn btn-primary">
                    {{ __('Register') }}
                </button>
            </div>
        </div>
    </form>

</div>

@endsection
