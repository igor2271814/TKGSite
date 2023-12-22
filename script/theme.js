// Выбираем кнопку
const btn = document.querySelector(".btn-toggle");
// Выбираем таблицу стилей
const theme = document.querySelector("#theme-link");
// Отслеживаем щелчок по кнопке
btn.addEventListener("click", function() {
  // Если текущий адрес содержит "light-theme.css"
  if (theme.getAttribute("href") == "style/CSS/styles.css?ver=0.8.5.1") {
    // …то переключаемся на "dark-theme.css"
    theme.href = "style/CSS/dark_style.css?ver=0.8.5.1";
    // В противном случае… 
  } else {
    // …переключаемся на "light-theme.css"
    theme.href = "style/CSS/styles.css?ver=0.8.5.1";
  }
});