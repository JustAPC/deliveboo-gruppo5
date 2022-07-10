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
/******/ 	return __webpack_require__(__webpack_require__.s = 1);
/******/ })
/************************************************************************/
/******/ ({

/***/ "./resources/js/front.js":
/*!*******************************!*\
  !*** ./resources/js/front.js ***!
  \*******************************/
/*! no static exports found */
/***/ (function(module, exports) {

throw new Error("Module build failed (from ./node_modules/babel-loader/lib/index.js):\nSyntaxError: C:\\Users\\PC GAMING\\Desktop\\progetto finale giusto\\deliveboo-gruppo5\\resources\\js\\front.js: Unexpected token, expected \"from\" (4:10)\n\n\u001b[0m \u001b[90m 2 |\u001b[39m\u001b[0m\n\u001b[0m \u001b[90m 3 |\u001b[39m \u001b[36mimport\u001b[39m \u001b[33mVue\u001b[39m \u001b[36mfrom\u001b[39m \u001b[32m\"vue\"\u001b[39m\u001b[33m;\u001b[39m\u001b[0m\n\u001b[0m\u001b[31m\u001b[1m>\u001b[22m\u001b[39m\u001b[90m 4 |\u001b[39m \u001b[36mimport\u001b[39m vue\u001b[33m-\u001b[39mbraintree \u001b[36mfrom\u001b[39m \u001b[32m'vue-braintree'\u001b[39m\u001b[33m;\u001b[39m\u001b[0m\n\u001b[0m \u001b[90m   |\u001b[39m           \u001b[31m\u001b[1m^\u001b[22m\u001b[39m\u001b[0m\n\u001b[0m \u001b[90m 5 |\u001b[39m \u001b[33mVue\u001b[39m\u001b[33m.\u001b[39muse(vue\u001b[33m-\u001b[39mbraintree)\u001b[0m\n\u001b[0m \u001b[90m 6 |\u001b[39m\u001b[0m\n\u001b[0m \u001b[90m 7 |\u001b[39m \u001b[36mimport\u001b[39m router \u001b[36mfrom\u001b[39m \u001b[32m\"./routes.js\"\u001b[39m\u001b[33m;\u001b[39m\u001b[0m\n    at instantiate (C:\\Users\\PC GAMING\\Desktop\\progetto finale giusto\\deliveboo-gruppo5\\node_modules\\@babel\\parser\\lib\\index.js:72:32)\n    at constructor (C:\\Users\\PC GAMING\\Desktop\\progetto finale giusto\\deliveboo-gruppo5\\node_modules\\@babel\\parser\\lib\\index.js:359:12)\n    at Parser.raise (C:\\Users\\PC GAMING\\Desktop\\progetto finale giusto\\deliveboo-gruppo5\\node_modules\\@babel\\parser\\lib\\index.js:3339:19)\n    at Parser.unexpected (C:\\Users\\PC GAMING\\Desktop\\progetto finale giusto\\deliveboo-gruppo5\\node_modules\\@babel\\parser\\lib\\index.js:3377:16)\n    at Parser.expectContextual (C:\\Users\\PC GAMING\\Desktop\\progetto finale giusto\\deliveboo-gruppo5\\node_modules\\@babel\\parser\\lib\\index.js:3977:18)\n    at Parser.parseImport (C:\\Users\\PC GAMING\\Desktop\\progetto finale giusto\\deliveboo-gruppo5\\node_modules\\@babel\\parser\\lib\\index.js:16310:12)\n    at Parser.parseStatementContent (C:\\Users\\PC GAMING\\Desktop\\progetto finale giusto\\deliveboo-gruppo5\\node_modules\\@babel\\parser\\lib\\index.js:14753:27)\n    at Parser.parseStatement (C:\\Users\\PC GAMING\\Desktop\\progetto finale giusto\\deliveboo-gruppo5\\node_modules\\@babel\\parser\\lib\\index.js:14643:17)\n    at Parser.parseBlockOrModuleBlockBody (C:\\Users\\PC GAMING\\Desktop\\progetto finale giusto\\deliveboo-gruppo5\\node_modules\\@babel\\parser\\lib\\index.js:15286:25)\n    at Parser.parseBlockBody (C:\\Users\\PC GAMING\\Desktop\\progetto finale giusto\\deliveboo-gruppo5\\node_modules\\@babel\\parser\\lib\\index.js:15277:10)\n    at Parser.parseProgram (C:\\Users\\PC GAMING\\Desktop\\progetto finale giusto\\deliveboo-gruppo5\\node_modules\\@babel\\parser\\lib\\index.js:14561:10)\n    at Parser.parseTopLevel (C:\\Users\\PC GAMING\\Desktop\\progetto finale giusto\\deliveboo-gruppo5\\node_modules\\@babel\\parser\\lib\\index.js:14548:25)\n    at Parser.parse (C:\\Users\\PC GAMING\\Desktop\\progetto finale giusto\\deliveboo-gruppo5\\node_modules\\@babel\\parser\\lib\\index.js:16556:10)\n    at parse (C:\\Users\\PC GAMING\\Desktop\\progetto finale giusto\\deliveboo-gruppo5\\node_modules\\@babel\\parser\\lib\\index.js:16608:38)\n    at parser (C:\\Users\\PC GAMING\\Desktop\\progetto finale giusto\\deliveboo-gruppo5\\node_modules\\@babel\\core\\lib\\parser\\index.js:52:34)\n    at parser.next (<anonymous>)\n    at normalizeFile (C:\\Users\\PC GAMING\\Desktop\\progetto finale giusto\\deliveboo-gruppo5\\node_modules\\@babel\\core\\lib\\transformation\\normalize-file.js:87:38)\n    at normalizeFile.next (<anonymous>)\n    at run (C:\\Users\\PC GAMING\\Desktop\\progetto finale giusto\\deliveboo-gruppo5\\node_modules\\@babel\\core\\lib\\transformation\\index.js:31:50)\n    at run.next (<anonymous>)\n    at Function.transform (C:\\Users\\PC GAMING\\Desktop\\progetto finale giusto\\deliveboo-gruppo5\\node_modules\\@babel\\core\\lib\\transform.js:25:41)\n    at transform.next (<anonymous>)\n    at step (C:\\Users\\PC GAMING\\Desktop\\progetto finale giusto\\deliveboo-gruppo5\\node_modules\\gensync\\index.js:261:32)\n    at C:\\Users\\PC GAMING\\Desktop\\progetto finale giusto\\deliveboo-gruppo5\\node_modules\\gensync\\index.js:273:13\n    at async.call.result.err.err (C:\\Users\\PC GAMING\\Desktop\\progetto finale giusto\\deliveboo-gruppo5\\node_modules\\gensync\\index.js:223:11)\n    at C:\\Users\\PC GAMING\\Desktop\\progetto finale giusto\\deliveboo-gruppo5\\node_modules\\gensync\\index.js:189:28\n    at C:\\Users\\PC GAMING\\Desktop\\progetto finale giusto\\deliveboo-gruppo5\\node_modules\\@babel\\core\\lib\\gensync-utils\\async.js:74:7\n    at C:\\Users\\PC GAMING\\Desktop\\progetto finale giusto\\deliveboo-gruppo5\\node_modules\\gensync\\index.js:113:33\n    at step (C:\\Users\\PC GAMING\\Desktop\\progetto finale giusto\\deliveboo-gruppo5\\node_modules\\gensync\\index.js:287:14)\n    at C:\\Users\\PC GAMING\\Desktop\\progetto finale giusto\\deliveboo-gruppo5\\node_modules\\gensync\\index.js:273:13");

/***/ }),

/***/ 1:
/*!*************************************!*\
  !*** multi ./resources/js/front.js ***!
  \*************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

module.exports = __webpack_require__(/*! C:\Users\PC GAMING\Desktop\progetto finale giusto\deliveboo-gruppo5\resources\js\front.js */"./resources/js/front.js");


/***/ })

/******/ });