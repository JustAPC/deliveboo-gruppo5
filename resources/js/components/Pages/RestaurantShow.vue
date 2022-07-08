<template>
  <div>
    <div class="hero" :style="{ backgroundImage: 'url(' + restaurant.restaurant_img + ')' }">
      <div class="restaurant-infos">
        <div>
          <h2>{{ restaurant.name }}</h2>
          <p>{{ restaurant.address }}, {{ restaurant.zip }}</p>
          <p>{{ restaurant.city }}, {{ restaurant.state }}</p>
          <p>{{ restaurant.phone_number }}</p>
        </div>
      </div>
    </div>
    <main>
      <div class="container mt-5">
        <div class="d-flex pt-5">
          <div class="col-8 border">
            <ul>
              <li v-for="(dish, i) in dishes" :key="i" class="my-3">
                <h5>{{ dish.name }}</h5>
                <p>{{ dish.ingredients }}</p>
                <p class="price-menu">{{ dish.price }} €</p>
                <button class="btn btn-primary" @click="addToCart(dish)">
                  Aggiungi al carrello
                </button>
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
                  <button class="btn btn-danger" @click="removeFromCart(item.id)">Rimuovi</button>
                </div>
              </div>
              <h3 id="totalPrice" v-if="cartSelectedDishes != 0"></h3>
            </div>
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
        totalPrice: "",
      };
    },
    methods: {
      getRestaurant() {
        axios.get(`http://127.0.0.1:8000/api/restaurants/${this.$route.params.id}`).then((res) => {
          this.restaurant = res.data.restaurant;
          this.dishes = res.data.dishes;
          console.log(this.restaurant);
          console.log(this.dishes);
        });
      },

      addToCart(e) {
        this.carrello.push(e);
        this.cartSelectedDishes.push({
          dish_id: e.id,
          quantity: 1,
          price: e.price,
        });
        let totalPriceText = document.getElementById("totalPrice");
        totalPriceText.innerHTML = this.prezzoTotale(this.cartSelectedDishes);
      },

      removeFromCart(e) {
        this.carrello = this.carrello.filter((element) => {
          if (element.id !== e) {
            return true;
          }
          return false;
        });
      },

      updatePrice(price, id) {
        let quantityText = document.getElementById(`quantity-cart-item-${id}`);
        let quantity = document.getElementById(`quantity-input-${id}`).value;
        let totalPriceText = document.getElementById("totalPrice");
        totalPriceText.innerHTML = this.prezzoTotale(this.cartSelectedDishes);
      },

      prezzoTotale(array) {
        let prezzoTotale = 0;
        for (let i = 0; i < array.length; i++) {
          prezzoTotale += parseFloat(array[i].price);
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
    position: relative;
    height: 590px;
    width: 100%;
    background-position: center;
    background-size: cover;
  }

  .restaurant-infos {
    position: absolute;
    bottom: -100px;
    left: 35%;
    background-color: white;
    padding: 50px;
    border-radius: 1.5rem;
    p {
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
    padding: 20px 0;
    margin-bottom: 20px;
    border-bottom: 1px solid grey;
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
