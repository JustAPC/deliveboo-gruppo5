<template>
  <div class="container">
    <h1 class="text-deliveboo text-center mt-5 pt-5">
      Complimenti! il tuo ordine è andato a buon fine
    </h1>

    <div class="switcher mt-5">
      <a :class="{ activePage: switchPage == 1 }" @click="showMenu()">I Tuoi Dati</a>
      <a :class="{ activePage: switchPage == 2 }" @click="showInfos()">Piatti Ordinati</a>
    </div>
    <div v-if="switchPage == 1" class="mt-5">
      <div class="card text-center bg_blu border_circle">
        <div class="card-body text-white">
          <h5 class="card-title font-weight-bolder text-white font_size">I tuoi Dati</h5>
          <p class="card-text">
            Nome:
            <span class="font-weight-bold">{{ ordine.customer_name }}</span>
          </p>
          <p class="card-text">
            Cognome:
            <span class="font-weight-bold">{{ ordine.customer_lastname }}</span>
          </p>
          <p class="card-text">
            Indirizzo:
            <span class="font-weight-bold">{{ ordine.customer_address }}</span>
          </p>
          <p class="card-text">
            CAP:
            <span class="font-weight-bold">{{ ordine.customer_zip }}</span>
          </p>
          <p class="card-text">
            Città:
            <span class="font-weight-bold">{{ ordine.customer_city }}</span>
          </p>
          <p class="card-text">
            Numero Telefonico:
            <span class="font-weight-bold">{{ ordine.customer_phone }}</span>
          </p>
        </div>
      </div>
      <div class="d-flex justify-content-center mt-3">
        <router-link class="button" to="/home">Torna alla Home</router-link>
      </div>
    </div>
    <div v-if="switchPage == 2" class="mt-5">
      <div class="card text-center border_circle">
        <div class="card-header bg_blu font-weight-bolder text-white font_size">
          Piatti Ordinati
        </div>
        <div class="card-body">
          <div class="row justify-content-around">
            <div
              class="card col-sm-12 col-md-6 col-lg-6 my-2"
              style="max-width: 440px"
              v-for="(piatto, i) in carrello"
              :key="i"
            >
              <div class="row g-0">
                <div class="col-md-4 d-flex align-items-center">
                  <img :src="piatto.image" class="img-fluid rounded-start" alt="..." />
                </div>
                <div class="col-md-8">
                  <div class="card-body">
                    <h5 class="card-title">{{ piatto.name }}</h5>
                    <p class="card-text">€ {{ piatto.price }}</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="card-footer bg_blu font-weight-bolder text-white font_size">
          <p>Prezzo Totale: € {{ ordine.total_price }}</p>
        </div>
      </div>
      <div class="d-flex justify-content-center mt-3">
        <router-link class="button" to="/home">Torna alla Home</router-link>
      </div>
    </div>
  </div>
</template>

<script>
  import axios from "axios";

  export default {
    name: "OrderSummary",
    components: {},
    props: {},
    data() {
      return {
        carrello: this.$route.params.carrello,
        ordine: this.$route.params.ordine,
        restaurant_name: this.$route.params.restaurant_name,
        restaurant_email: this.$route.params.restaurant_email,
        switchPage: 1,
      };
    },
    methods: {
      showMenu() {
        this.switchPage = 1;
      },

      showInfos() {
        this.switchPage = 2;
      },

      orderApi() {
        axios
          .post("/ordersummary", {
            user_id: this.ordine.user_id,
            customer_name: this.ordine.customer_name,
            customer_lastname: this.ordine.customer_lastname,
            customer_address: this.ordine.customer_address,
            completed: this.ordine.completed,
            payment_received: this.ordine.payment_received,
            total_price: this.ordine.total_price,
            customer_phone: this.ordine.customer_phone,
          })
          .then((res) => {
            console.log(res);
            // this.order.reset();
          })
          .catch((error) => {
            console.log(error);
          });
      },
    },

    mounted() {
      this.orderApi();
    },
  };
</script>

<style scoped lang="scss">
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
    width: 100%;
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
  .bg_blu {
    background-color: #34c0c9;
  }
  .font_size {
    font-size: 2em;
  }
  .border_circle {
    border-radius: 20px !important;
  }
  .button {
    background-color: #34c0c9;
    border: 0px;
    color: white;
    border-radius: 20px;
    padding: 10px 15px;
    &:hover {
      background-color: white;
      color: #34c0c9;
      border: 1px solid #34c0c9;
      text-decoration: none;
    }
  }
</style>
