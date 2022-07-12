<template>
  <div>
    <div class="card">
      <h5 class="card-header">Complimenti, il tuo ordine è andato a buon fine!</h5>
      <div class="card-body">
        <h5 class="card-title">Riepilogo dell'ordine:</h5>
        <h5 class="card-title">{{ restaurant_name }}</h5>
        <p class="card-text">Lista dei piatti:</p>

        <div class="row">
          <div class="col-sm-6" v-for="(piatto, i) in carrello" :key="i">
            <div class="card">
              <div class="card-body d-flex justify-content-between">
                <div>
                  <h5 class="card-title">{{ piatto.name }}</h5>
                  <p class="card-text">{{ piatto.price }}</p>
                </div>
                <div>
                  <img :src="piatto.image" alt="" width="50%" />
                </div>
              </div>
            </div>
          </div>
        </div>

        <a href="/" class="btn btn-primary">Torna alla home</a>
      </div>
    </div>
  </div>
</template>

<script>
  export default {
    name: "OrderSummary",
    components: {},
    props: {},
    data() {
      return {
        carrello: this.$route.params.carrello,
        ordine: this.$route.params.ordine,
        restaurant_name: this.$route.params.restaurant_name,
      };
    },
    methods: {},
  };
</script>

<style scoped lang="scss"></style>
