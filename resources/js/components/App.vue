<template>
    <div>
        <div>
         
             <main>

                <Home/>
             </main>
        </div>
        
    </div>
</template>

<script>

import Home from "./Pages/Home.vue";
    export default{
        name:'App',
        components:{
            Home,
        }
    }
</script>