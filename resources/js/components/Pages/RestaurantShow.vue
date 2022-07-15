<template>
  <div v-on:scroll="handleScroll()" class="bimbo34" id="">
    <Loader v-if="isLoading == true" />
    <div v-else>
      <!-- Hero e restaurant infos -->
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

      <main id="menu-bg" class="backgroundBig">
        <!-- Switcher -->
        <div class="switcher">
          <a
            :class="{ activePage: switchPage == 1 }"
            @click="showMenu(), backgroundBig()"
            id="menuZ1"
          >
            Menu
          </a>
          <a
            :class="{ activePage: switchPage == 2 }"
            @click="showInfos(), backgroundSmall()"
            id="infoZ1"
          >
            Info
          </a>
        </div>
        <!-- Categorie fino a breakpoint xl -->
        <div id="categories-top" class="categories-hidden">
          <div class="d-lg-none d-block">
            <ul class="d-flex justify-content-around flex-wrap m-0 p-0">
              <li v-for="category in uniqueDishCategory" :key="category.id" class="pt-1 pb-2 px-3">
                <a :href="'#category-' + category.id + '-redirect'">{{ category.name }}</a>
              </li>
            </ul>
          </div>
        </div>

        <!-- Sezione piatti, carrello e categorie da bp xl -->
        <div class="d-flex" v-if="switchPage == 1">
          <!-- Categorie -->
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
          <!-- Piatti -->
          <div class="col-xl-6 col-sm-9 mx-auto">
            <ul v-for="(category, i) in uniqueDishCategory" :key="i" class="p-0">
              <h1 class="category-title" :id="'category-' + category.id + '-redirect'">
                {{ category.name }}
              </h1>
              <li
                v-for="(dish, i) in dishes"
                :key="i"
                v-if="category.id == dish.dishcategory_id"
                class="dish-card flex-column flex-sm-row"
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
                </div>
              </li>
            </ul>
          </div>
          <!-- Carrello -->
          <div class="col-xl-3 d-xl-block d-none">
            <div class="cart">
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
              <div class="total-price">
                <h3 class="totalPrice pb-3"></h3>
                <router-link
                  class="btn btn-success mb-3"
                  :to="{
                    name: 'checkout',
                    params: {
                      restaurant_id: restaurant.id,
                      restaurant_name: restaurant.name,
                      prezzo: prezzoTotale,
                      carrello: carrello,
                      restaurant_email: restaurant.email,
                    },
                  }"
                  v-if="carrello.length"
                >
                  Vai al Checkout
                </router-link>
              </div>
            </div>
          </div>
        </div>

        <!-- Sezione info del ristorante -->
        <OpeningDays v-if="switchPage == 2" />
      </main>
    </div>

    <!-- Carrello a partire da bp xs -->

    <div class="collapse dishes-bottom d-xl-none" id="collapseExample" v-if="carrello != 0">
      <table class="cart-table">
        <thead>
          <tr>
            <th scope="col">Piatto</th>
            <th scope="col">Prezzo</th>
            <th scope="col">Quantità</th>
          </tr>
        </thead>
        <tbody class="cart-table-body">
          <tr class="table-row my-2" v-for="dish in carrello" :key="dish.id">
            <td>{{ dish.name }}</td>
            <td>{{ dish.price }}€</td>
            <td>
              <input
                class="quantity-bottom"
                :id="'quantity-cart-bottom-item-' + dish.id"
                type="number"
                value="1"
                min="1"
                @change="updateBottomQuantity(dish.price, dish.id)"
              />
            </td>
            <td>
              <button class="btn btn-danger" @click="removeFromCart(dish.id)">Rimuovi</button>
            </td>
          </tr>
        </tbody>
      </table>
    </div>
    <button
      class="cart-bottom d-xl-none d-block"
      type="button"
      data-toggle="collapse"
      data-target="#collapseExample"
      aria-expanded="false"
      aria-controls="collapseExample"
    >
      <div class="d-flex justify-content-around align-items-center">
        <div class="totalPrice">Il carrello è vuoto!</div>
        <div class="">
          <router-link
            class="btn btn-success"
            :to="{
              name: 'checkout',
              params: {
                restaurant_id: restaurant.id,
                restaurant_name: restaurant.name,
                prezzo: prezzoTotale,
                carrello: carrello,
                piatti: cartSelectedDishes,
              },
            }"
            v-if="carrello.length"
          >
            Vai al Checkout
          </router-link>
        </div>
      </div>
    </button>
  </div>
</template>

