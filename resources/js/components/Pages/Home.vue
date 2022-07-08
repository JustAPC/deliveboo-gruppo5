<template>
  <div>
    <div class="content">
      <Header />
      <div class="hero"></div>
      <Restaurants />
    </div>
    <BackgroundImage />
  </div>
</template>

<script>
  import Header from "./Header.vue";
  import Restaurants from "./Restaurants.vue";
  import BackgroundImage from "../partials/BackgroundImage.vue";

  export default {
    name: "Home",
    components: { Header, Restaurants, BackgroundImage },
  };
</script>

<style lang="scss" scoped>
  .content {
    width: 100%;
    position: absolute;
    z-index: 5;
  }
  .hero {
    background-image: url("https://i.ibb.co/CHwNDPX/123.png");
    background-repeat: no-repeat;
    background-position: center;
    background-size: cover;
    height: 450px;
    box-shadow: 0px 0px 10px #34c0c9;
  }
</style>
