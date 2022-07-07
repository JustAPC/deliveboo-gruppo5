<template>
  <div>
    <Header />
    <div class="hero"></div>
    <Restaurants />
  </div>
</template>

<script>
  import Header from "./Header.vue";
  import Restaurants from "./Restaurants.vue";

  export default {
    name: "Home",
    components: { Header, Restaurants },
  };
</script>

<style lang="scss" scoped>
  .hero {
    background-image: url("https://i.ibb.co/CHwNDPX/123.png");
    background-repeat: no-repeat;
    background-position: center;
    background-size: cover;
    height: 450px;
  }
</style>
