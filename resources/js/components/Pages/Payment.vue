<template>
  <div class="payment-wrapper justify-center flex items-center py-3 px-4">
    <Loader v-if="loading == true" />

    <div class="container max-w-sm" v-if="loading == false">
      <div id="dropIn" class="drop-shadow-xl dropin" v-if="token">
        {{ dropIn() }}
      </div>

      <div class="d-flex justify-content-center">
        <button class="btn btn-deliveboo rounded bg-viola mt-4 py-1 px-3 text-white font-bold" @click="confirmCta(inst)">
          Invia
        </button>
      </div>
    </div>
  </div>
</template>
<script>
  import axios from "axios";
  import Loader from "../partials/Loader.vue";

  export default {
    data() {
      return {
        token: "",
        inst: null,
        loading: false,
        isDisable: false,
        cart: this.$route.params.carrello,
        order: this.$route.params.ordine,
        restaurant_name: this.$route.params.restaurant_name,
      };
    },
    components: { Loader },

    methods: {
      fetchToken() {
        axios.get("/api/payments").then((res) => {
          const { token } = res.data;
          this.token = token;
          console.log(token);
        });
      },

      dropIn() {
        const dropIn = require("braintree-web-drop-in");
        dropIn.create(
          {
            authorization: this.token,
            container: "#dropIn",
            locale: "it_IT",
          },
          (createErr, instance) => {
            if (createErr) {
              // An error in the create call is likely due to
              // incorrect configuration values or network issues.
              // An appropriate error will be shown in the UI.

              console.error(createErr);
              return;
            }

            this.inst = instance;
            console.log(instance);
          }
        );
      },
      confirmCta(instance) {
        instance.requestPaymentMethod((requestPaymentMethodErr, payload) => {
          if (requestPaymentMethodErr) {
            console.error(requestPaymentMethodErr);
            return;
          }

          //   this.loader();
          this.returnToOrderDetails();
          console.log(payload.nonce);
        });
      },
      loader() {
        setTimeout(() => {
          this.loading = false;
        }, "1000");
      },
      returnToOrderDetails() {
        this.loading = true;
        setTimeout(() => {
          this.$router.push({
            name: "ordersummary",
            params: {
              ordine: this.order,
              carrello: this.cart,
              restaurant_name: this.restaurant_name,
            },
          });
        }, "5000");
      },
    },
    created() {
      this.fetchToken();
    },
  };
</script>

<style lang="scss" scoped>
  .payment-wrapper {
    height: calc((100vh - 62px) - 341px);
    background-image: url("/images/wave00.svg");
    background-position: center;
    background-size: 1080px;
    background-repeat: no-repeat;

    .dropin {
      filter: drop-shadow(2px 4px 8px #57534e);
    }
  }
</style>