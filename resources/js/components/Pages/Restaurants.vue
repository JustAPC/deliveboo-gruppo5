<template>
    <div class="container">
        <div>
            <div class="d-flex">
                <div v-for="type in types" :key="type.id">
                    <input
                        type="checkbox"
                        name=""
                        :id="type.id"
                        :value="type.id"
                        @change="check($event)"
                        v-model="checkedCategories"
                    />
                    <label :for="type.id">{{ type.name }}</label>
                </div>
            </div>
        </div>
        <div>
            <div
                class="card mb-3"
                v-for="restaurant in restaurants"
                :key="restaurant.id"
                v-if="restaurant.id"
            >
                <img
                    :src="restaurant.restaurant_img"
                    class="card-img-top img-fluid"
                    alt="..."
                />
                <div class="card-body">
                    <h5 class="card-title">{{ restaurant.name }}</h5>
                    <p class="card-text">
                        This is a wider card with supporting text below as a
                        natural lead-in to additional content. This content is a
                        little bit longer.
                    </p>
                    <p class="card-text">
                        <small class="text-muted"
                            >Last updated 3 mins ago</small
                        >
                    </p>
                </div>
            </div>
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
            types: [],
            restaurants: [],
            checkedCategories: [],
        };
    },
    methods: {
        getData() {
            axios.get(`http://127.0.0.1:8000/api/restaurants`).then((res) => {
                const { restaurants, types } = res.data;
                this.restaurants = restaurants;
                this.types = types;
            });
        },
        typeFiltering(type) {
            axios
                .get("http://127.0.0.1:8000/api/restaurants", {
                    params: {
                        type: type,
                    },
                })
                .then((res) => {
                    const { restaurant } = res.data;
                    this.restaurants = restaurant;
                });
        },
        check(event) {
            if (event.target.checked) {
                this.typeFiltering(this.checkedCategories);
            } else if (this.checkedCategories == "") {
                this.getData();
            } else {
                this.typeFiltering(this.checkedCategories);
            }
        },
    },

    beforeMount() {
        this.getData();
    },
};
</script>
