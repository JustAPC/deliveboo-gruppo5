@extends('layouts.app')

@section('content')
<div class="bg"></div>
<div class="bg bg2"></div>
<div class="bg bg3"></div>
<section class="d-flex justify-content-center nav-fix vh-100">

    <div class="d-flex flex-column justify-content-center ">

        <div class="rounded bg-white p-5">

            <div class="text-center align-self-center">
                <h3 class="user">Benvenuto {{$user->name}}</h3>
            </div>

            <div class="text-center">
                <h1 class="">{{ $user->restaurant_name }}</h1>
                <div class="d-flex justify-content-center mb-3">
                    @foreach ($user->UsersType as $type)
                    <span class="badge badge-primary mr-3">{{$type->name}}</span>
                    @endforeach
                </div>

                <p class="d-flex justify-content-center">
                    <a href="{{route('admin.dishes.index')}}" class="btn-cerca-vedi mr-5">Visualizza Piatti</a>
                    <a href="{{route('admin.orders.index')}}" type="button" class="btn-cerca-vedi">Visualizza Ordini</a>
                </p>
            </div>

        </div>

    </div>

</section>

@endsection

<style>
    .bg {
        animation: slide 3s ease-in-out infinite alternate;
        background-image: linear-gradient(-60deg, #6c3 50%, #09f 50%);
        bottom: 0;
        left: -50%;
        opacity: .5;
        position: fixed;
        right: -50%;
        top: 0;
        z-index: -1;
    }

    .bg2 {
        animation-direction: alternate-reverse;
        animation-duration: 4s;
    }

    .bg3 {
        animation-duration: 5s;
    }

    @keyframes slide {
        0% {
            transform: translateX(-25%);
        }

        100% {
            transform: translateX(25%);
        }
    }

    .btn-cerca-vedi {
        border: 1px solid #e98c22;
        color: #e98c22;
        background-color: white;
        border-radius: 5px;
        font-size: 14px;
        padding: 6px 12px;
        margin-bottom: 0;
    }

</style>
