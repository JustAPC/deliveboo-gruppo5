<template>
    <div class="px-5">

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

    </div>




</template>

<script>
    import axios from 'axios';
    import {
        Carousel,
        Slide,
        Navigation
    } from 'vue-carousel';
    export default {
        name: 'Home',
        components: {
            Carousel,
            Slide,
            Navigation
        },
        data() {
            return {
                types: [],

            }
        },
        methods: {
            getType() {
                axios.get('http://127.0.0.1:8000/api/types')
                    .then((res) => {
                        this.types = res.data.types;
                    })
            }
        },
        mounted() {
            this.getType();
        }

    }

</script>
