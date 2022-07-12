<template>
  <div>
    <Header />
    <router-view class="data"></router-view>
  </div>
</template>

<script>
  import Header from "./partials/Header.vue";

  export default {
    name: "App",
    components: { Header },
  };
</script>

<style scoped lang="scss">
  .data {
    margin-top: 66px;
  }
</style>
