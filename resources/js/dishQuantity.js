// window.onload = toggleSelect();
const inputCheckbox = document.querySelectorAll(".form-check-input");
const inputSelect = document.querySelectorAll(".input-select");
console.log(inputCheckbox[0]);
console.log(inputSelect[0]);

inputCheckbox.addEventListener("change", () => {
    for (let i = 0; i < inputCheckbox.length; i++) {
        if (inputCheckbox[i].checked == true) {
            inputSelect[i].disabled = false;
        }
    }
});
