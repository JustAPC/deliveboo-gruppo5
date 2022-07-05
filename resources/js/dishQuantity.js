// window.onload = toggleSelect();
const inputCheckbox = document.querySelectorAll(".form-check-input");
// const inputSelect = document.querySelectorAll(".input-select");
// console.log(inputCheckbox[0]);
// console.log(inputSelect[0]);


for (let i = 1; i <= inputCheckbox.length; i++) {
    document.getElementById('checkbox-' + i).addEventListener("change", () => {

        if (document.getElementById('checkbox-' + i).checked){
            document.getElementById('select-' + i).removeAttribute('disabled');
        }else{
            document.getElementById('select-' + i).setAttribute('disabled', '');
        }
        
    });
}
