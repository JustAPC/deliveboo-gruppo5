/******/ (function(modules) { // webpackBootstrap
/******/ 	// The module cache
/******/ 	var installedModules = {};
/******/
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/
/******/ 		// Check if module is in cache
/******/ 		if(installedModules[moduleId]) {
/******/ 			return installedModules[moduleId].exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = installedModules[moduleId] = {
/******/ 			i: moduleId,
/******/ 			l: false,
/******/ 			exports: {}
/******/ 		};
/******/
/******/ 		// Execute the module function
/******/ 		modules[moduleId].call(module.exports, module, module.exports, __webpack_require__);
/******/
/******/ 		// Flag the module as loaded
/******/ 		module.l = true;
/******/
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/
/******/
/******/ 	// expose the modules object (__webpack_modules__)
/******/ 	__webpack_require__.m = modules;
/******/
/******/ 	// expose the module cache
/******/ 	__webpack_require__.c = installedModules;
/******/
/******/ 	// define getter function for harmony exports
/******/ 	__webpack_require__.d = function(exports, name, getter) {
/******/ 		if(!__webpack_require__.o(exports, name)) {
/******/ 			Object.defineProperty(exports, name, { enumerable: true, get: getter });
/******/ 		}
/******/ 	};
/******/
/******/ 	// define __esModule on exports
/******/ 	__webpack_require__.r = function(exports) {
/******/ 		if(typeof Symbol !== 'undefined' && Symbol.toStringTag) {
/******/ 			Object.defineProperty(exports, Symbol.toStringTag, { value: 'Module' });
/******/ 		}
/******/ 		Object.defineProperty(exports, '__esModule', { value: true });
/******/ 	};
/******/
/******/ 	// create a fake namespace object
/******/ 	// mode & 1: value is a module id, require it
/******/ 	// mode & 2: merge all properties of value into the ns
/******/ 	// mode & 4: return value when already ns object
/******/ 	// mode & 8|1: behave like require
/******/ 	__webpack_require__.t = function(value, mode) {
/******/ 		if(mode & 1) value = __webpack_require__(value);
/******/ 		if(mode & 8) return value;
/******/ 		if((mode & 4) && typeof value === 'object' && value && value.__esModule) return value;
/******/ 		var ns = Object.create(null);
/******/ 		__webpack_require__.r(ns);
/******/ 		Object.defineProperty(ns, 'default', { enumerable: true, value: value });
/******/ 		if(mode & 2 && typeof value != 'string') for(var key in value) __webpack_require__.d(ns, key, function(key) { return value[key]; }.bind(null, key));
/******/ 		return ns;
/******/ 	};
/******/
/******/ 	// getDefaultExport function for compatibility with non-harmony modules
/******/ 	__webpack_require__.n = function(module) {
/******/ 		var getter = module && module.__esModule ?
/******/ 			function getDefault() { return module['default']; } :
/******/ 			function getModuleExports() { return module; };
/******/ 		__webpack_require__.d(getter, 'a', getter);
/******/ 		return getter;
/******/ 	};
/******/
/******/ 	// Object.prototype.hasOwnProperty.call
/******/ 	__webpack_require__.o = function(object, property) { return Object.prototype.hasOwnProperty.call(object, property); };
/******/
/******/ 	// __webpack_public_path__
/******/ 	__webpack_require__.p = "/";
/******/
/******/
/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(__webpack_require__.s = 3);
/******/ })
/************************************************************************/
/******/ ({

/***/ "./resources/js/dishQuantity.js":
/*!**************************************!*\
  !*** ./resources/js/dishQuantity.js ***!
  \**************************************/
/*! no static exports found */
/***/ (function(module, exports) {

// const { filter } = require("lodash");
// Seleziono tutte le checkbox
var inputCheckbox = document.querySelectorAll(".form-check-input"); // Array che contiene tutti i piatti e quantità selezionate

var selectedDishes = [];
var prezzoTotale = document.getElementById("prezzoTotale");
var prezzoTotaleDB = document.getElementById("prezzoTotaleDB");

var _loop = function _loop(i) {
  // Singola checkbox
  var checkbox = document.getElementById("dish-checkbox-".concat(i)); // Singola select

  var select = document.getElementById("dish-select-".concat(i)); // Div che mostra prezzo totale
  // Quantità selezionata

  var dishNumber = "";
  checkbox.addEventListener("change", function () {
    // Se attivo la checkbox...
    if (checkbox.checked) {
      // attivo anche la select
      select.removeAttribute("disabled"); // Creo il singolo piatto

      var singleDish = {
        dish_id: checkbox.id,
        quantity: 1,
        total_price: dishes[i - 1].price
      }; // Push il piatto nell'array

      selectedDishes.push(singleDish); // Stampo il prezzo

      prezzoTotale.innerHTML = sumArray(selectedDishes) + "€";
      prezzoTotaleDB.value = sumArray(selectedDishes); // Se cambio il valore 1 nella select...

      select.addEventListener("change", function () {
        // La nuova quantità sarà il value della select
        dishNumber = select.value; // Modifico la quantità del singolo piatto

        singleDish.quantity = dishNumber; // Modifico il il prezzo totale del singolo piatto

        singleDish.total_price = dishes[i - 1].price * dishNumber; // Stampo il prezzo

        prezzoTotale.innerHTML = sumArray(selectedDishes) + "€";
        prezzoTotaleDB.value = sumArray(selectedDishes);
      }); // Se disattivo la checkbox...
    } else {
      // Disattivo anche la select
      select.setAttribute("disabled", ""); // Riporto il valore della select a 1

      select.value = 1; // Tolgo il piatto selezionato dall'array

      selectedDishes = selectedDishes.filter(function (data) {
        return data.dish_id != checkbox.id;
      }); // Stampo il nuovo prezzo

      prezzoTotale.innerHTML = sumArray(selectedDishes) + "€";
      prezzoTotaleDB.value = sumArray(selectedDishes);
    }
  }); // Al caricamento dell'edit riprendo i vecchi valori

  if (checkbox.checked) {
    // attivo anche la select
    select.removeAttribute("disabled"); // Quanitità del value della select

    dishNumber = select.value; // Creo il singolo piatto

    var singleDish = {
      dish_id: checkbox.id,
      quantity: dishNumber,
      total_price: dishes[i - 1].price * dishNumber
    }; // Push il piatto nell'array

    selectedDishes.push(singleDish); // Stampo il prezzo

    prezzoTotale.innerHTML = sumArray(selectedDishes) + "€";
    prezzoTotaleDB.value = sumArray(selectedDishes); // Se cambio il valore 1 nella select...

    select.addEventListener("change", function () {
      // La nuova quantità sarà il value della select
      dishNumber = select.value; // Modifico la quantità del singolo piatto

      singleDish.quantity = dishNumber; // Modifico il il prezzo totale del singolo piatto

      singleDish.total_price = dishes[i - 1].price * dishNumber; // Stampo il prezzo

      prezzoTotale.innerHTML = sumArray(selectedDishes) + "€";
      prezzoTotaleDB.value = sumArray(selectedDishes);
    });
  }
};

for (var i = 1; i <= inputCheckbox.length; i++) {
  _loop(i);
} // Funzione per sommare il prezzo dell'array di oggetti dishes


function sumArray(array) {
  var totalPrice = 0;

  for (var _i = 0; _i < array.length; _i++) {
    totalPrice += parseFloat(array[_i].total_price);
  }

  return totalPrice.toFixed(2);
}

/***/ }),

/***/ 3:
/*!********************************************!*\
  !*** multi ./resources/js/dishQuantity.js ***!
  \********************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

module.exports = __webpack_require__(/*! C:\Users\andre\Desktop\Laravel\deliveboo_prove\resources\js\dishQuantity.js */"./resources/js/dishQuantity.js");


/***/ })

/******/ });