// JavaScript Document
// Scroll x stile google play
var root = document.documentElement;
const lists = document.querySelectorAll('.scrollable-cards');

lists.forEach(el => {
  const listItems = el.querySelectorAll('.card-sm');
  const n = el.children.length;
  el.style.setProperty('--total', n);
});