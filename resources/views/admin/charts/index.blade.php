@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Statistiche</h1>

        {!! $chart->container() !!}
        {!! $chart->script() !!}
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.1/Chart.min.js" charset="utf-8"></script>
@endsection
