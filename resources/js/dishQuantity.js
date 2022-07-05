// window.onload = toggleSelect();
const inputCheckbox = document.querySelectorAll(".form-check-input");
const inputSelect = document.querySelectorAll(".input-select");
console.log(inputCheckbox[0].id);

for (let i = 0; i < inputCheckbox.length; i++) {
    if (inputCheckbox[i].id == 10) {
        console.log("ciao");
    }
}
