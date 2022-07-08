<template>
  <div>
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
      <div class="container">
        <div class="d-flex align-items-center">
          <img class="logo" src="https://i.postimg.cc/ZYrqkY1k/Deliveboo-logo.png" alt="" />

          <router-link class="navbar-brand text-logo" to="/">Deliveboo</router-link>
        </div>

        <button
          class="navbar-toggler"
          type="button"
          data-toggle="collapse"
          data-target="#navbarNav"
          aria-controls="navbarNav"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item">
              <router-link class="nav-link" to="/">Home</router-link>
            </li>
            <li class="nav-item">
              <router-link class="nav-link" to=""></router-link>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/admin">Sei un ristorante?</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </div>
</template>

<script>
  export default {
    name: "Header",
  };
</script>

<style lang="scss" scoped>
  .logo {
    height: 50px;
  }
  .text-logo{
    font-weight: bolder;
    color: #00ccbc;
  }
</style>
