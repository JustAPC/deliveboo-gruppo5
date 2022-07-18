@extends('layouts.app')

@section('content')
    <div class="container pt-5">
        <div class="contenitoreRegistrazione">
            <div class="bg"></div>
            <div class="bg bg2"></div>
            <div class="bg bg3"></div>
            {{-- <h1 class="">Registrazione</h1> --}}
            <h1 class="titoloRegistrazione">Registrazione</h1>
            <span id="required-fields">I campi contrassegnati con (*) sono obbligatori.</span>
            <form method="POST" enctype="multipart/form-data" action="{{ route('register') }}"
                class="needs-validation formRegister" novalidate>
                @csrf
                {{-- Nome Utente --}}
                <div class="barraRegister">
                    <label for="name">{{ __('Nome del ristoratore *') }}</label>
                    <input id="name" type="text" class=" @error('name') is-invalid @enderror " name="name"
                        value="{{ old('name') }}" autocomplete="name" autofocus>
                    <div class="invalid-feedback">
                        Inserisci il nome utente
                    </div>

                </div>

                {{-- Nome Attività --}}
                <div class=" barraRegister">
                    <label for="restaurant_name">{{ __('Nome Attività *') }}</label>
                    <input id="restaurant_name" type="text" class=" @error('restaurant_name') is-invalid @enderror "
                        name="restaurant_name" value="{{ old('restaurant_name') }}" required
                        autocomplete="restaurant_name" autofocus>
                    <div class="invalid-feedback">
                        Inserisci il nome dell'attività
                    </div>

                </div>


                {{-- Indirizzo --}}
                <div class="barraRegister">
                    <label for="address">{{ __('Indirizzo *') }}</label>
                    <input id="address" type="text" class=" @error('address') is-invalid @enderror " name="address"
                        value="{{ old('address') }}" required autocomplete="address" autofocus>
                    <div class="invalid-feedback">
                        Inserisci un indirizzo
                    </div>
                </div>

                {{-- Stato città - Zip --}}

                {{-- Stato --}}
                <div class="barraRegister">
                    <label for="state">{{ __('Regione *') }}</label>
                    <input id="state" type="text" class=" @error('state') is-invalid @enderror " name="state"
                        value="{{ old('state') }}" required autocomplete="state" autofocus>
                    <div class="invalid-feedback">
                        Inserisci uno stato
                    </div>
                </div>

                {{-- Città --}}
                <div class="barraRegister">
                    <label for="city">{{ __('Città *') }}</label>
                    <input id="city" type="text" class=" @error('city') is-invalid @enderror " name="city"
                        value="{{ old('city') }}" required autocomplete="city" autofocus>
                    <div class="invalid-feedback">
                        Inserisci una città
                    </div>
                </div>

                {{-- Codice Postale --}}
                <div class="barraRegister">
                    <label for="zip">{{ __('Codice postale *') }}</label>
                    <input id="zip" type="number" class=" @error('zip') is-invalid @enderror " name="zip"
                        value="{{ old('zip') }}" required autocomplete="zip" autofocus>
                    <div class="invalid-feedback">
                        Inserisci un codice postale valido
                    </div>
                </div>


                {{-- Numero di telefono --}}
                <div class=" barraRegister">
                    <label for="phone_number">{{ __('Numero di Telefono *') }}</label>
                    <input id="phone_number" type="number" class=" @error('phone_number') is-invalid @enderror "
                        name="phone_number" value="{{ old('phone_number') }}" required autocomplete="phone_number"
                        autofocus>
                    <div class="invalid-feedback">
                        Inserisci un numero di telefono valido
                    </div>

                </div>

                {{-- P IVA --}}
                <div class="barraRegister">
                    <label for="vat">{{ __('P.IVA *') }}</label>
                    <input id="vat" type="number" class=" @error('vat') is-invalid @enderror " name="vat"
                        value="{{ old('vat') }}" required autocomplete="vat" autofocus>
                    <div class="invalid-feedback">
                        Inserisci un numero di partita iva valido
                    </div>

                </div>

                {{-- Tipo di ristorante --}}
                <div class="barraRegisterRisto">
                    <p class="py-2" style="border-bottom: 2px solid #D4EEFF">Categorie *</p>
                    <div class="p-2">
                        @foreach ($types as $type)
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="type-{{ $type->id }}"
                                    value="{{ $type->id }}" @if (in_array($type->id, old('types', []))) checked @endif
                                    name="types[]" class=" @error('type-{{ $type->id }}') is-invalid @enderror ">
                                <label class="form-check-label" for="type-{{ $type->id }}">{{ $type->name }}</label>
                            </div>
                        @endforeach
                    </div>
                    <div class="invalid-feedback">
                        Seleziona almeno una categoria
                    </div>

                </div>

                {{-- Email --}}
                <div class="barraRegisterRisto">
                    <label for="email">{{ __('E-Mail *') }}</label>
                    <input id="email" type="email" class=" @error('email') is-invalid @enderror " name="email"
                        value="{{ old('email') }}" required autocomplete="email">
                    <div class="invalid-feedback">
                        Inserisci una mail valida
                    </div>
                </div>

                {{-- Password --}}
                <div class="barraRegister">
                    <label for="password">{{ __('Password *') }}</label>
                    <input id="password" type="password" class=" @error('password') is-invalid @enderror "
                        name="password" required autocomplete="new-password">
                    <div class="invalid-feedback">
                        Le due password devono coincidere
                    </div>
                </div>

                {{-- Password confirm --}}
                <div class="barraRegister">
                    <label for="password-confirm">{{ __('Confirm Password *') }}</label>
                    <input id="password-confirm" type="password"
                        class=" @error('password-confirm') is-invalid @enderror " name="password_confirmation" required
                        autocomplete="new-password">

                </div>

                {{-- Immagine ristorante --}}
                <div class="d-flex flex-row justify-content-between barraRegister align-items-center">
                    <input id="myfiles" name="restaurant_img" type="file" accept="image/*" class="w-75">
                    <button id="file_remove" class="btn image-remove-button mr-3" disabled>Rimuovi</button>
                </div>

                <div class="barraRegister">
                    <label for="image_url">{{ __('Url immagine ristorante') }}</label>
                    <input id="image_url" type="text" class=" @error('image_url') is-invalid @enderror "
                        name="restaurant_img" value="{{ old('image_url') }}" autocomplete="image_url" autofocus>
                </div>

                {{-- Button registe --}}

                <div class="divRegister">
                    <button type="submit" class="submitRegister">
                        {{ __('Register') }}
                    </button>
                </div>

            </form>

        </div>
    </div>
    <script>
        const fileInput = document.querySelector("#myfiles");
        const image_url = document.getElementById("image_url");
        const removeButton = document.getElementById("file_remove");

        fileInput.addEventListener("change", () => {
            if (fileInput.length != 0) {
                image_url.setAttribute("disabled", "");
                removeButton.removeAttribute("disabled");
            }
        });

        const inputHandler = function(e) {
            if (e.target.value != 0) {
                fileInput.setAttribute("disabled", "");
            } else if (e.target.value == 0) {
                fileInput.removeAttribute("disabled");
            }
        };
        image_url.addEventListener("input", inputHandler);
        image_url.addEventListener("propertychange", inputHandler);

        removeButton.addEventListener("click", (e) => {
            e.preventDefault();
            fileInput.value = "";
            removeButton.setAttribute("disabled", "");
            image_url.removeAttribute("disabled");
        });
    </script>
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
