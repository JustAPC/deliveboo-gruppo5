<template>
  <div class="text-center pt-5 mt-5 col-12 col-md-10 col-xl-8 mx-auto">
    <h1>Giorni di Apertura</h1>
    <hr />
    <ul>
      <li class="d-flex justify-content-between">
        <p>Lunedì</p>
        <p>12:00 - 22:00</p>
      </li>
      <li class="d-flex justify-content-between">
        <p>Martedì</p>
        <p>12:00 - 22:00</p>
      </li>
      <li class="d-flex justify-content-between">
        <p>Mercoledì</p>
        <p>12:00 - 22:00</p>
      </li>
      <li class="d-flex justify-content-between">
        <p>Giovedì</p>
        <p>12:00 - 22:00</p>
      </li>
      <li class="d-flex justify-content-between">
        <p>Venerdì</p>
        <p>12:00 - 22:00</p>
      </li>
      <li class="d-flex justify-content-between">
        <p>Sabato</p>
        <p>12:00 - 22:00</p>
      </li>
      <li class="d-flex justify-content-between">
        <p>Domenica</p>
        <p>Chiuso</p>
      </li>
    </ul>
  </div>
</template>

<script>
  export default {
    name: "OpeningDays",
    components: {},
    props: {},
    data() {
      return {};
    },
    methods: {},
  };
</script>

<style scoped lang="scss">
  p {
    margin: 0;
    padding: 0;
    font-weight: 1000;
    font-size: 1.5rem;
    padding: 20px 10px;
  }
</style>
