@extends('layouts.app')

@section('content')
<div class="bg"></div>
<div class="bg bg2"></div>
<div class="bg bg3"></div>
<section class="d-flex justify-content-center nav-fix vh-100">

    <div class="d-flex flex-column justify-content-center ">

        <div class="rounded bg-white p-5">

            <div class="text-center align-self-center">
                <h3 class="user">Benvenuto</h3>
            </div>

            <div class="text-center">
                <h1 class="font-italic">{{ $user->restaurant_name }}</h1>
                <div class="d-flex justify-content-center mb-3 badgeTesto">
                    @foreach ($user->UsersType as $type)
                    <span class="badge badge-primary mr-3 badge-pill">{{$type->name}}</span>
                    @endforeach
                </div>

                <p class="d-flex justify-content-center">
                    <a href="{{route('admin.dishes.index')}}" class="btn-cerca-vedi ">Visualizza Piatti</a>
                    
                </p>
            </div>
            {{-- slideshow --}}
            
            <div class="pannello-slide">
             
              <div id="posto-immagine">
               
              </div>
               <span id="sinistra-freccia">&#10096;</span>
              <span id="destra-freccia" ">&#10097;</span>
            </div>
            
            {{-- fine --}}
            <p class="d-flex justify-content-center">
                   
                    <a href="{{route('admin.orders.index')}}" type="button" class="btn-cerca-vedi">Visualizza Ordini</a>
                </p>

                <div class="pannelloOrdini">
                    <span class="spanOrdini">Ordini completati e pagati: <span id="orC"></span></span>
                    <span class="spanOrdini">Ordini da completare o da pagare: <span id="orP"></span></span>
                </div>
        </div>
        
    </div>
    @php
        
    @endphp
</section>


<script>
let frecciaDestra = document.getElementById('destra-freccia');
let frecciaSinistra = document.getElementById('sinistra-freccia');
let indexPiatto = 0;
let piatti = <?php echo json_encode($dishes); ?>;
let ordini = <?php echo json_encode($orders); ?>;
let imagePiatto = piatti[indexPiatto]['image'];
let nomePiatto = piatti[indexPiatto]['name'];
document.getElementById("posto-immagine").innerHTML = ` <img src="${imagePiatto}" alt="">
<p>${nomePiatto}</p>`;


frecciaDestra.addEventListener("click", function(){
    if(indexPiatto == piatti.length -1){
        indexPiatto = 0;
    } else {
        indexPiatto++;
    }
    
    let imagePiatto2 = piatti[indexPiatto]['image'];
    let nomePiatto2 = piatti[indexPiatto]['name'];
    document.getElementById("posto-immagine").innerHTML = ` <img src="${imagePiatto2}" alt="">
    <p>${nomePiatto2}</p>`;
    console.log(indexPiatto)
});
frecciaSinistra.addEventListener("click", function(){
    if(indexPiatto == 0){
        indexPiatto = piatti.length -1;
    } else {
        indexPiatto = indexPiatto -1;
    }
    
    let imagePiatto2 = piatti[indexPiatto]['image'];
    let nomePiatto2 = piatti[indexPiatto]['name'];
    document.getElementById("posto-immagine").innerHTML = ` <img src="${imagePiatto2}" alt="">
    <p>${nomePiatto2}</p>`;
    console.log(indexPiatto)
})
console.log(ordini)

    let risultatoOrdiniComple = 0;
    let nonCompletati = 0;
    for(i = 0; i < ordini.length; i++){
        if((ordini[i]['completed'] == true) && (ordini[i]['payment_received'] == true)){
            risultatoOrdiniComple++;
        } 
        
        
    }
    for(i = 0; i < ordini.length; i++){
        if((ordini[i]['completed'] != true) || (ordini[i]['payment_received'] != true)){
           nonCompletati++;
        } 
        
        
    }

console.log(risultatoOrdiniComple);
console.log(nonCompletati)
document.getElementById("orC").innerHTML = `${risultatoOrdiniComple}`
document.getElementById("orP").innerHTML = `${nonCompletati}`
</script>
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
.badgeTesto {
    font-size: 1.5em;
}

.pannelloOrdini {
    width: 100%;
    display: flex;
    justify-content: space-around;
    align-items: center;
    margin-top: 20px;
}
.spanOrdini {
    padding: 8px;
    background-color: #e98c22;
    border-radius: 15px;
    font-size: 1.1em;
    font-weight: bold;
    margin: 5px;
}
@media only screen and (max-width: 400px) {
    .spanOrdini {
            padding: 4px;
    background-color: #e98c22;
    border-radius: 10px;
    font-size: 0.9em;
    font-weight: bold;
    margin: 5px;
    }
 }
</style>
