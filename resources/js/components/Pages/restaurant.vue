<template>
    <div>
        <div v-for="restaurant in restaurants" :key="restaurant.id">
            <p>{{restaurant.name}}</p>
                </div>
                
    </div>
</template>

<script>
import axios from 'axios';
export default{
     name:"Restaurant",
     
     data(){
        return{
            restaurants: [],
            
        }
     },
     methods: {
        getRestaurants(){
            axios.get('http://127.0.0.1:8000/api/restaurants')
            .then((res)=> {
               this.restaurants = res.data.restaurants;
            })
        }
     },
     mounted(){
        this.getRestaurants();
     }
}
</script>