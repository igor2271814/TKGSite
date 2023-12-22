let toppanel = document.getElementById('toppanel').classList
let active_class = 'toppanel_scrolled'
window.addEventListener('scroll', e => {
  if (scrollY > 50) toppanel.add(active_class)
  else toppanel.remove(active_class)
})
document.addEventListener("DOMContentLoaded", function() {
  var panel = document.getElementById("panel");
  var dropdown = document.getElementById("dropdown");

  panel.addEventListener("click", function() {
    dropdown.classList.toggle("show");
  });
});