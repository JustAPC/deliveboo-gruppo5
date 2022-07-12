import { Chart, registerables } from "chart.js";
Chart.register(...registerables);

window.axios = require("axios");
window.axios.defaults.headers.common["X-Requested-With"] = "XMLHttpRequest";

function createCharts(orders) {
  const graph = new Chart(myChart, {
    type: "bar",
    data: {
      labels: months,
      datasets: [
        {
          label: "Totale Ordini",
          data: orders,
          backgroundColor: [
            "rgba(0, 204, 188, 0.8)",
            "rgba(127, 22, 224, 0.8)",
            "rgba(0, 224, 206, 0.8)",
            "rgba(224, 88, 22, 0.8)",
            "rgba(217, 224, 11, 0.8)",
            "rgba(68, 0, 99, 0.8)",
            "rgba(224, 106, 22, 0.8)",
            "rgba(153, 0, 224, 0.8)",
            "rgba(175, 224, 22, 0.8)",
            "rgba(11, 207, 224, 0.8)",
            "rgba(206, 150, 242, 0.8)",
            "rgba(12, 247, 124, 0.8)",
          ],
          borderColor: [
            "rgb(0, 204, 188)",
            "rgb(127, 22, 224)",
            "rgb(0, 224, 206)",
            "rgb(224, 88, 22)",
            "rgb(217, 224, 11)",
            "rgb(68, 0, 99)",
            "rgb(224, 106, 22)",
            "rgb(153, 0, 224)",
            "rgb(175, 224, 22)",
            "rgb(11, 207, 224)",
            "rgb(206, 150, 242)",
            "rgb(12, 247, 124)",
          ],
          borderWidth: 2,
          borderRadius: 4,
        },
      ],
    },
    options: {
      plugins: {
        title: {
          display: true,
          text: "Totale ordini per mese",
          align: "start",
          padding: 15,
          font: {
            size: 24,
          },
        },
      },
    },
  });
}

function createPieChart(total) {
  const pie = new Chart(pieChart, {
    type: "line",
    data: {
      labels: months,
      datasets: [
        {
          label: "Guadagni Mensili",
          data: total,
          fill: false,
          backgroundColor: [
            "rgba(0, 204, 188, 0.8)",
            "rgba(127, 22, 224, 0.8)",
            "rgba(0, 224, 206, 0.8)",
            "rgba(224, 88, 22, 0.8)",
            "rgba(217, 224, 11, 0.8)",
            "rgba(68, 0, 99, 0.8)",
            "rgba(224, 106, 22, 0.8)",
            "rgba(153, 0, 224, 0.8)",
            "rgba(175, 224, 22, 0.8)",
            "rgba(11, 207, 224, 0.8)",
            "rgba(206, 150, 242, 0.8)",
            "rgba(12, 247, 124, 0.8)",
          ],
          borderColor: [
            "rgb(0, 204, 188)",
            "rgb(127, 22, 224)",
            "rgb(0, 224, 206)",
            "rgb(224, 88, 22)",
            "rgb(217, 224, 11)",
            "rgb(68, 0, 99)",
            "rgb(224, 106, 22)",
            "rgb(153, 0, 224)",
            "rgb(175, 224, 22)",
            "rgb(11, 207, 224)",
            "rgb(206, 150, 242)",
            "rgb(12, 247, 124)",
          ],
          borderWidth: 2,
          tension: 0.1,
        },
      ],
    },
    options: {
      plugins: {
        title: {
          display: true,
          text: "Totale incassato",
          align: "start",
          padding: 15,
          font: {
            size: 24,
          },
        },
      },
    },
  });
}

const loader = document.getElementById("loader-wrap");
const chartsWrapper = document.getElementById("charts-wrapper");
const myChart = document.getElementById("myChart").getContext("2d");
const pieChart = document.getElementById("pieChart").getContext("2d");

const months = [
  "Gennaio",
  "Febbraio",
  "Marzo",
  "Aprile",
  "Maggio",
  "Giugno",
  "Luglio",
  "Agosto",
  "Settembre",
  "Ottobre",
  "Novembre",
  "Dicembre",
];

axios.get("/admin/charts/create").then((res) => {
  const orders = res.data.totalOrdersForMonths;
  const total = res.data.totalSellForMonths;

  loader.classList.add("active");
  chartsWrapper.classList.remove("active");

  const chart = createCharts(orders);
  const pie = createPieChart(total);
});
