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
/******/ 	__webpack_require__.p = "";
/******/
/******/
/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(__webpack_require__.s = "./src/js/Homepage.js");
/******/ })
/************************************************************************/
/******/ ({

/***/ "./src/js/Homepage.js":
/*!****************************!*\
  !*** ./src/js/Homepage.js ***!
  \****************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

"use strict";
eval("\n\nvar _map = __webpack_require__(/*! ./front-modules/map */ \"./src/js/front-modules/map.js\");\n\nvar _timer = __webpack_require__(/*! ./front-modules/timer */ \"./src/js/front-modules/timer.js\");\n\nfunction init() {\n\t// Carte de Saint Germain en Laye\n\t// lat, lng, zoom, streetViewControl\n\tvar map = new _map.Map(48.8989, 2.0938, 12, false);\n\tmap.addMap('map');\n\tmap.addMarker('Saint Germain en Laye');\n}\n\n// Comme j'ai utilisé les modules de webpack, les scopes sont separées. J'ai attaché la fonction init à la scope globale.\n/*\nCARTES\n*/\nwindow.init = init;\n\nvar timer = new _timer.Timer('.timer');\n\n//# sourceURL=webpack:///./src/js/Homepage.js?");

/***/ }),

/***/ "./src/js/front-modules/map.js":
/*!*************************************!*\
  !*** ./src/js/front-modules/map.js ***!
  \*************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

"use strict";
eval("\n\nObject.defineProperty(exports, \"__esModule\", {\n\tvalue: true\n});\nfunction Map(lat, lng, zoom, streetViewControl) {\n\tthis.map = map;\n\tthis.lat = lat;\n\tthis.lng = lng;\n\tthis.zoom = zoom;\n\tthis.streetViewControl = streetViewControl;\n}\n\n// On ajoute la carte\nMap.prototype.addMap = function (map_id) {\n\n\t// On instantie la classe google.maps.Map (extends MVCObject) et qui prend en parametre l'element HTML de la carte\n\tthis.map = new google.maps.Map(document.getElementById(map_id), {\n\t\t// et on ajoute des parametres:\n\n\t\t// centre:\n\t\tcenter: {\n\t\t\tlat: this.lat,\n\t\t\tlng: this.lng\n\t\t},\n\t\t// niveau de zoom\n\t\tzoom: this.zoom,\n\t\tstreetViewControl: this.streetViewControl\n\t});\n};\n\nMap.prototype.addMarker = function (title) {\n\tvar marker = new google.maps.Marker({\n\t\tposition: {\n\t\t\tlat: this.lat,\n\t\t\tlng: this.lng\n\t\t},\n\t\tmap: this.map,\n\t\ttitle: title\n\t});\n};\n\nMap.prototype.addMarker = function (title) {\n\tvar marker = new google.maps.Marker({\n\t\tposition: {\n\t\t\tlat: this.lat,\n\t\t\tlng: this.lng\n\t\t},\n\t\tmap: this.map,\n\t\ttitle: title\n\t});\n};\n\nexports.Map = Map;\n\n//# sourceURL=webpack:///./src/js/front-modules/map.js?");

/***/ }),

/***/ "./src/js/front-modules/timer.js":
/*!***************************************!*\
  !*** ./src/js/front-modules/timer.js ***!
  \***************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

"use strict";
eval("\n\nObject.defineProperty(exports, \"__esModule\", {\n    value: true\n});\nfunction Timer(selector) {\n    this.selector = document.querySelector(selector);\n    this.timeinterval;\n    this.run_timer();\n}\n\nTimer.prototype.calculateTimeDifference = function () {\n    var diff = Date.now() - Date.parse(\"September 12, 2016\");\n\n    var seconds = Math.floor(diff / 1000),\n        minutes = Math.floor(seconds / 60),\n        hours = Math.floor(minutes / 60),\n        days = Math.floor(hours / 24),\n        months = Math.floor(days / 30),\n        years = Math.floor(days / 365);\n\n    seconds %= 60;\n    minutes %= 60;\n    hours %= 24;\n    days %= 30;\n    months %= 12;\n\n    this.selector.innerHTML = \"<p>Je &lt;/&gt; depuis \" + years + \" ans, \" + months + \" mois, \" + days + \" jours, \" + minutes + \" minutes et \" + seconds + \" secondes</p>\";\n};\n\nTimer.prototype.run_timer = function () {\n    // Lancement du compte à rebours\n    this.calculateTimeDifference(); // Premier tick tout de suite\n    // on déclenche la méthode update_timer à un intervalle régulier (tous les 1000ms ou 1s);\n    this.timeinterval = setInterval(this.calculateTimeDifference.bind(this), 1000);\n};\n\nexports.Timer = Timer;\n\n//# sourceURL=webpack:///./src/js/front-modules/timer.js?");

/***/ })

/******/ });