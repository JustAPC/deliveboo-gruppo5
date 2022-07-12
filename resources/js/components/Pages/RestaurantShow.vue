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
      <div class="switcher">
        <a :class="{ activePage: switchPage == 1 }" @click="showMenu()">Menu</a>
        <a :class="{ activePage: switchPage == 2 }" @click="showInfos()">Info</a>
      </div>

      <div class="d-flex" v-if="switchPage == 1">
        <aside class="col-3 d-none d-lg-block">
          <div class="categories">
            <a
              v-for="(category, i) in uniqueDishCategory"
              :key="i"
              :href="'#category-' + category.id + '-redirect'"
            >
              {{ category.name }}
            </a>
          </div>
        </aside>

        <div class="col-lg-6 col-8">
          <ul v-for="(category, i) in uniqueDishCategory" :key="i" class="p-0">
            <h1 class="category-title" :id="'category-' + category.id + '-redirect'">
              {{ category.name }}
            </h1>
            <li
              v-for="(dish, i) in dishes"
              :key="i"
              v-if="category.id == dish.dishcategory_id"
              class="dish-card flex-column flex-md-row"
              :id="'add-to-cart-' + dish.id"
              @click="addToCart(dish)"
            >
              <div>
                <h5>{{ dish.name }}</h5>
                <p>{{ dish.ingredients }}</p>
                <p class="price-menu">{{ dish.price }}€</p>
              </div>
              <div>
                <img :src="dish.image" alt="" width="200px" class="p-3 img-fluid" />
                <!-- <img :src="`../../../../public/storage/${dish.image}`" alt="" width="200px" /> -->
              </div>
            </li>
          </ul>
        </div>

        <div class="col-lg-3 col-4">
          <div class="dropdown categories-top d-lg-none d-block">
            <button
              class="btn dropdown-button dropdown-toggle"
              type="button"
              id="dropdownMenu2"
              data-toggle="dropdown"
              aria-haspopup="true"
              aria-expanded="false"
            >
              Categorie
            </button>
            <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
              <ul class="p-0 m-0">
                <li
                  v-for="(category, i) in uniqueDishCategory"
                  :key="i"
                  class="d-inline-block dropdown-item"
                >
                  <a :href="'#category-' + category.id + '-redirect'">{{ category.name }}</a>
                </li>
              </ul>
            </div>
          </div>

          <div class="cart d-flex flex-column">
            <h2 class="text-center border-bottom border-dark">Il tuo carrello</h2>
            <div class="cart-plates">
              <div class="cart-item" v-for="(item, i) in carrello" :key="i">
                <p>
                  {{ item.name }}
                  <span :id="'quantity-cart-item-' + item.id">{{ item.quantity }}</span>
                </p>
                <p :id="'price-cart-item- ' + item.id">{{ item.price }}€</p>
                <div class="d-flex justify-content-between">
                  <input
                    :id="'quantity-input-' + item.id"
                    type="number"
                    class="quantity"
                    min="1"
                    value="1"
                    @change="updateQuantity(item.price, item.id)"
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
            <div class="d-flex flex-column py-2">
              <h3 id="totalPrice" class="px-3 pb-3"></h3>
              <router-link
                class="btn btn-success align-self-center"
                :to="{
                  name: 'checkout',
                  params: { restaurant_id: restaurant.id, prezzo: prezzoTotale },
                }"
                v-if="carrello.length"
              >
                Vai al Checkout
              </router-link>
            </div>
          </div>
        </div>
      </div>

      <OpeningDays v-if="switchPage == 2" />
    </main>
  </div>
</template>

