<template>
    <div>
        <div v-for="user in users" :key="user.id">
            <p>{{user.name}}</p>
                </div>
                
    </div>
</template>

<script>
import axios from 'axios';
export default{
     name:"UsersList",
     
     data(){
        return{
            users: [],
            
        }
     },
     methods: {
        getUsers(){
            axios.get('http://127.0.0.1:8000/api/restaurants')
            .then((res)=> {
               this.restaurants = res.data.restaurants;
            })
        }
     },
     mounted(){
        this.getUser();
     }
}
</script>
