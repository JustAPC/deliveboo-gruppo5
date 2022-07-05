const inputCheckbox = document.querySelectorAll(".form-check-input");

for (let i = 1; i <= inputCheckbox.length; i++) {
    let checkbox = document.getElementById(`dish-checkbox-${i}`);
    let select = document.getElementById(`dish-select-${i}`);
    checkbox.addEventListener("change", () => {
        if (checkbox.checked) {
            select.removeAttribute("disabled");
        } else {
            select.setAttribute("disabled", "");
        }
    });
}
