<template>
    <div>
        <Header />
        <Restaurants />
    </div>
</template>

<script>
import Header from "./Header.vue";
import Ricerca from "./Ricerca.vue";
import Restaurants from "./Restaurants.vue";

export default {
    name: "Home",
    components: { Header, Ricerca, Restaurants },
};
</script>
