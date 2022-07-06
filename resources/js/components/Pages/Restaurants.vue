<template>
    <div>

        <div>
            <select class="my-3 mx-5" name="" id=""  v-model="ricerca" @change="getRestaurants">
                <option value="">Seleziona un genere</option>
                <option :value="type.id" v-for="type in types" :key="type.id">{{type.name}}</option>
            </select>
        </div>
        <div>
            <h1 class="text-center" v-for="restaurant in restaurants.restaurants" :key="restaurant.id">{{restaurant.name}}</h1>
        </div>
    </div>
</template>

<script>
import axios from "axios";
import { Carousel, Slide, Navigation } from "vue-carousel";

export default {
    name: "Restaurant",
    components: {
     Carousel,
        Slide,
        Navigation,
    },
    data() {
        return {
            types:[],
            restaurants:[],
            ricerca:''
        };
    },
    methods: {
        getType() {
            axios
                .get(`http://127.0.0.1:8000/api/types` )
                .then((res) => {
                    
                    this.types = res.data.types;
                    console.log(this.types);
                    
                });
            
        },
        getRestaurants() {
            axios
                .get(`http://127.0.0.1:8000/api/types/`+this.ricerca )
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
