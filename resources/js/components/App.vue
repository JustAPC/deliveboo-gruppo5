<template>
    <div>
        <div>
            <header>
                <Header/>
            </header>
             <main>

                <Home/>
                <Restaurants/>
             </main>
        </div>
        
    </div>
</template>

<script>

import Home from "./Pages/Home.vue";
import Restaurants from "./Pages/Restaurant.vue";
import Header from "./Pages/Header.vue";
    export default{
        name:'App',
        components:{
            Home,
            Header,
            Restaurants,
        }
    }
</script>