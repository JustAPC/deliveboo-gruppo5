<template>
    <div>
        <carousel class="mt-4" :per-page-custom="[[320,1],[481,2],[769,4],[1024,4],[1441,6]]" :navigationEnabled="true">
            <slide class="d-flex justify-content-center" v-for="type in types" :key="type.id">
                <div class="card" style="width: 14rem;">
                    <img class="img-fluid card-img-top" src="../../../../public/storage/img/hamburger.jpg" alt="...">
                    <div class="card-body">
                        <h5 class="card-title text-center">{{type.name}}</h5>
                    </div>
                </div>
            </slide>
        </carousel>

        <div v-for="restaurant in restaurants" :key="restaurant.id" class="scheda-ristorante">
            <p class="nome-ristorante">{{restaurant.name}}</p>
            
           <div class="insieme-tipi"> 
            <span v-for="item in restaurant.user_type" :key="item.id" class="type-ristorante">{{item.name}}</span>
            </div>
            
                <div v-for="item in restaurant.dishes" :key="item.id" class="piatto-scheda">
                   
                    <ul>
                        <!-- <li>Quantità: {{item.quantity}}.</li> -->
                        <!-- <li>Ingredienti: {{item.ingredients}}.</li> -->
                        <li class="nome-piatto">{{item.name}}</li> 
                        <li v-if="item.quantity >= 1" class="verde-disponibile">Disponibile</li>
                        <li v-else class="rosso-non-disponibile">= 1">Non disponibile</li>
                        <li v-if="(item.ingredients != null) && (item.ingredients != '')">Ingredienti: {{item.ingredients}}.</li>
                        <li v-if="(item.description != null) && (item.description != '')">Descrizione: {{item.description}}.</li>
                        <li>Categoria: {{item.dishcategory_id}}</li>
                        <li>Prezzo: {{item.price}}€</li>
                        
                    </ul>
                    <span class="pulsante-ordine">Aggiungi al carrello</span>
                </div>
                
            
                </div>
                
    </div>
</template>

<script>
import axios from 'axios';
 import {
        Carousel,
        Slide,
        Navigation
    } from 'vue-carousel';
export default{
     name:"Restaurant",
     components: {
            Carousel,
            Slide,
            Navigation
        },
     data(){
        return{
            restaurants: [],
            types: [],
            
        }
     },
     methods: {
        getRestaurants(){
            axios.get('http://127.0.0.1:8000/api/restaurants')
            .then((res)=> {
               this.restaurants = res.data.restaurants;
            })
        },
         getType() {
                axios.get('http://127.0.0.1:8000/api/types')
                    .then((res) => {
                        this.types = res.data.types;
                    })
            }
     },
     mounted(){
        this.getRestaurants();
        this.getType();
     }
}
</script>