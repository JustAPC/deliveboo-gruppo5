<template>
  <div>
    <div
      class="hero d-flex justify-content-center align-items-end"
      :style="{ backgroundImage: 'url(' + restaurant.restaurant_img + ')' }"
    >
      <div class="restaurant-infos">
          <div class="text-center">
              <h2>{{ restaurant.name }}</h2>
          <span
            v-for="category in restaurant.users_type"
            :key="category.id"
            class="badge badge-pill badge-primary mx-2 mb-4"
          >
            {{ category.name }}
          </span>
        </div>
        <p>{{ restaurant.address }}, {{ restaurant.zip }}</p>
        <p>{{ restaurant.city }}, {{ restaurant.state }}</p>
        <p>{{ restaurant.phone_number }}</p>
      </div>
    </div>

    <main>
      <aside class="position-fixed" v-if="switchPage == 1">
        <div v-for="(category, i) in uniqueDishCategory" :key="i">
            <a :href="'#category-' + category.id + 'redirect'" >{{category.name}}</a>
        </div>
      </aside>

      <div class="container">
        <div class="pt-5">
            <div class="switcher">
                <div @click="showMenu()" class="col-5">
                <span :class="{'activePage': switchPage == 1}" class="text-center">Menu</span>
                </div>
                <div @click="showInfos()" class="col-5">
                    <span :class="{'activePage': switchPage == 2}" class="text-center">Info</span>
                </div>
            </div>
        </div>
        <div class="d-flex" v-if="switchPage == 1">
          <div class="col-8">
            <ul v-for="(category, i) in uniqueDishCategory" :key="i">
              <h1 class="py-5" :id="'category-' + category.id + 'redirect'">{{ category.name }}</h1>
              <li
                v-for="(dish, i) in dishes"
                :key="i"
                v-if="category.id == dish.dishcategory_id"
                class="dish-card"
                :id="'add-to-cart-' + dish.id"
                @click="addToCart(dish)"
              >
                <div>
                  <p><h5>{{ dish.name }}</h5></p>
                  <p>{{ dish.ingredients }}</p>
                  <p class="price-menu">{{ dish.price }}€</p>
                </div>
                <div>
                  <img :src="dish.image" alt="" width="200px" class="p-3" />
                  <!-- <img :src="`../../../../public/storage/${dish.image}`" alt="" width="200px" /> -->
                </div>
              </li>
            </ul>
          </div>

          <div class="col-4">
            <div class="cart">
                <h2 class="text-center border-bottom border-dark">Il tuo carrello</h2>
                <div class="cart-plates">
                    <div class="cart-item" v-for="(item, i) in carrello" :key="i">
                      <p>{{ item.name }}<span :id="'quantity-cart-item-' + item.id">{{ item.quantity }}</span></p>
                      <p :id="'price-cart-item- ' + item.id">{{ item.price }}€</p>
                      <div class="d-flex justify-content-between">
                        <input
                          :id="'quantity-input-' + item.id"
                          type="number"
                          class="quantity"
                          min="1"
                          value="1"
                          @change="updatePrice(item.price, item.id)"
                        />
                        <button
                          class="btn btn-danger"
                          :id="'remove-from-cart-' + item.id"
                          @click="removeFromCart(item.id)"
                        >
                          Rimuovi
                        </button>
                      </div>
                    </div>
                </div>
            <div>
                <h3 id="totalPrice" class="px-3 pb-3"></h3>
                <router-link class="btn btn-success align-self-center" to="/checkout" v-if="carrello.length">Vai al Checkout</router-link>
            </div>
            </div>
          </div>
        </div>

        <OpeningDays v-if="switchPage == 2" />
      </div>
    </main>
  </div>
</template>

