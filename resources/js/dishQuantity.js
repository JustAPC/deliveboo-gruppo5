// const { filter } = require("lodash");

// Seleziono tutte le checkbox
const inputCheckbox = document.querySelectorAll(".form-check-input");
// Array che contiene tutti i piatti e quantità selezionate
let selectedDishes = [];

for (let i = 1; i <= inputCheckbox.length; i++) {

    // Singola checkbox
    let checkbox = document.getElementById(`dish-checkbox-${i}`);
    // Singola select
    let select = document.getElementById(`dish-select-${i}`);
    // Div che mostra prezzo totale
    let prezzoTotale = document.getElementById("prezzoTotale");
    // Quantità selezionata
    let dishNumber = "";

    checkbox.addEventListener("change", () => {

        // Se attivo la checkbox...
        if (checkbox.checked) {
            // attivo anche la select
            select.removeAttribute("disabled");

            // Creo il singolo piatto
            let singleDish = {
                dish_id: checkbox.id,
                quantity: 1,
                total_price: dishes[i - 1].price,
            };
            // Push il piatto nell'array
            selectedDishes.push(singleDish);
            // Stampo il prezzo
            prezzoTotale.innerHTML = sumArray(selectedDishes) + "$";

            // Se cambio il valore 1 nella select...
            select.addEventListener("change", () => {

                // La nuova quantità sarà il value della select
                dishNumber = select.value;
                // Modifico la quantità del singolo piatto
                singleDish.quantity = dishNumber;
                // Modifico il il prezzo totale del singolo piatto
                singleDish.total_price = dishes[i - 1].price * dishNumber;
                // Stampo il prezzo
                prezzoTotale.innerHTML = sumArray(selectedDishes) + "$";

            });
        // Se disattivo la checkbox...
        } else {

            // Disattivo anche la select
            select.setAttribute("disabled", "");
            // Riporto il valore della select a 1
            select.value = 1;
            // Tolgo il piatto selezionato dall'array
            selectedDishes = selectedDishes.filter(
                (data) => data.dish_id != checkbox.id
            );
            // Stampo il nuovo prezzo
            prezzoTotale.innerHTML = sumArray(selectedDishes) + "$";

        }

    });

    // Al caricamento dell'edit riprendo i vecchi valori
    if(checkbox.checked) {
        // attivo anche la select
        select.removeAttribute("disabled");
        // Quanitità del value della select
        dishNumber = select.value;
        // Creo il singolo piatto
        let singleDish = {
            dish_id: checkbox.id,
            quantity: dishNumber,
            total_price: dishes[i - 1].price*dishNumber,
        };
        // Push il piatto nell'array
        selectedDishes.push(singleDish);
        // Stampo il prezzo
        prezzoTotale.innerHTML = sumArray(selectedDishes) + "$";

        // Se cambio il valore 1 nella select...
        select.addEventListener("change", () => {

            // La nuova quantità sarà il value della select
            dishNumber = select.value;
            // Modifico la quantità del singolo piatto
            singleDish.quantity = dishNumber;
            // Modifico il il prezzo totale del singolo piatto
            singleDish.total_price = dishes[i - 1].price * dishNumber;
            // Stampo il prezzo
            prezzoTotale.innerHTML = sumArray(selectedDishes) + "$";

        });
    }
}

// Funzione per sommare il prezzo dell'array di oggetti dishes
function sumArray(array){

    let totalPrice = 0;

    for(let i = 0; i < array.length; i++){
        totalPrice += parseFloat(array[i].total_price);
    }

    return totalPrice;
}

