<template>
    <div>
        <div class="hero">
            <nav
                class="navbar navbar-expand-lg navbar-light bg-light sticky-top"
            >
                <div class="d-flex align-items-center">
                    <img
                        class="logo"
                        src="https://i.postimg.cc/ZYrqkY1k/Deliveboo-logo.png"
                        alt=""
                    />

                    <router-link class="navbar-brand" to="/"
                        >Deliveboo</router-link
                    >
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
                            <router-link class="nav-link" to="/"
                                >Home</router-link
                            >
                        </li>
                        <li class="nav-item">
                            <router-link class="nav-link" to=""></router-link>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/admin"
                                >Sei un ristorante?</a
                            >
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </div>
</template>

<script>
export default {
    name: "Header",
};
</script>

<style lang="scss" scoped>
.hero {
    background-image: url("https://thefoodshop.vn/wp-content/uploads/2021/10/newhomepagebanner-optimized.jpg");
    background-repeat: no-repeat;
    background-position: center;
    background-size: cover;
    height: 350px;
}
.logo {
    height: 50px;
}
</style>
