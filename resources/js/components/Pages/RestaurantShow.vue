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
      <div class="container mt-5">
        <div class="d-flex pt-5">
          <div class="col-8 border">
            <ul v-for="(category, i) in uniqueDishCategory" :key="i">
              <h1 class="py-5">{{ category.name }}</h1>
              <li
                v-for="(dish, i) in dishes"
                :key="i"
                v-if="category.id == dish.dishcategory_id"
                class="my-3 d-flex justify-content-between"
              >
                <div>
                  <h5>{{ dish.name }}</h5>
                  <p>{{ dish.ingredients }}</p>
                  <p>{{ dish.dishcategory.name }}</p>
                  <p class="price-menu">{{ dish.price }} €</p>
                  <button
                    class="btn btn-primary"
                    :id="'add-to-cart-' + dish.id"
                    @click="addToCart(dish)"
                  >
                    Aggiungi al carrello
                  </button>
                </div>
                <div>
                  <img :src="dish.image" alt="" width="200px" />
                  <!-- <img :src="`../../../../public/storage/${dish.image}`" alt="" width="200px" /> -->
                </div>
              </li>
            </ul>
          </div>

          <div class="col-4 border">
            <div class="cart">
              <h2 class="text-center">Il tuo carrello</h2>

              <div class="cart-item" v-for="(item, i) in carrello" :key="i">
                <p>
                  Piatto:
                  <span>{{ item.name }}</span>
                </p>
                <p>
                  Quantità:
                  <span :id="'quantity-cart-item-' + item.id">{{ item.quantity }}</span>
                </p>
                <p>
                  Prezzo:
                  <span :id="'price-cart-item- ' + item.id">{{ item.price }}€</span>
                </p>
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
            <h3 id="totalPrice"></h3>
          </div>
        </div>
      </div>
    </main>
  </div>
</template>

<script>
  import axios from "axios";
  export default {
    name: "RestaurantShow",
    components: {},
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
        console.log(this.uniqueDishCategory);
      },

      addToCart(e) {
        this.carrello.push(e);
        let addButton = document.getElementById(`add-to-cart-${e.id}`);
        addButton.setAttribute("disabled", "");
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
        addButton.removeAttribute("disabled");
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

  main {
    background-image: url("../../../images/BG-3.svg");
    background-size: cover;
    padding-top: 100px;
  }

  .container {
    background-color: white;
  }

  h2 {
    font-weight: 1000;
    padding: 10px 0;
  }

  ul li {
    list-style-type: none;
    h5 {
      font-weight: 1000;
    }
  }

  .cart {
    max-height: 700px;
    overflow: auto;
  }
  .cart-item {
    border-bottom: 1px solid grey;
    padding-bottom: 20px;
    margin-bottom: 20px;
    font-size: 1.2em;
    p {
      font-weight: 1000;
    }
  }
  .price-menu {
    font-weight: 1000;
  }
  .quantity {
    width: 50px;
  }
</style>

<!-- const arr = [
  {id: 1, name: 'Tom'},
  {id: 1, name: 'Tom'},
  {id: 2, name: 'Nick'},
  {id: 2, name: 'Nick'},
];

const uniqueIds = [];

const unique = arr.filter(element => {
  const isDuplicate = uniqueIds.includes(element.id);

  if (!isDuplicate) {
    uniqueIds.push(element.id);

    return true;
  }

  return false;
});

// 👇️ [{id: 1, name: 'Tom'}, {id: 2, name: 'Nick'}]
console.log(unique); -->
