<template>
  <div class="container">
    <h1>{{ restaurant.name }}</h1>
    <div class="d-flex">
      <div class="col-8 border">
        <ul>
          <li v-for="dish in dishes" class="my-3">
            <p>Nome: {{ dish.name }}</p>
            <p>Pezzi: {{ dish.quantity }}</p>
            <p>Prezzo: {{ dish.price }}€</p>
            <button class="btn btn-primary" @click="addToCart(dish)">Aggiungi al carrello</button>
          </li>
        </ul>
      </div>
      <div class="col-4 border">
        <div class="cart">
          <div class="cart-item">

          </div>
          </div>
        </div>
      </div>
    </div>
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
        let cartItem = document.querySelector(".cart-item");
        cartItem.innerHTML += `
          <p>Piatto: ${e.name}</p>
          <p>Prezzo: ${e.price}€</p>
          <div class="d-flex justify-content-between">
          <input type="number" min="1" value="1" style="width: 50px;">
          <button class="btn btn-danger" @click="removeFromCart(dish)">Rimuovi</button>
        `;
      },

      removeFromCart(e) {
        this.carrello = this.carrello.filter((e) => {
          if (e.id != id) {
            return true;
          }
          return false;
        });
      },
    },

    mounted() {
      this.getRestaurant();
    },
  };
</script>

<style scoped lang="scss"></style>

