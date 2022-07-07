<template>
    <div class="container">
        <div>
            <div class="drop-down-menu my-5">
                
                <div :class="['menu-item', active ? 'block' : 'hidden', 'bg-color-full', 'rounded-2xl']">
                    <ul class="ks-cboxtags text-stone-500">
                        <li v-for="type in types" :key="type.id">
                            <input type="checkbox" @change="check($event)" v-model="checkedCategories" :value="type.id"
                                :id="type.name">
                            <label :for="type.name">{{ type.name }}</label>
                        </li>
                    </ul>
                </div>
            </div>

        </div>
        <div>
            <div class="card mb-3" v-for="restaurant in restaurants" :key="restaurant.id">
                <img :src="restaurant.restaurant_img" class="card-img-top img-fluid" alt="..." />
                <div class="card-body">
                    <h5 class="card-title">{{ restaurant.name }}</h5>
                    <p class="card-text">
                        This is a wider card with supporting text below as a
                        natural lead-in to additional content. This content is a
                        little bit longer.
                    </p>
                    <p class="card-text">
                        <small class="text-muted">Last updated 3 mins ago</small>
                    </p>
                </div>
            </div>
        </div>
      </div>
    </div>
    <div>
      <div class="card mb-3" v-for="restaurant in restaurants" :key="restaurant.id" v-if="restaurant.id">
        <img :src="restaurant.restaurant_img" class="card-img-top img-fluid" alt="..." />
        <div class="card-body">
          <h5 class="card-title">{{ restaurant.name }}</h5>
          <p class="card-text"></p>
          <p class="card-text">
            <small class="text-muted">Last updated 3 mins ago</small>
          </p>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
<<<<<<< HEAD
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
                checkedCategories: [],
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
                    this.typeFiltering(this.checkedCategories);
                } else if (this.checkedCategories == "") {
                    this.getData();
                } else {
                    this.typeFiltering(this.checkedCategories);
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

=======
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
>>>>>>> f86c567832b7d3a6a7d293bd86a571274fb6aff3
</script>


<style lang="scss" scoped>
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
