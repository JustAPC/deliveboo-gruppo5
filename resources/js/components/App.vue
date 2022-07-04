<template>
    <div>
        <div>
            <header>
                <Header/>
            </header>
             <main>

                <Home/>
             </main>
        </div>
        
    </div>
</template>

<script>

import Home from "./Pages/Home.vue";
import Header from "./Pages/Header.vue";
    export default{
        name:'App',
        components:{
            Home,
            Header
        }
    }
</script>