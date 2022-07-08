<template>
    <div>
        <div class="container pt-5">
            <div class="drop-down-menu mb-10">

                <button @click="setActive()" :class="active ? 'bg-viola text-white' : 'text-deliveroo'"
                    class="font-bold py-1 px-3 mb-3 border-2 border-viola rounded">
                    Categorie
                </button>
                <div v-if="active" :class="['menu-item', active ? 'block' : 'hidden', 'bg-color-full', 'rounded-2xl']">
                    <ul class="ks-cboxtags text-stone-500">
                        <li v-for="type in types" :key="type.id">
                            <input type="checkbox" @change="check($event)" v-model="checkedTypes" :value="type.id"
                                :id="type.name" />

                            <label :for="type.name">{{ type.name }}</label>
                        </li>
                    </ul>
                </div>
            </div>

        </div>
                <div class="container-fluid">
                    <div class="row justify-content-around">
                        <div class="card mx-4  my-4 restaurant-card col-s-12 col-md-4 col-lg-3 " v-for="restaurant in restaurants" :key="restaurant.id">
                        <img :src="restaurant.restaurant_img" class="card-img-top img-fluid pt-2" alt="..." />
                        <div class="card-body">
                            <h5 class="card-title">{{ restaurant.name }}</h5>
                            <p class="card-text">
                                Indirizzo: {{ restaurant.address }}, {{ restaurant.zip }} ,{{ restaurant.city }}
                            </p>
                            <p class="card-text">
                                <small class="text-muted">Contatti: {{ restaurant.phone_number }}</small>
                            </p>
                        </div>
                    </div>
                    </div>
                    
                </div>
            
    </div>
</template>

<script>
    import axios from "axios";
    import {
        Carousel,
        Slide,
        Navigation
    } from "vue-carousel";

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
                checkedTypes: [],
                active:false,
            };
        },
        methods: {
            getData() {
                axios.get(`http://127.0.0.1:8000/api/restaurants`).then((res) => {
                    const {
                        restaurants,
                        types
                    } = res.data;
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
                        const {
                            restaurant
                        } = res.data;
                        this.restaurants = restaurant;
                    });
            },
            check(event) {
                if (event.target.checked) {
                    this.typeFiltering(this.checkedTypes);
                } else if (this.checkedTypes == "") {
                    this.getData();
                } else {
                    this.typeFiltering(this.checkedTypes);
                }
            },
            setActive() {
            this.active = !this.active;
        }
        },

        beforeMount() {
            this.getData();
        },
    };

</script>

<style lang="scss" scoped>
   

    .restaurant-card {
        transition: transform 350ms;
    }

    .restaurant-card:hover {
        transform: scale(1.1);
        transition: transform 150ms;
        box-shadow: 10px 10px 5px lightblue;
    }

    //** background home wave **/

    #bkcg-home {
        background-image: url('/img/wave44.svg');
        background-size: cover;
        background-repeat: repeat;
        background-position: center;
    }

    //** Checkboxstyle **/

    .bg-color-full {
        background-color: #E7FFBD;
    }

    .drop-down-menu button {
        transition: all .3s ease-in-out;
    }

    .drop-down-menu div {
        animation: opacity .5s linear;
        box-shadow: 0px 15px 10px -10px rgba(127, 127, 127, 0.6);

    }

    .drop-down-menu li {
        transition: transform 250ms;
    }

    .drop-down-menu li:hover {
        transition: transform 250ms;
        transform: translateY(-6px);
    }

    @keyframes opacity {
        0% {
            opacity: 0;
        }

        50% {
            opacity: 0.5;
        }

        100% {
            opacity: 1;
        }
    }

    ul.ks-cboxtags {
        list-style: none;
        padding: 20px;
        display: flex;
        align-items: center;
        flex-wrap: wrap;
        gap: 5px;
    }

    ul.ks-cboxtags li label {
        display: flex;
        align-items: center;
        background-color: rgba(255, 255, 255, .9);
        border: 2px solid rgba(139, 139, 139, .3);
        border-radius: 25px;
        white-space: nowrap;
        margin: 3px 0px;
        user-select: none;
        -webkit-tap-highlight-color: transparent;
        transition: all .2s;
    }

    ul.ks-cboxtags li label {
        padding: 8px 12px;
        cursor: pointer;
    }

    ul.ks-cboxtags li label::before {
        font-style: normal;
        font-variant: normal;
        text-rendering: auto;
        -webkit-font-smoothing: antialiased;
        font-weight: 900;
        font-size: 12px;
        padding: 2px 6px 2px 2px;
        content: "\292B";
        transition: transform .3s ease-in-out;
    }

    ul.ks-cboxtags li input[type="checkbox"]:checked+label::before {
        content: "\2713";
        transform: rotate(-360deg);
        transition: transform .3s ease-in-out;
    }

    ul.ks-cboxtags li input[type="checkbox"]:checked+label {
        border: 2px solid #440063;
        background-color: #00CCBC;
        color: #fff;
        transition: all .2s;
    }

    ul.ks-cboxtags li input[type="checkbox"] {
        display: absolute;
    }

    ul.ks-cboxtags li input[type="checkbox"] {
        position: absolute;
        opacity: 0;
    }

    ul.ks-cboxtags li input[type="checkbox"]:focus+label {
        border: 2px solid rgba(68, 0, 99, 0.6);
    }

</style>
