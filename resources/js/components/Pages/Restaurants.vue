<template>
    <div>
        <Ricerca @getRestaurantsType="getRestaurants" />

        <div
            v-for="restaurant in restaurants"
            :key="restaurant.id"
            class="scheda-ristorante"
        >
            <p class="nome-ristorante">{{ restaurant.name }}</p>

            <div class="insieme-tipi">
                <span
                    v-for="item in restaurant.user_type"
                    :key="item.id"
                    class="type-ristorante"
                    >{{ item.name }}</span
                >
            </div>

            <!-- <div v-for="item in restaurant.dishes" :key="item.id" class="piatto-scheda">

                    <ul>

                        <li class="nome-piatto">{{item.name}}</li>
                        <li v-if="item.quantity >= 1" class="verde-disponibile">Disponibile</li>
                        <li v-else class="rosso-non-disponibile">= 1">Non disponibile</li>
                        <li v-if="(item.ingredients != null) && (item.ingredients != '')">Ingredienti: {{item.ingredients}}.</li>
                        <li v-if="(item.description != null) && (item.description != '')">Descrizione: {{item.description}}.</li>
                        <li>Categoria: {{item.dishcategory_id}}</li>
                        <li>Prezzo: {{item.price}}€</li>

                    </ul>
                    <span class="pulsante-ordine">Aggiungi al carrello</span>
                </div> -->
        </div>
    </div>
</template>

<script>
import axios from "axios";
import Ricerca from "./Ricerca.vue";
export default {
    name: "Restaurant",
    components: {
        Ricerca,
    },
    data() {
        return {
            restaurants: [],
            ricerca: "",
        };
    },
    methods: {
        getRestaurants(restaurant) {
            axios
                .get(`http://127.0.0.1:8000/api/types/` + restaurant)
                .then((res) => {
                    this.restaurants = res.data.restaurants;
                });
        },
    },
    mounted() {
        this.getRestaurants();
    },
};
</script>
