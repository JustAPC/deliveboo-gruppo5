const { functionsIn } = require("lodash");

const fileInput = document.querySelector("#myfiles");
const image_url = document.getElementById("image_url");
const removeButton = document.getElementById("file_remove");

fileInput.addEventListener("change", () => {
    if (fileInput.length != 0) {
        image_url.setAttribute("disabled", "");
        removeButton.removeAttribute("disabled");
    }
});

const inputHandler = function (e) {
    if (e.target.value != 0) {
        fileInput.setAttribute("disabled", "");
    } else if (e.target.value == 0) {
        fileInput.removeAttribute("disabled");
    }
};
image_url.addEventListener("input", inputHandler);
image_url.addEventListener("propertychange", inputHandler);

removeButton.addEventListener("click", (e) => {
    e.preventDefault();
    fileInput.value = "";
    removeButton.setAttribute("disabled", "");
    image_url.removeAttribute("disabled");
});
