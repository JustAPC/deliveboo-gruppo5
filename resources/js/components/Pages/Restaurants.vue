<template>
    <div class="container">

        <div>
           
            <div class="d-flex">
                <div v-for="type in types" :key="type.id" >
                    <input type="checkbox" name="" :id="type.id" :value="type.id" v-model="ricerca" @change="funzRicerca">
                    <label :for="type.id" >{{type.name}}</label>
                </div>
            </div>


        </div>
        <div>
            <div class="card mb-3" v-for="restaurant in restaurants" :key="restaurant.id" v-if="restaurant.id">
                <img :src="restaurant.restaurant_img" class="card-img-top img-fluid" alt="...">
                <div class="card-body">
                    <h5 class="card-title">{{restaurant.name}}</h5>
                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to
                        additional content. This content is a little bit longer.</p>
                    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                </div>
            </div>



            <div class="card mb-3" v-for="restaurant in restaurants.restaurants" :key="restaurant.id">
                <img :src="restaurant.restaurant_img" class="card-img-top img-fluid" alt="...">
                <div class="card-body">
                    <h5 class="card-title">{{restaurant.restaurant_name}}</h5>
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
                ricerca: []
            };
        },
        methods: {
            getType() {
                axios
                    .get(`http://127.0.0.1:8000/api/types`)
                    .then((res) => {

                        this.types = res.data.types;
                        

                    });

            },
            funzRicerca() {
                if (this.ricerca == '') {

                    axios
                        .get(`http://127.0.0.1:8000/api/restaurants`)
                        .then((res) => {

                            this.restaurants = res.data.restaurants;
                            

                        })


                } else {
                    axios
                        .get(`http://127.0.0.1:8000/api/types`)
                        .then((res) => {

                            this.restaurants = res.data.types;
                            console.log(this.restaurants);
                            
                        })
                }
            },




        },
        mounted() {
            this.getType();
            this.funzRicerca();

        },
    };

</script>
