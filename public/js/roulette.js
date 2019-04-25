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

/***/ "./resources/js/roulette.js":
/*!**********************************!*\
  !*** ./resources/js/roulette.js ***!
  \**********************************/
/*! no static exports found */
/***/ (function(module, exports) {

function runBtc(winner) {
  var items = $("#popup-btc").find('.roulette-item');
  var numberRoll = 10; //количество прокруток не меньше 2

  var oneHeight = items.innerHeight(); // высота одного элемента

  var numElem = items.length; // количество элементов

  var winnerNum = items.index($("#popup-btc .roulette-item:contains(" + winner + ")")); // if(winnerNum == -1){
  //     return false
  // }

  for (i = 0; i < numberRoll; i++) {
    items.clone().appendTo("#popup-btc .main-roulette-array");
  }

  $('#popup-btc .main-roulette-array').css({
    bottom: "0"
  });
  $('#popup-btc .main-roulette-array').animate({
    bottom: ((numberRoll - 1) * numElem - 1 + winnerNum) * oneHeight
  }, 4000);
}

;

function runWinner(winner) {
  if ($("#popup-winner").find('.winner-image').hasClass('show-img')) {
    $("#popup-winner").find('.winner-image').removeClass('show-img');
  }

  var items = $("#popup-winner").find('.roulette-item');
  var numberRoll = 15; //количество прокруток не меньше 2

  var oneHeight = items.innerHeight(); // высота одного элемента

  var numElem = items.length; // количество элементов

  var winnerElem = $("#popup-winner .roulette-item:contains(" + winner + ")");
  var winnerNum = items.index(winnerElem);

  for (i = 0; i < numberRoll; i++) {
    items.clone().appendTo("#popup-winner .main-roulette-array");
  }

  $('#popup-winner .main-roulette-array').css({
    bottom: "0"
  });
  $('#popup-winner .main-roulette-array').animate({
    bottom: ((numberRoll - 1) * numElem - 1 + winnerNum) * oneHeight
  }, {
    duration: 8000,
    complete: function complete() {
      $("#popup-winner").find('.winner-image').addClass('show-img');
    }
  });
}

;

/***/ }),

/***/ 5:
/*!****************************************!*\
  !*** multi ./resources/js/roulette.js ***!
  \****************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

module.exports = __webpack_require__(/*! /home/oleh/Project/gdr/resources/js/roulette.js */"./resources/js/roulette.js");


/***/ })

/******/ });