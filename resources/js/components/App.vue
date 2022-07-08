<template>
  <div>
    <Home />
  </div>
</template>

<script>
  import Home from "./Pages/Home.vue";

  export default {
    name: "App",
    components: {
      Home,
    },
  };
</script>

<style scoped lang="scss">
  div {
    // background-image: url("../../images/blob-scene-haikei.svg");
    background-image: url("../../images/BG-2.svg");
    background-size: cover;
  }
</style>
