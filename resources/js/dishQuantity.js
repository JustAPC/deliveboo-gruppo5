// const { filter } = require("lodash");

// const inputCheckbox = document.querySelectorAll(".form-check-input");
// let selectedDishes = [];

// for (let i = 1; i <= inputCheckbox.length; i++) {
//     console.log("ciao");
//     let checkbox = document.getElementById(`dish-checkbox-${i}`);
//     let select = document.getElementById(`dish-select-${i}`);
//     let dishNumber = "";

//     checkbox.addEventListener("change", () => {
//         if (checkbox.checked) {
//             select.removeAttribute("disabled");
//             let singleDish = {
//                 dish_id: checkbox.id,
//                 quantity: 1,
//                 total_price: dishes[i - 1].price,
//             };
//             selectedDishes.push(singleDish);
//             console.log(selectedDishes);

//             select.addEventListener("change", () => {
//                 dishNumber = select.value;
//                 singleDish.quantity = dishNumber;
//                 singleDish.total_price = dishes[i - 1].price * dishNumber;
//                 console.log(selectedDishes);
//             });
//         } else {
//             select.setAttribute("disabled", "");
//             selectedDishes = selectedDishes.filter(
//                 (data) => data.dish_id != checkbox.id
//             );
//             console.log(selectedDishes);
//         }
//     });
// }

let selectedDishes = [];

function dishSelection(e) {
    console.log(e);
}
