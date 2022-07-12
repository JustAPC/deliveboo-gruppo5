<template>
  <div>
    <Loader v-if="isLoading == true" />
    <div v-else>
      <div class="hero"></div>
      <div class="content">
        <Restaurants class="ristoranti" />
        <BackgroundImage class="bolle" />
      </div>
    </div>
  </div>
</template>

<script>
  import Restaurants from "../partials/Restaurants.vue";
  import BackgroundImage from "../partials/BackgroundImage.vue";
  import Loader from "../partials/Loader.vue";

  export default {
    name: "Home",
    components: { Restaurants, BackgroundImage, Loader },
    data() {
      return {
        isLoading: true,
      };
    },
    methods: {
      myFunction() {
        const timeout = setTimeout(this.loaderFunction, 3000);
      },

      loaderFunction() {
        this.isLoading = false;
      },
    },

    mounted() {
      this.myFunction();
    },
  };
</script>

<style lang="scss" scoped>
  .ristoranti {
    position: relative;
    z-index: 3;
  }

  .bolle {
    z-index: 2;
  }
  .content {
    background-image: url("../../../images/111.svg");
    width: 100%;
    height: 100%;
    background-size: cover;
    z-index: 1;
    position: relative;
    background-position: center;
  }
  .hero {
    background-image: url("../../../images/FOODDELIVERY-thumb.png");
    background-repeat: no-repeat;
    background-position: center;
    background-attachment: fixed;
    background-size: cover;
    height: 635px;
    box-shadow: 0px 0px 10px #34c0c9;
  }
</style>