<script>
import axios from "axios";
import OpeningDays from "../partials/OpeningDays.vue";

  export default {
    name: "RestaurantShow",
    components: { OpeningDays},
    props: {},
    data() {
      return {
        restaurant: [],
        dishes: [],
        carrello: [],
        cartSelectedDishes: [],
        dishCategories: [],
        uniqueDishCategory: [],
        unique: [],
        switchPage: 1,
        totalPrice: "",
      };
    },
    methods: {
      getRestaurant() {
        axios.get(`http://127.0.0.1:8000/api/restaurants/${this.$route.params.id}`).then((res) => {
          this.restaurant = res.data.restaurant;
          this.dishes = res.data.dishes;
          this.getCategories();
        });
      },

      getCategories() {
        this.dishes.forEach((e) => {
          this.dishCategories.push(e.dishcategory);
        });
        this.uniqueDishCategory = this.dishCategories.filter((element) => {
          const isDuplicate = this.unique.includes(element.id);

          if (!isDuplicate) {
            this.unique.push(element.id);

            return true;
          } else {
            return false;
          }
        });
      },

      addToCart(e) {
        this.carrello.push(e);
        let addButton = document.getElementById(`add-to-cart-${e.id}`);
          addButton.style.opacity = 0.7;
          addButton.style.pointerEvents = 'none';
          addButton.style.backgroundColor = 'lightgrey';
        let singleDish = {
          dish_id: e.id,
          quantity: 1,
          total_price: e.price,
        };
        this.cartSelectedDishes.push(singleDish);
        let totalPriceText = document.getElementById("totalPrice");
        totalPriceText.innerHTML =
          "Prezzo totale: " + this.prezzoTotale(this.cartSelectedDishes) + "€";
      },

      updatePrice(price, id) {
        let quantityText = document.getElementById(`quantity-cart-item-${id}`);
        let quantity = document.getElementById(`quantity-input-${id}`).value;
        let totalPriceText = document.getElementById("totalPrice");
        quantityText.innerHTML = quantity;
        let singleDish = {
          dish_id: id,
          quantity: quantity,
          total_price: price * quantity,
        };

        for (let i = 0; i < this.cartSelectedDishes.length; i++) {
          if (this.cartSelectedDishes[i].dish_id == singleDish.dish_id) {
            this.cartSelectedDishes[i] = singleDish;
          }
        }
        totalPriceText.innerHTML =
          "Prezzo totale: " + this.prezzoTotale(this.cartSelectedDishes) + "€";
      },

      removeFromCart(e) {
        let addButton = document.getElementById(`add-to-cart-${e}`);
        addButton.style.opacity = 1;
        addButton.style.pointerEvents = 'auto';
        addButton.style.backgroundColor = 'white';
        let totalPriceText = document.getElementById("totalPrice");
        this.carrello = this.carrello.filter((data) => data.id != e);
        this.cartSelectedDishes = this.cartSelectedDishes.filter((data) => data.dish_id != e);
        if (this.carrello.length == 0) {
          totalPriceText.innerHTML = "";
        } else {
          totalPriceText.innerHTML =
            "Prezzo totale: " + this.prezzoTotale(this.cartSelectedDishes) + "€";
        }
      },

      prezzoTotale(array) {
        let prezzoTotale = 0;
        for (let i = 0; i < array.length; i++) {
          prezzoTotale += parseFloat(array[i].total_price);
        }
        return prezzoTotale.toFixed(2);
        },

        showMenu() {
            this.switchPage = 1;
        },

        showInfos() {
            this.switchPage = 2;
        }
    },

    mounted() {
      this.getRestaurant();
    },
  };
</script>

<style scoped lang="scss">
  .hero {
    height: 400px;
    width: 100%;
    background-position: center;
    background-size: cover;
  }

  .restaurant-infos {
    min-width: 35%;
    max-width: 80%;
    left: 35%;
    background-color: white;
    padding: 50px;
    border-radius: 1.5rem;
    margin-bottom: -80px;
    box-shadow: 2px 2px 10px black;
    .text-center {
      border-bottom: 1px solid grey;

      span {
        font-size: 1.1em;
      }
    }
  }

.switcher {
    margin: 0 auto;
    border: 1px solid black;
    border-radius: 2rem;
    display: flex;
    text-align: center;
    justify-content: center;
    div {
        cursor: pointer;
        padding: 15px 25%;
        letter-spacing: 3px;
        font-weight: bold;
        font-size: 1.1rem;
        &:hover span {
            border-bottom: 5px solid #34C0C9;
            padding-bottom: 13px;
            color: #34C0C9;
        }
    }
}

.activePage {
    border-bottom: 5px solid #34C0C9;
    padding-bottom: 13px;
    color: #34C0C9;
}

  main {
    background-image: url("../../../images/333.svg");
    background-size: cover;
    background-position: center;
    padding-top: 100px;
    min-height: 1000px;
  }

  aside {
    left: 300px;
    a {
        color: black;
        font-size: 1.2rem;
    }
    div {
        margin: 10px 0;
    }
  }

  h2 {
    font-weight: 1000;
    padding: 10px 0;
  }

  h1 {
    font-weight: 1000;
  }

  ul li {
    list-style-type: none;
    cursor: pointer;
    h5 {
      font-weight: 1000;
    }
  }

  .dish-card {
    display: flex;
    justify-content: space-between;
    margin: 1.2rem 0;
    padding: 1rem;
    border: 1px solid grey;
    background-color: white;
    border-radius: 1.2rem;
    box-shadow: 0 4px 6px 0 rgb(27 35 36 / 2%), 0 2px 12px -2px rgb(27 35 36 / 8%), 0 3px 6px 0 rgb(27 35 36 / 6%);
  }
  .cart {
    margin-top: 160px;
    max-height: 615px;
    background-color: white;
    border-radius: 1.2rem;
    min-height: 200px;
    box-shadow: 0 4px 6px 0 rgb(27 35 36 / 2%), 0 2px 12px -2px rgb(27 35 36 / 8%), 0 3px 6px 0 rgb(27 35 36 / 6%);
  }
  .cart-plates {
     overflow: auto;
     max-height: 495px;
     overflow-y: scroll;
    -ms-overflow-style: none;
    scrollbar-width: none;
        &::-webkit-scrollbar {
    display: none;
    }
  }
  .cart-item {
    padding: 0 1.2rem;
    border-bottom: 1px solid black;
    padding-bottom: 20px;
    margin-bottom: 20px;
    font-size: 1.2em;
    p {
      font-weight: 1000;
    }
    span {
        background-color: #34C0C9;
        margin-left: 10px;
        padding: 2px 6px;
        border-radius: 50%;
    }
  }
  .price-menu {
    font-weight: 1000;
  }
  .quantity {
    width: 50px;
  }
</style>
