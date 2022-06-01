/******/ (() => { // webpackBootstrap
var __webpack_exports__ = {};
/*!***************************************!*\
  !*** ./resources/js/deleteMessage.js ***!
  \***************************************/
var deleteForms = document.querySelectorAll('.delete-form');
console.log(deleteForms);
deleteForms.forEach(function (element) {
  var title = element.getAttribute('data-name');
  element.addEventListener('submit', function (e) {
    e.preventDefault();
    var accept = confirm("Stai per eliminare ".concat(title));
    if (accept) e.target.submit();
  });
});
/******/ })()
;