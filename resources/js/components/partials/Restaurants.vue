<template>
  <div>
    <div class="container-fluid pt-5">
      <div class="drop-down-menu mb-10 d-flex flex-column">
        <div class="pl-5 text-center">
          <button
            @click="setActive()"
            :class="active ? 'text-white' : ''"
            class="font-bold py-1 px-3 my-5 border-2 button-colors rounded"
          >
            Categorie
          </button>
        </div>
        <div v-if="active" class="col-xl-10 col-12 mx-auto bg-color-full mt-2 mb-5">
          <ul class="ks-cboxtags text-stone-500 row m-0">
            <li v-for="type in types" :key="type.id" class="col-8 col-sm-4 col-md-3 col-lg-2">
              <input
                type="checkbox"
                @change="check($event), filtroJava(type.id)"
                v-model="checkedTypes"
                :value="type.id"
                :id="type.name"
              />

              <label :for="type.name" class="justify-content-center">{{ type.name }}</label>
            </li>
          </ul>
        </div>
      </div>
      <div class="row justify-content-center">
        <p v-if="arrayRistoranti.length < 1" class="ifNiente">
          Non ci sono ristoranti con le categorie selezionate
        </p>
        <div
          class="card mx-5 my-5 restaurant-card col-s-12 col-md-4 col-lg-3"
          v-for="restaurant in arrayRistoranti"
          :key="restaurant.id"
        >
          <router-link :to="{ name: 'restaurant-show', params: { id: restaurant.id } }">
            <img
              v-if="restaurant.restaurant_img"
              :src="restaurant.restaurant_img"
              class="card-img-top img-fluid pt-2"
              alt="..."
            />
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
        idRestaurants: [],
        idPonte: [],
        filter: [],
        removeType: "",
        infoRestaurant: [],
        valorePonte: [],
        restaurantFiltrati: [],
        arrayRistoranti: [],
        stato: true,
      };
    },
    methods: {
      getData() {
        axios.get(`http://127.0.0.1:8000/api/restaurants`).then((res) => {
          const { restaurants, types } = res.data;
          this.restaurants = restaurants;
          this.types = types;
          this.arrayRistoranti = this.restaurants;
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
      inizio() {
        this.arrayRistoranti = this.restaurants;
        console.log(this.arrayRistoranti);
      },
      filtroJava(idTipo) {
        //creiamo un array degli id dei tipi che risponda ai cambiamenti
        if (this.filter.includes(idTipo) == false) {
          this.filter.push(idTipo);
        } else {
          this.removeType = this.filter.indexOf(idTipo);
          this.filter.splice(this.removeType, 1);
        }

        // console.log(this.filter) //funziona

        //creiamo un array coi nomi e gli id dei ristoranti
        this.restaurants.forEach((element) => {
          this.valorePonte = [];
          this.valorePonte.push(element.name);
          element.users_type.forEach((singolo) => {
            this.valorePonte.push(singolo.id);
          });
          this.infoRestaurant.push(this.valorePonte);
        });

        // console.log(this.infoRestaurant) //funziona

        //creiamo un array filtrata che racchiuda i nomi dei ristoranti
        //che non hanno almeno uno dei filter
        //azzeriamo a ogni ciclo l'array
        this.restaurantFiltrati = 0;
        this.restaurantFiltrati = [];
        if (this.filter.length > 1) {
          this.filter.forEach((element) => {
            this.infoRestaurant.forEach((item) => {
              if (
                item.includes(element) == false &&
                this.restaurantFiltrati.includes(item[0]) == false
              ) {
                this.restaurantFiltrati.push(item[0]);
              }
            });
          });
        } else {
          this.infoRestaurant.forEach((item) => {
            if (
              item.includes(this.filter[0]) == false &&
              this.restaurantFiltrati.includes(item[0]) == false
            ) {
              this.restaurantFiltrati.push(item[0]);
            }
          });
        }
        // console.log(this.restaurantFiltrati) // funziona

        //creiamo la lista vera e propria
        //azzeriamo a ogni ciclo l'array
        this.arrayRistoranti = 0;
        this.arrayRistoranti = [];

        this.restaurants.forEach((element) => {
          this.stato = true;
          this.restaurantFiltrati.forEach((item) => {
            if (element.name == item) {
              this.stato = false;
            }
          });
          if (this.stato == true) {
            this.arrayRistoranti.push(element);
          }
        });

        // console.log(this.arrayRistoranti); // funziona

        //facciamo in modo che centri i piatti e che non torni su il punto di vista
        window.scroll(0, 800);
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
    font-size: 1.5rem;
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
    background-color: #78d04f;
    border-radius: 1.3rem !important;
    .row {
      display: block;
      overflow-x: scroll;
      white-space: nowrap;
      li {
        display: inline-block;
      }
    }
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
  // Modifico la scrollbar nel dropdown
  .ks-cboxtags::-webkit-scrollbar {
    width: 10px;
    height: 10px;
  }
  .ks-cboxtags::-webkit-scrollbar-track {
    border-radius: 10px;
  }
  .ks-cboxtags::-webkit-scrollbar-thumb {
    border-radius: 10px;
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

  .ifNiente {
    margin-top: 50px;
    margin-bottom: 100px;
    padding: 12px;
    border: 2px solid black;
    border-radius: 15px;
    background-color: white;
    font-size: 1.2em;
    text-align: center;
  }
</style>
