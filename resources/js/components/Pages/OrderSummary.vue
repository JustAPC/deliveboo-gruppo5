<template>
    <div class="container">
        <div class="switcher">
            <a :class="{ activePage: switchPage == 1 }" @click="showMenu()">I Tuoi Dati</a>
            <a :class="{ activePage: switchPage == 2 }" @click="showInfos()">Piatti Ordinati</a>
        </div>
        <div v-if="switchPage == 1">
            <div class="card text-center">
                
                <div class="card-body">
                  <h5 class="card-title">I tuoi Dati</h5>
                    <p class="card-text">Nome: <span>{{ordine.customer_name}}</span></p>
                    <p class="card-text">Cognome: <span>{{ordine.customer_lastname}}</span></p>
                     <p class="card-text">Via: <span>{{ordine.customer_address}}</span></p>
                     <p class="card-text">Numero Telefonico: <span>{{ordine.customer_phone}}</span></p>

                </div>
                
            </div>
        </div>
        <div v-if="switchPage == 2">
            <div class="card text-center">
  <div class="card-header">
    Featured
  </div>
  <div class="card-body">
    <h5 class="card-title">Piatti Ordinati</h5>
    <div>
      
    </div>
  </div>
  <div class="card-footer text-muted">
    2 days ago
  </div>
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
        },
    };

</script>

<style scoped lang="scss"></style>
