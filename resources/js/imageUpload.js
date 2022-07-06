const { functionsIn } = require("lodash");

const fileInput = document.querySelector("#myfiles");
const image_url = document.getElementById("image_url");
const removeButton = document.getElementById("file_remove");
const imgPreview = document.getElementById("img-preview");

fileInput.addEventListener("change", () => {
    if (fileInput.length != 0) {
        getImgData();
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
    imgPreview.innerHTML = "";
    removeButton.setAttribute("disabled", "");
    image_url.removeAttribute("disabled");
});

function getImgData() {
    const files = fileInput.files[0];
    if (files) {
        const fileReader = new FileReader();
        fileReader.readAsDataURL(files);
        fileReader.addEventListener("load", function () {
            imgPreview.style.display = "block";
            imgPreview.innerHTML =
                `<img src="` + this.result + `" class="img-preview"/>`;
        });
    }
}
