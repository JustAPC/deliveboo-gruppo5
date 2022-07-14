<template>
  <div>
    <div class="container pt-5"></div>

    <div class="container-fluid pt-5">
      <div class="drop-down-menu mb-10 d-flex flex-column ">
        <div class="pl-5">
          <button
            @click="setActive()"
            :class="active ? 'text-white' : ''"
            class="font-bold py-1 px-3 mb-3 border-2 button-colors rounded"
          >
            Categorie
          </button>
        </div>
        <div class="w-100">
          <div v-if="active" class="bg-color-full testimonial-group">
            <ul class="ks-cboxtags text-stone-500 row">
              <li v-for="type in types" :key="type.id" class="col-6 col-sm-4 col-md-3 col-lg-2">
                <input
                  type="checkbox"
                  @change="check($event)"
                  v-model="checkedTypes"
                  :value="type.id"
                  :id="type.name"
                />

                <label :for="type.name" class="justify-content-center">{{ type.name }}</label>
              </li>
            </ul>
          </div>
        </div>
      </div>
      <div class="row justify-content-center">
        <div
          class="card mx-5 my-5 restaurant-card col-s-12 col-md-4 col-lg-3"
          v-for="restaurant in restaurants"
          :key="restaurant.id"
        >
          <router-link :to="{ name: 'restaurant-show', params: { id: restaurant.id } }">
            <img :src="restaurant.restaurant_img" class="card-img-top img-fluid pt-2" alt="..." />
            <div class="card-body">
              <h5 class="card-title">{{ restaurant.name }}</h5>
              <p v-for="type in restaurants.users_type" :key="type.id" class="card-text">
                {{ type.name }}
              </p>

              <p class="card-text">
                Indirizzo: {{ restaurant.address }}, {{ restaurant.zip }} ,{{ restaurant.city }}
              </p>
              <p class="card-text">
                <small class="text-muted">Contatti: {{ restaurant.phone_number }}</small>
              </p>
            </div>
          </router-link>
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
        checkedTypes: [],
        active: false,
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
          this.typeFiltering(this.checkedTypes);
        } else if (this.checkedTypes == "") {
          this.getData();
        } else {
          this.typeFiltering(this.checkedTypes);
        }
      },
      setActive() {
        this.active = !this.active;
      },
    },
    beforeMount() {
      this.getData();
    },
  };
</script>
<style lang="scss" scoped>
  a:hover {
    text-decoration: none;
    .card-title {
      color: #34c0c9;
      text-decoration: underline;
    }
  }
  .button-colors {
    background-color: #34c0c9;
    color: white;
    border: 0;
  }
  .restaurant-card {
    transition: transform 350ms;

    div {
      color: black;
    }
  }

  .restaurant-card:hover {
    transform: scale(1.1);
    transition: transform 150ms;
    box-shadow: 0px 0px 25px #34c0c9;
  }
  //** Checkboxstyle **/

  .drop-down-menu {
    z-index: 3;
  }
  .bg-color-full {
    background-color: white;
    border-radius: 1.3rem !important;
  }

  .drop-down-menu button {
    transition: all 0.3s ease-in-out;
  }

  .drop-down-menu div {
    animation: opacity 0.5s linear;
    // box-shadow: 0px 15px 10px -10px #34c0c9;
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
    gap: 20px;
  }
  .ks-cboxtags::-webkit-scrollbar {
    width: 10px;
    height: 10px;
    }
  .ks-cboxtags::-webkit-scrollbar-track {
    -webkit-box-shadow: inset 0 0 1px rgba(0,0,0,0.3); 
    border-radius: 10px;
}
  .ks-cboxtags::-webkit-scrollbar-thumb {
    border-radius: 10px;
    -webkit-box-shadow: inset 0 0 1px rgba(0,0,0,0.5); 
}

  ul.ks-cboxtags li label {
    display: flex;
    align-items: center;
    background-color: rgba(255, 255, 255, 0.9);
    border: 2px solid rgba(139, 139, 139, 0.3);
    border-radius: 25px;
    white-space: nowrap;
    margin: 3px 0px;
    user-select: none;
    -webkit-tap-highlight-color: transparent;
    transition: all 0.2s;
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
    transition: transform 0.3s ease-in-out;
  }

  ul.ks-cboxtags li input[type="checkbox"]:checked + label::before {
    content: "\2713";
    transform: rotate(-360deg);
    transition: transform 0.3s ease-in-out;
  }

  ul.ks-cboxtags li input[type="checkbox"]:checked + label {
    border: 2px solid #440063;
    background-color: #00ccbc;
    color: #fff;
    transition: all 0.2s;
  }

  ul.ks-cboxtags li input[type="checkbox"] {
    display: absolute;
  }

  ul.ks-cboxtags li input[type="checkbox"] {
    position: absolute;
    opacity: 0;
  }

  ul.ks-cboxtags li input[type="checkbox"]:focus + label {
    border: 2px solid rgba(68, 0, 99, 0.6);
  }

  /* The heart of the matter */
// .testimonial-group > .row {
//   display: block;
//   overflow-x: auto;
//   white-space: nowrap;
// }
.testimonial-group {
  .row {
  display: block;
  overflow-x: scroll;
  white-space: nowrap;
    li{
        display: inline-block;
    }
  }
}

</style>
