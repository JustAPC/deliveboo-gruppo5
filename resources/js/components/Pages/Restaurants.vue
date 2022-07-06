<template>
    <div class="container">

        <div>
            <select class="my-3 mx-5" name="" id="" v-model="ricerca" @change="getRestaurants">
                <option value="">Seleziona un genere</option>
                <option :value="type.id" v-for="type in types" :key="type.id">{{type.name}}</option>
            </select>
        </div>    
        <div>
        
      
      
            <div class="card mb-3" v-for="restaurant in restaurants.restaurants"
                :key="restaurant.id">
                <img :src="restaurant.restaurant_img" class="card-img-top img-fluid" alt="...">
                <div class="card-body">
                    <h5 class="card-title">{{restaurant.name}}</h5>
                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to
                        additional content. This content is a little bit longer.</p>
                    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                </div>
            </div>

        </div>
    </div>
</template>

<script>
    import axios from "axios";
    import {
        Carousel,
        Slide,
        Navigation
    } from "vue-carousel";

    export default {
        name: "Restaurant",
        components: {
            Carousel,
            Slide,
            Navigation,
        },
        data() {
            return {
                types: [],
                restaurants: [],
                ricerca: ''
            };
        },
        methods: {
            getType() {
                axios
                    .get(`http://127.0.0.1:8000/api/types`)
                    .then((res) => {

                        this.types = res.data.types;
                        console.log(this.types);

                    });

            },
            getRestaurants() {
                axios
                    .get(`http://127.0.0.1:8000/api/types/` + this.ricerca)
                    .then((res) => {

                        this.restaurants = res.data.types;
                        console.log(this.restaurants);

                    });

            },



        },
        mounted() {
            this.getType();
            this.getRestaurants();

        },
    };

</script>