<script>
  import axios from "axios";
  import OpeningDays from "../partials/OpeningDays.vue";
  import Loader from "../partials/Loader.vue";

  export default {
    name: "RestaurantShow",
    components: { OpeningDays, Loader },
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
        isLoading: true,
        isUserScrolling: "",
      };
    },
    methods: {
      backgroundSmall() {
        let backgroundPage = document.getElementById("menu-bg");
        backgroundPage.classList.remove("backgroundBig");
        backgroundPage.classList.add("backgroundSmall");
      },
      backgroundBig() {
        let backgroundPage = document.getElementById("menu-bg");
        backgroundPage.classList.remove("backgroundSmall");
        backgroundPage.classList.add("backgroundBig");
      },
      getRestaurant() {
        axios.get(`http://127.0.0.1:8000/api/restaurants/${this.$route.params.id}`).then((res) => {
          this.restaurant = res.data.restaurant;
          this.dishes = res.data.dishes;
          this.getCategories();
          this.isLoading = false;
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
        let printTotalPrice = document.querySelectorAll(".totalPrice");
        printTotalPrice.forEach((e) => {
          e.innerHTML = "Prezzo totale: " + this.totalPrice(this.cartSelectedDishes) + "€";
        });
        console.log(this.cartSelectedDishes);
      },

      updateQuantity(price, id) {
        let quantityText = document.getElementById(`quantity-cart-item-${id}`);
        let quantity = document.getElementById(`quantity-input-${id}`).value;
        let printTotalPrice = document.querySelectorAll(".totalPrice");
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
        printTotalPrice.forEach((e) => {
          e.innerHTML = "Prezzo totale: " + this.totalPrice(this.cartSelectedDishes) + "€";
        });
        console.log(this.cartSelectedDishes);
      },

      updateBottomQuantity(price, id) {
        let quantity = document.getElementById(`quantity-cart-bottom-item-${id}`).value;
        let printTotalPrice = document.querySelectorAll(".totalPrice");
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
        printTotalPrice.forEach((e) => {
          e.innerHTML = "Prezzo totale: " + this.totalPrice(this.cartSelectedDishes) + "€";
        });
        console.log(this.cartSelectedDishes);
      },

      removeFromCart(e) {
        let addButton = document.getElementById(`add-to-cart-${e}`);
        addButton.style.opacity = 1;
        addButton.style.pointerEvents = "auto";
        addButton.style.backgroundColor = "white";
        let printTotalPrice = document.querySelectorAll(".totalPrice");
        this.carrello = this.carrello.filter((data) => data.id != e);
        this.cartSelectedDishes = this.cartSelectedDishes.filter((data) => data.dish_id != e);
        if (this.carrello.length == 0) {
          printTotalPrice.forEach((e) => {
            e.innerHTML = "Il carrello è vuoto!";
          });
        } else {
          printTotalPrice.forEach((e) => {
            e.innerHTML = "Prezzo totale: " + this.totalPrice(this.cartSelectedDishes) + "€";
          });
        }
        console.log(this.cartSelectedDishes);
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

      handleScroll() {
        this.isUserScrolling = window.scrollY > 592;
        const categories = document.getElementById("categories-top");
        if (this.isUserScrolling == true) {
          categories.classList.remove("categories-hidden");
          categories.classList.add("categories-visible");
        } else {
          categories.classList.remove("categories-visible");
          categories.classList.add("categories-hidden");
        }
      },
    },

    mounted() {
      this.getRestaurant();
    },

    created() {
      window.addEventListener("scroll", this.handleScroll);
    },

    destroyed() {
      window.removeEventListener("scroll", this.handleScroll);
    },
  };
</script>

<style scoped lang="scss">
  #categories-top {
    position: fixed;
    width: 100%;
    top: 66px;
    z-index: 100;
    font-size: 1.2rem;
  }
  .total-price {
    background-color: white;
    text-align: center;
    border-radius: 1.2rem;
  }
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
  .backgroundBig {
    background-image: url("../../../images/333.svg");
    background-size: cover;
    background-position: center;
    padding-top: 140px;
    min-height: 1000px;
  }
  .backgroundSmall {
    background-image: url("../../../images/111.svg");
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

  .collapse {
    z-index: 100;
  }
  .cart-bottom {
    width: 100%;
    height: 83px;
    position: fixed;
    bottom: 0;
    left: 0;
    background-color: #34c0c9;
    border: 0;
    .totalPrice {
      font-size: 1.2rem;
      padding: 15px 0;
      text-align: center;
    }
    ul {
      margin: 0;
      padding: 0;
      li {
        margin: 0;
        padding: 0;
        display: inline-block;
        p {
          padding: 0px 20px;
        }
      }
    }
  }

  .dishes-bottom {
    overflow: auto;
    max-height: 397px;
    position: fixed;
    bottom: 82px;
    left: 0;
    right: 0;
    background-color: #34c0c9;
  }

  .cart-table {
    width: 90%;
    margin: 20px auto;
    text-align: center;
  }
  .cart-table-body {
    width: 100%;
    max-height: 300px;
    overflow-y: scroll;
    -ms-overflow-style: none; /* IE and Edge */
    scrollbar-width: none; /* Firefox */
    &::-webkit-scrollbar {
      display: none;
    }
  }
  .quantity-bottom {
    width: 50px !important;
  }

  .categories-visible {
    opacity: 1;
    background-color: #f8f9fa;
    transition: opacity 0.7s;
  }

  .categories-hidden {
    opacity: 0;
    background-color: transparent;
    transition: opacity 0.5s, background-color 0.5s;
  }

  @media screen and (min-width: 0) and (max-width: 576px) {
    .switcher {
      width: 75%;
    }

    .dish-card {
      margin: 20px auto;
    }
  }

  @media screen and (min-width: 0) and (max-width: 992px) {
    .cart {
      top: 150px;
      margin-top: 75px;
    }
  }
</style>
