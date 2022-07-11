@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-11 d-flex justify-content-between align-items-center">
            
            {{-- MODALE DI NOTIFICA LOGIN - DA CANCELLARE --}}
            {{-- <div class="card">
                <div class="card-header">{{ __('Le mie statistiche') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('Sei loggato!') }}
                </div>
                
            </div> --}}

            <h2>Le mie statistiche</h2>

            <div>
                <span class="mr-1">Ordina per:</span>
                <select class="form-select" aria-label="Default select example">
                    <option selected value="year">Anno</option>
                    <option value="month">Mese</option>
                    <option value="week">Settimana</option>
                </select>
            </div>
        </div>

        {{-- Box delle statistiche --}}
        <div class="col-md-11 d-flex justify-content-between align-items-center">

            {{-- INSERIRE STATISTICHE QUI --}}

        </div>
    </div>

</div>
@endsection
