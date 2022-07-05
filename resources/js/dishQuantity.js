const { filter } = require("lodash");

const inputCheckbox = document.querySelectorAll(".form-check-input");
console.log(dishes);
let priceSum = [];

for (let i = 1; i <= inputCheckbox.length; i++) {
    let checkbox = document.getElementById(`dish-checkbox-${i}`);
    let select = document.getElementById(`dish-select-${i}`);
    let dishNumber = "";

    checkbox.addEventListener("change", () => {
        if (checkbox.checked) {
            select.removeAttribute("disabled");
            select.addEventListener("change", () => {
                dishNumber = select.value;
                console.log(dishNumber);
            });
            let singleDish = {
                dish_id: checkbox.id,
                price: dishes[i - 1].price,
                quantity: dishNumber,
            };
            priceSum.push(singleDish);

            console.log(priceSum);
        } else {
            select.setAttribute("disabled", "");
            priceSum = priceSum.filter((data) => data.dish_id != checkbox.id);
            console.log(priceSum);
        }
    });
}
