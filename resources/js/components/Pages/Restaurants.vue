<template>
    <div>
     <carousel class="mt-4" :per-page-custom="[[320, 1],[481, 2],[769, 4],[1024, 4],[1441, 6],]"
            >
            <slide class="d-flex justify-content-center" v-for="type in types" :key="type.id">
                <div class="card" style="width: 14rem" >
                    <img class="img-fluid card-img-top"
                    src="../../../../public/storage/img/hamburger.jpg" alt="..."/>
                    <div class="card-body">
                        <h3 class="card-title text-center" :id="type.id">
                            {{ type.name }}
                        </h3>
                    </div>
                </div>
            </slide>
        </carousel>

        <div>
            <p v-for="element in types" :key="element.id">{{element.restaurants.name}}</p>
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
     
        };
    },
    methods: {
        getRestaurants() {
            axios
                .get(`http://127.0.0.1:8000/api/types` )
                .then((res) => {
                    
                    this.types = res.data.types;
                    console.log(this.types);
                    
                });
            
        },
  

    },
    mounted() {
        this.getRestaurants();
     
    },
};
</script>
