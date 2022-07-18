import Vue from "vue";
import VueRouter from "vue-router";

// import VueCarousel from "vue-carousel";
// Vue.use(VueCarousel);

Vue.use(VueRouter);
import Home from "./components/Pages/Home.vue";
import RestaurantShow from "./components/Pages/RestaurantShow.vue";
import Payments from "./components/Pages/Payment.vue";
import Checkout from "./components/Pages/Checkout.vue";
import OrderSummary from "./components/Pages/OrderSummary.vue";

const router = new VueRouter({
  mode: "history",
  linkActiveClass: "active",
  routes: [
    { path: "/", component: Home, name: "home" },
    { path: "/restaurant/:id", component: RestaurantShow, name: "restaurant-show" },
    { path: "/checkout", component: Checkout, name: "checkout" },
    { path: "/payments", component: Payments, name: "payments" },
    { path: "/ordersummary", component: OrderSummary, name: "ordersummary" },
    { path: "*", component: Home },
  ],
});
export default router;
