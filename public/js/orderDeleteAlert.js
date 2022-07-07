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
/******/ 	return __webpack_require__(__webpack_require__.s = 5);
/******/ })
/************************************************************************/
/******/ ({

/***/ "./resources/js/orderDeleteAlert.js":
/*!******************************************!*\
  !*** ./resources/js/orderDeleteAlert.js ***!
  \******************************************/
/*! no static exports found */
/***/ (function(module, exports) {

var deleteForms = document.querySelectorAll(".delete-form");
deleteForms.forEach(function (element) {
  var orderID = element.getAttribute("data-name");
  element.addEventListener("submit", function (e) {
    e.preventDefault();
    Swal.fire({
      title: "\"Ordine ID:".concat(orderID, "\" <br> L'ordine verr\xE0 eliminato."),
      text: "Sei sicuro di procedere?",
      icon: "warning",
      showCancelButton: true,
      confirmButtonColor: "#3490dc",
      cancelButtonColor: "#e3342f",
      confirmButtonText: "Si, rimuovi l'ordine",
      cancelButtonText: "No, conserva l'ordine"
    }).then(function (result) {
      if (result.isConfirmed) {
        var sumbitFunction = function sumbitFunction() {
          e.target.submit();
        };

        Swal.fire("Successo!", "L'ordine è stato eliminato", "success");
        var myTimeout = setTimeout(sumbitFunction, 3000);
      }
    });
  });
});

/***/ }),

/***/ 5:
/*!************************************************!*\
  !*** multi ./resources/js/orderDeleteAlert.js ***!
  \************************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

<<<<<<< HEAD
<<<<<<< HEAD
module.exports = __webpack_require__(/*! C:\Users\david\Desktop\Progetto finale\deliveboo-gruppo5\resources\js\orderDeleteAlert.js */"./resources/js/orderDeleteAlert.js");
=======
module.exports = __webpack_require__(/*! C:\Users\PC GAMING\Desktop\progetto finale giusto\deliveboo-gruppo5\resources\js\orderDeleteAlert.js */"./resources/js/orderDeleteAlert.js");
>>>>>>> 57868de36c19b203a985a1788e3b0c71b2079522
=======
module.exports = __webpack_require__(/*! C:\Users\andre\Desktop\Laravel\deliveboo_prove\resources\js\orderDeleteAlert.js */"./resources/js/orderDeleteAlert.js");
>>>>>>> f86c567832b7d3a6a7d293bd86a571274fb6aff3


/***/ })

/******/ });