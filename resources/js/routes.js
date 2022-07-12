import Vue from "vue";
import VueRouter from "vue-router";

// import VueCarousel from "vue-carousel";
// Vue.use(VueCarousel);

Vue.use(VueRouter);
import Home from "./components/Pages/Home.vue";
import RestaurantShow from "./components/Pages/RestaurantShow.vue";
import Payments from "./components/Pages/Payment.vue";
import Checkout from "./components/Pages/Checkout.vue";

const router = new VueRouter({
  mode: "history",
  linkActiveClass: "active",
  routes: [
    { path: "/checkout", component: Checkout, name: "checkout" },
    { path: "/payments", component: Payments },
    { path: "/", component: Home },
    { path: "/restaurant/:id", component: RestaurantShow, name: "restaurant-show" },
    { path: "*", component: Home },
  ],
});
export default router;
