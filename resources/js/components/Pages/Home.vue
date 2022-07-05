<template>
    <div class="container">

        <div class="row justify-content-end">   
             <select class="mt-3" >
                    <option v-for="type in types" :key="type.id">{{type.name}}</option>
                </select>

        </div>
        
       



    </div>
   


    
</template>

<script>
    import axios from 'axios';
    export default {
        name: 'Home',
        components: {

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