<script>
  import axios from "axios";
  import OpeningDays from "../partials/OpeningDays.vue";

  export default {
    name: "RestaurantShow",
    components: { OpeningDays },
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
        prezzoTotale: "",
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
        addButton.style.pointerEvents = "none";
        addButton.style.backgroundColor = "lightgrey";
        let singleDish = {
          dish_id: e.id,
          quantity: 1,
          total_price: e.price,
        };
        this.cartSelectedDishes.push(singleDish);
        let totalPriceText = document.getElementById("totalPrice");
        totalPriceText.innerHTML =
          "Prezzo totale: " + this.totalPrice(this.cartSelectedDishes) + "€";
      },

      updateQuantity(price, id) {
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
          "Prezzo totale: " + this.totalPrice(this.cartSelectedDishes) + "€";
      },

      removeFromCart(e) {
        let addButton = document.getElementById(`add-to-cart-${e}`);
        addButton.style.opacity = 1;
        addButton.style.pointerEvents = "auto";
        addButton.style.backgroundColor = "white";
        let totalPriceText = document.getElementById("totalPrice");
        this.carrello = this.carrello.filter((data) => data.id != e);
        this.cartSelectedDishes = this.cartSelectedDishes.filter((data) => data.dish_id != e);
        if (this.carrello.length == 0) {
          totalPriceText.innerHTML = "";
        } else {
          totalPriceText.innerHTML =
            "Prezzo totale: " + this.totalPrice(this.cartSelectedDishes) + "€";
        }
      },

      totalPrice(array) {
        this.prezzoTotale = 0;
        for (let i = 0; i < array.length; i++) {
          this.prezzoTotale += parseFloat(array[i].total_price);
        }
        return this.prezzoTotale.toFixed(2);
      },

      showMenu() {
        this.switchPage = 1;
      },

      showInfos() {
        this.switchPage = 2;
      },
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
      margin-bottom: 20px;
      span {
        font-size: 1.1em;
      }
    }
  }

  .activePage {
    color: #34c0c9 !important;
    &::after {
      border-bottom: 4px solid #34c0c9;
      border-radius: 2px;
      bottom: 0px;
      content: "";
      left: 35%;
      position: absolute;
      width: 30%;
    }
  }

  .switcher {
    border: 1px solid black;
    border-radius: 2rem;
    display: flex;
    padding: 0;
    text-align: center;
    width: 50%;
    margin: 0 auto;
    a {
      cursor: pointer;
      text-decoration: none;
      width: 50%;
      padding: 10px 0;
      font-size: 1.2rem;
      color: black;
      position: relative;
      &:hover {
        color: #34c0c9;
        &::after {
          border-bottom: 4px solid #34c0c9;
          border-radius: 2px;
          bottom: 0px;
          content: "";
          left: 35%;
          position: absolute;
          width: 30%;
        }
      }
    }
  }

  main {
    background-image: url("../../../images/333.svg");
    background-size: cover;
    background-position: center;
    padding-top: 140px;
    min-height: 1000px;
  }

  aside {
    margin-top: 150px;
    text-align: right;
    padding-right: 4%;
    .categories {
      position: sticky;
      top: 85px;
    }
    a {
      display: block;
      color: black;
      font-size: 1.2rem;
      padding: 10px 0;
      &:hover {
        color: #34c0c9;
      }
    }
    div {
      margin: 10px 0;
    }
  }

  .categories-top {
    position: sticky;
    top: 80px;
    z-index: 100;
    margin-top: 50px;
    a {
      color: #34c0c9;
    }
  }

  .dropdown-button {
    background-color: #3490dc;
    color: black;
    border: 1px solid black;
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

  .category-title {
    padding: 3rem 1rem;
    color: #34c0c9;
  }
  .dish-card {
    display: flex;
    justify-content: space-between;
    width: 90%;
    margin: 1.2rem 0;
    padding: 1rem;
    border: 1px solid grey;
    background-color: white;
    border-radius: 1.2rem;
    box-shadow: 0 4px 6px 0 rgb(27 35 36 / 2%), 0 2px 12px -2px rgb(27 35 36 / 8%),
      0 3px 6px 0 rgb(27 35 36 / 6%);
  }
  .cart {
    width: 85%;
    margin-top: 155px;
    max-height: 615px;
    background-color: white;
    border-radius: 1.2rem;
    min-height: 200px;
    box-shadow: 0 4px 6px 0 rgb(27 35 36 / 2%), 0 2px 12px -2px rgb(27 35 36 / 8%),
      0 3px 6px 0 rgb(27 35 36 / 6%);
    position: -webkit-sticky;
    position: sticky;
    top: 85px;
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
      background-color: #34c0c9;
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

  @media screen and (min-width: 0) and (max-width: 550px) {
    .switcher {
      width: 75%;
    }
  }

  @media screen and (min-width: 0) and (max-width: 992px) {
    .cart {
      top: 150px;
      margin-top: 75px;
    }
  }
</style>
