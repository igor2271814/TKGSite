<?php
// Получаем текущий timestamp
$timestamp = time();
?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <title>TGK</title>
  <link type="image/png" sizes="16x16" rel="icon" href="images/frame.png">
  <link rel="stylesheet" href="style/CSS/itc-slider.css?ver=<?php echo $cssUrl; ?>">
  <link rel="stylesheet" type="text/css" href="style/CSS/styles.css?ver=<?php echo $cssUrl; ?>" id="theme-link">
  <script src="script/itc-slider.js" defer></script>
  <script src="script/scr.js" defer></script>
</head>

<body>
  <div id="toppanel" class="toppanel">
    <div class="line-1"><a id="panel" href="#close"><img src="images/TGK_logo.png" alt="Kronus Group"> KRONUS <br />
        GROUP <svg xmlns="http://www.w3.org/2000/svg" width="14" height="8" viewBox="0 0 14 8" fill="none">
          <path d="M13 1L7.70711 6.68539C7.31658 7.10487 6.68342 7.10487 6.29289 6.68539L1 1" stroke="#646464" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
        </svg></a></div>
    <div class="line-2"><a class="" href="index.php">
        <svg xmlns="http://www.w3.org/2000/svg" width="3vh" height="3vh" viewBox="0 0 18 18" fill="none">
          <path d="M7.22222 13.4444H10.7778M14.3333 17H3.66667C2.19391 17 1 15.8061 1 14.3333V9C1 8.29275 1.28095 7.61448 1.78105 7.11438L7.11438 1.78105C8.15578 0.73965 9.84422 0.73965 10.8856 1.78105L16.219 7.11438C16.719 7.61448 17 8.29275 17 9V14.3333C17 15.8061 15.8061 17 14.3333 17Z" stroke="#646464" stroke-width="2" stroke-linejoin="round" />
        </svg>
        HOME</a></div>
    <div class="line-3">
      <a class="" href="#">
        <svg xmlns="http://www.w3.org/2000/svg" class="home" width="3vh" height="3vh" viewBox="0 0 18 18" fill="none">
          <path d="M7.22222 13.4444H10.7778M14.3333 17H3.66667C2.19391 17 1 15.8061 1 14.3333V9C1 8.29275 1.28095 7.61448 1.78105 7.11438L7.11438 1.78105C8.15578 0.73965 9.84422 0.73965 10.8856 1.78105L16.219 7.11438C16.719 7.61448 17 8.29275 17 9V14.3333C17 15.8061 15.8061 17 14.3333 17Z" stroke="#646464" stroke-width="2" stroke-linejoin="round" class="active" />
        </svg>
        NEWS
      </a>
    </div>
    <div class="line-4"><a class="btn-toggle" href="#close">ANOTHER THEME</a></div>
    <div class="line-5"><a class="" href="test.php">
        <svg xmlns="http://www.w3.org/2000/svg" class="home" width="3vh" height="3vh" viewBox="0 0 18 18" fill="none">
          <path d="M7.22222 13.4444H10.7778M14.3333 17H3.66667C2.19391 17 1 15.8061 1 14.3333V9C1 8.29275 1.28095 7.61448 1.78105 7.11438L7.11438 1.78105C8.15578 0.73965 9.84422 0.73965 10.8856 1.78105L16.219 7.11438C16.719 7.61448 17 8.29275 17 9V14.3333C17 15.8061 15.8061 17 14.3333 17Z" stroke="#646464" stroke-width="2" stroke-linejoin="round" />
        </svg>
        TEST MY ASS</a></div>
    <div id="dropdown">
      <div class="content">
        <div class="avatar">
          <svg xmlns="http://www.w3.org/2000/svg" width="44" height="44" viewBox="0 0 44 44" fill="none">
            <circle cx="20" cy="20" r="20" fill="black" />
          </svg>
          <p>KRONUS <br />
            GROUP</p>
        </div>
        <div class="dropdown_content">
          <div class="dropdown_content_line">
            <table>
              <thead>
                <tr>
                  <th>PROJECTS</th>
                  <th>TKG</th>
                  <th>BUSINESS</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th><a href="#close">BEASTS OF BERMUDA</a></th>
                  <th><a href="#close">ABOUT US</a></th>
                  <th>SAMPLENAME@GMAIL.COM</th>
                </tr>
                <tr>
                  <th><a href="#close">THE ISLE EVRIMA</a></th>
                  <th><a href="#close">SOCIAL</a></th>
                  <th><a href="#close">FOR ADS AND OTHER</a></th>
                </tr>
                <tr>
                  <th><a href="#close">OTHER IN DEVELOPMENT</a></th>
                  <th><a href="#close">DEVLOGS</a></th>
                </tr>
              </tbody>
            </table>
            <div class="toppanel_news_line"> <!-- Новостная лента -->
              <div class="itc-slider" data-slider="itc-slider" data-autoplay="false" data-interval="5000">
                <!-- Слайдер -->
                <div class="itc-slider-wrapper">
                  <div class="itc-slider-items">
                    <div class="itc-slider-item">
                      <!-- Контент 1 слайда -->
                      <ul>
                        <li><a href="#openModal_1"><img src="images/news_line1.png" alt=""></a></li>
                        <li>
                          <p>Check out new stuff and other</p>
                        </li>
                      </ul>
                    </div>
                    <div class="itc-slider-item">
                      <!-- Контент 2 слайда -->
                      <ul>
                        <li><a href="#openModal_2"><img src="images/news_line2.png" alt=""></a></li>
                        <li>
                          <p>Check out new stuff and other</p>
                        </li>
                      </ul>
                    </div>
                    <div class="itc-slider-item">
                      <!-- Контент 3 слайда -->
                      <ul>
                        <li><a href="#openModal_3"><img src="images/news_line3.png" alt=""></a></li>
                        <li>
                          <p>Check out new stuff and other</p>
                        </li>
                      </ul>
                    </div>
                    <div class="itc-slider-item">
                      <!-- Контент 4 слайда -->
                      <ul>
                        <li><a href="#openModal_4"><img src="images/news_line4.png" alt=""></a></li>
                        <li>
                          <p>Check out new stuff and other</p>
                        </li>
                      </ul>
                    </div>
                    <div class="itc-slider-item">
                      <!-- Контент 5 слайда -->
                      <ul>
                        <li><a href="#openModal_5"><img src="images/ForTestFrowGhost/5.jpg" alt=""></a></li>
                        <li>
                          <p>Check out new stuff and other</p>
                        </li>
                      </ul>
                    </div>
                    <div class="itc-slider-item">
                      <!-- Контент 6 слайда -->
                      <ul>
                        <li><a href="#openModal_6"><img src="images/ForTestFrowGhost/6.jpg" alt=""></a></li>
                        <li>
                          <p>Check out new stuff and other</p>
                        </li>
                      </ul>
                    </div>
                    <div class="itc-slider-item">
                      <!-- Контент 7 слайда -->
                      <ul>
                        <li><a href="#openModal_7"><img src="images/ForTestFrowGhost/7.jpg" alt=""></a></li>
                        <li>
                          <p>Check out new stuff and other</p>
                        </li>
                      </ul>
                    </div>
                    <div class="itc-slider-item">
                      <!-- Контент 8 слайда -->
                      <ul>
                        <li><a href="#openModal_8"><img src="images/ForTestFrowGhost/8.jpg" alt=""></a></li>
                        <li>
                          <p>Check out new stuff and other</p>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div> <!-- Слайдер -->
            </div> <!-- Новостная лента -->
          </div>
        </div>
      </div>
    </div>
  </div> <!-- Верхняя панель -->
  <div class="poster"> <!-- Главный постер -->
    <img src="images/Poster_Up.png" alt="">
  </div> <!-- Главный постер -->
  <div class="text_center">
    <H1>LATEST NEWS</H1>
  </div>
  <div class="news_line"> <!-- Новостная лента -->
    <div class="itc-slider" data-slider="itc-slider" data-autoplay="true" data-interval="5000"> <!-- Слайдер -->
      <div class="itc-slider-wrapper">
        <div class="itc-slider-items">
          <div class="itc-slider-item">
            <!-- Контент 1 слайда -->
            <ul>
              <li><a href="#openModal_1"><img src="images/news_line1.png" alt=""></a></li>
              <li>
                <p>12.07.2023 <em>NEWS</em></p>
              </li>
              <li>
                <h2>RELEASE OF KRONUS ETERNITY</h2>
              </li>
            </ul>
          </div>
          <div class="itc-slider-item">
            <!-- Контент 2 слайда -->
            <ul>
              <li><a href="#openModal_2"><img src="images/news_line2.png" alt=""></a></li>
              <li>
                <p>12.07.2023 <em>NEWS</em></p>
              </li>
              <li>
                <h2>RELEASE OF KRONUS ETERNITY</h2>
              </li>
            </ul>
          </div>
          <div class="itc-slider-item">
            <!-- Контент 3 слайда -->
            <ul>
              <li><a href="#openModal_3"><img src="images/news_line3.png" alt=""></a></li>
              <li>
                <p>12.07.2023 <em>NEWS</em></p>
              </li>
              <li>
                <h2>RELEASE OF KRONUS ETERNITY</h2>
              </li>
            </ul>
          </div>
          <div class="itc-slider-item">
            <!-- Контент 4 слайда -->
            <ul>
              <li><a href="#openModal_4"><img src="images/news_line4.png" alt=""></a></li>
              <li>
                <p>12.07.2023 <em>NEWS</em></p>
              </li>
              <li>
                <h2>RELEASE OF KRONUS ETERNITY</h2>
              </li>
            </ul>
          </div>
          <div class="itc-slider-item">
            <!-- Контент 5 слайда -->
            <ul>
              <li><a href="#openModal_5"><img src="images/ForTestFrowGhost/5.jpg" alt=""></a></li>
              <li>
                <p>12.07.2023 <em>NEWS</em></p>
              </li>
              <li>
                <h2>RELEASE OF KRONUS ETERNITY</h2>
              </li>
            </ul>
          </div>
          <div class="itc-slider-item">
            <!-- Контент 6 слайда -->
            <ul>
              <li><a href="#openModal_6"><img src="images/ForTestFrowGhost/6.jpg" alt=""></a></li>
              <li>
                <p>12.07.2023 <em>NEWS</em></p>
              </li>
              <li>
                <h2>RELEASE OF KRONUS ETERNITY</h2>
              </li>
            </ul>
          </div>
          <div class="itc-slider-item">
            <!-- Контент 7 слайда -->
            <ul>
              <li><a href="#openModal_7"><img src="images/ForTestFrowGhost/7.jpg" alt=""></a></li>
              <li>
                <p>12.07.2023 <em>NEWS</em></p>
              </li>
              <li>
                <h2>RELEASE OF KRONUS ETERNITY</h2>
              </li>
            </ul>
          </div>
          <div class="itc-slider-item">
            <!-- Контент 8 слайда -->
            <ul>
              <li><a href="#openModal_8"><img src="images/ForTestFrowGhost/8.jpg" alt=""></a></li>
              <li>
                <p>12.07.2023 <em>NEWS</em></p>
              </li>
              <li>
                <h2>RELEASE OF KRONUS ETERNITY</h2>
              </li>
            </ul>
          </div>
        </div>
      </div>
      <!-- Кнопки для перехода к предыдущему и следующему слайду -->
      <button class="itc-slider-btn itc-slider-btn-prev"></button>
      <button class="itc-slider-btn itc-slider-btn-next"></button>
    </div> <!-- Слайдер -->
  </div> <!-- Новостная лента -->
  </div>
  <div class="footer">
    <div class="for_dot">
      <ul>
        <li>
          <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32" fill="none">
            <circle cx="16" cy="16" r="16" fill="#D9D9D9" />
          </svg>
        </li>
        <li>
          <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32" fill="none">
            <circle cx="16" cy="16" r="16" fill="#D9D9D9" />
          </svg>
        </li>
        <li>
          <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32" fill="none">
            <circle cx="16" cy="16" r="16" fill="#D9D9D9" />
          </svg>
        </li>
      </ul>
    </div>
    <div class="link">
      <p>Мы любим животных и стараемся поддерживать тех из них, кому не посчастливилось иметь ласковых хозяев и тёплый кров. Один из проверенных способов это сделать — помочь благотворительному фонду <a href="https://luchdobrafound.ru/">«Луч Добра»</a>. Благодаря их труду ежегодно сотни питомцев находят свой новый дом.</p>
    </div>
    <div class="bottom_panel">
      <ul>
        <li>
          <a href="#">НАСТРОЙКИ COOKIE</a>
        </li>
        <li>
          <a href="#">ПОЛИТИКА КОНФИДЕНЦИАЛЬНОСТИ</a>
        </li>
        <li>
          <a href="#">УСЛОВИЯ ИСПОЛЬЗОВАНИЯ</a>
        </li>
      </ul>
    </div>
  </div>
  <div id="openModal_1" class="modal">
    <div class="modal-dialog">
      <a href="#close" title="Close" class="close">×</a>
      <div class="modal-content">
        <div class="modal-header">
        </div>
        <div class="modal-body">
          <ul>
            <li class="date">12.07.2023</li>
            <li class="title">RELEASE OF KRONUS ETERNITY</li>
            <li class="this_is_the_base">Vestibulum vitae venenatis velit, et posuere sapien. Aliquam ullamcorper vestibulum sapien, sed pellentesque dolor imperdiet nec.</li>
            <li class="this_is_the_base"><b>Vitae venenatis</b></li>
            <li class="this_is_the_base">
              Vestibulum vitae venenatis velit, et posuere sapien. Aliquam ullamcorper vestibulum sapien, sed pellentesque dolor imperdiet nec.Vestibulum vitae venenatis velit, et posuere sapien. Aliquam ullamcorper vestibulum sapien, sed pellentesque dolor imperdiet nec.Vestibulum vitae venenatis velit, et posuere sapien. Aliquam ullamcorper vestibulum sapien, sed pellentesque dolor imperdiet nec.Vestibulum vitae venenatis velit, et posuere sapien. Aliquam ullamcorper vestibulum sapien, sed pellentesque dolor imperdiet nec.Vestibulum vitae venenatis velit, et posuere sapien. Aliquam ullamcorper vestibulum sapien, sed pellentesque dolor imperdiet nec.
            </li>
            <li class="this_is_the_base">
              Vestibulum vitae venenatis velit, et posuere sapien. Aliquam ullamcorper vestibulum sapien, sed pellentesque dolor imperdiet nec.Vestibulum vitae venenatis velit, et posuere sapien. Aliquam ullamcorper vestibulum sapien, sed pellentesque dolor imperdiet nec.Vestibulum vitae venenatis velit, et posuere sapien. Aliquam ullamcorper vestibulum sapien, sed pellentesque dolor imperdiet nec.Vestibulum vitae venenatis velit, et posuere sapien. Aliquam ullamcorper vestibulum sapien, sed pellentesque dolor imperdiet nec.Vestibulum vitae venenatis velit, et posuere sapien. Aliquam ullamcorper vestibulum sapien, sed pellentesque dolor imperdiet nec.
            </li>
            <li class="this_is_the_base_light">
              Vestibulum vitae venenatis velit, et posuere sapien. Aliquam ullamcorper vestibulum sapien, sed pellentesque dolor imperdiet nec.Vestibulum vitae venenatis velit, et posuere sapien. Aliquam ullamcorper vestibulum sapien, sed pellentesque dolor imperdiet nec.
            </li>
            <li class="this_is_the_base">
              Vestibulum vitae venenatis velit, et posuere sapien. Aliquam ullamcorper vestibulum sapien, sed pellentesque dolor imperdiet nec.Vestibulum vitae venenatis velit, et posuere sapien. Aliquam ullamcorper vestibulum sapien, sed pellentesque dolor imperdiet nec.Vestibulum vitae venenatis velit, et posuere sapien. Aliquam ullamcorper vestibulum sapien, sed pellentesque dolor imperdiet nec.Vestibulum vitae venenatis velit, et posuere sapien. Aliquam ullamcorper vestibulum sapien, sed pellentesque dolor imperdiet nec.Vestibulum vitae venenatis velit, et posuere sapien. Aliquam ullamcorper vestibulum sapien, sed pellentesque dolor imperdiet nec.
            </li>
            <li class="this_is_the_base">
              Vestibulum vitae venenatis velit, et posuere sapien. Aliquam ullamcorper vestibulum sapien, sed pellentesque dolor imperdiet nec.Vestibulum vitae venenatis velit, et posuere sapien. Aliquam ullamcorper vestibulum sapien, sed pellentesque dolor imperdiet nec.Vestibulum vitae venenatis velit, et posuere sapien. Aliquam ullamcorper vestibulum sapien, sed pellentesque dolor imperdiet nec.Vestibulum vitae venenatis velit, et posuere sapien. Aliquam ullamcorper vestibulum sapien, sed pellentesque dolor imperdiet nec.Vestibulum vitae venenatis velit, et posuere sapien. Aliquam ullamcorper vestibulum sapien, sed pellentesque dolor imperdiet nec.
            </li>
          </ul>
        </div>
        <div class="modal-footer">
          <div class="modal-footer-content">
            <ul>
              <li>
                <img src="images/God_Of_TGK.png" alt="">
              </li>
            </ul>
            <div class="moda-footer-block">
              <h1>KRONUS</h1>
              <h2>Leader of the group</h2>
              <p>Мы любим животных и стараемся поддерживать тех из них, кому не посчастливилось иметь ласковых хозяев и тёплый кров. Один из проверенных способов это сделать — помочь благотворительному фонду <a href="https://luchdobrafound.ru/">«Луч Добра»</a>. Благодаря их труду ежегодно сотни питомцев находят свой новый дом.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div id="openModal_2" class="modal">
    <div class="modal-dialog">
      <a href="#close" title="Close" class="close">×</a>
      <div class="modal-content">
        <div class="modal-header">
        </div>
        <div class="modal-body">
          <ul>
            <li class="date">12.07.2023</li>
            <li class="title">RELEASE OF KRONUS ETERNITY</li>
            <li class="this_is_the_base">Vestibulum vitae venenatis velit, et posuere sapien. Aliquam ullamcorper vestibulum sapien, sed pellentesque dolor imperdiet nec.</li>
            <li class="this_is_the_base"><b>Vitae venenatis</b></li>
            <li class="this_is_the_base">
              Vestibulum vitae venenatis velit, et posuere sapien. Aliquam ullamcorper vestibulum sapien, sed pellentesque dolor imperdiet nec.Vestibulum vitae venenatis velit, et posuere sapien. Aliquam ullamcorper vestibulum sapien, sed pellentesque dolor imperdiet nec.Vestibulum vitae venenatis velit, et posuere sapien. Aliquam ullamcorper vestibulum sapien, sed pellentesque dolor imperdiet nec.Vestibulum vitae venenatis velit, et posuere sapien. Aliquam ullamcorper vestibulum sapien, sed pellentesque dolor imperdiet nec.Vestibulum vitae venenatis velit, et posuere sapien. Aliquam ullamcorper vestibulum sapien, sed pellentesque dolor imperdiet nec.
            </li>
            <li class="this_is_the_base">
              Vestibulum vitae venenatis velit, et posuere sapien. Aliquam ullamcorper vestibulum sapien, sed pellentesque dolor imperdiet nec.Vestibulum vitae venenatis velit, et posuere sapien. Aliquam ullamcorper vestibulum sapien, sed pellentesque dolor imperdiet nec.Vestibulum vitae venenatis velit, et posuere sapien. Aliquam ullamcorper vestibulum sapien, sed pellentesque dolor imperdiet nec.Vestibulum vitae venenatis velit, et posuere sapien. Aliquam ullamcorper vestibulum sapien, sed pellentesque dolor imperdiet nec.Vestibulum vitae venenatis velit, et posuere sapien. Aliquam ullamcorper vestibulum sapien, sed pellentesque dolor imperdiet nec.
            </li>
            <li class="this_is_the_base_light">
              Vestibulum vitae venenatis velit, et posuere sapien. Aliquam ullamcorper vestibulum sapien, sed pellentesque dolor imperdiet nec.Vestibulum vitae venenatis velit, et posuere sapien. Aliquam ullamcorper vestibulum sapien, sed pellentesque dolor imperdiet nec.
            </li>
            <li class="this_is_the_base">
              Vestibulum vitae venenatis velit, et posuere sapien. Aliquam ullamcorper vestibulum sapien, sed pellentesque dolor imperdiet nec.Vestibulum vitae venenatis velit, et posuere sapien. Aliquam ullamcorper vestibulum sapien, sed pellentesque dolor imperdiet nec.Vestibulum vitae venenatis velit, et posuere sapien. Aliquam ullamcorper vestibulum sapien, sed pellentesque dolor imperdiet nec.Vestibulum vitae venenatis velit, et posuere sapien. Aliquam ullamcorper vestibulum sapien, sed pellentesque dolor imperdiet nec.Vestibulum vitae venenatis velit, et posuere sapien. Aliquam ullamcorper vestibulum sapien, sed pellentesque dolor imperdiet nec.
            </li>
            <li class="this_is_the_base">
              Vestibulum vitae venenatis velit, et posuere sapien. Aliquam ullamcorper vestibulum sapien, sed pellentesque dolor imperdiet nec.Vestibulum vitae venenatis velit, et posuere sapien. Aliquam ullamcorper vestibulum sapien, sed pellentesque dolor imperdiet nec.Vestibulum vitae venenatis velit, et posuere sapien. Aliquam ullamcorper vestibulum sapien, sed pellentesque dolor imperdiet nec.Vestibulum vitae venenatis velit, et posuere sapien. Aliquam ullamcorper vestibulum sapien, sed pellentesque dolor imperdiet nec.Vestibulum vitae venenatis velit, et posuere sapien. Aliquam ullamcorper vestibulum sapien, sed pellentesque dolor imperdiet nec.
            </li>
          </ul>
        </div>
        <div class="modal-footer">
          <div class="modal-footer-content">
            <ul>
              <li>
                <img src="images/God_Of_TGK.png" alt="">
              </li>
            </ul>
            <div class="moda-footer-block">
              <h1>KRONUS</h1>
              <h2>Leader of the group</h2>
              <p>Мы любим животных и стараемся поддерживать тех из них, кому не посчастливилось иметь ласковых хозяев и тёплый кров. Один из проверенных способов это сделать — помочь благотворительному фонду <a href="https://luchdobrafound.ru/">«Луч Добра»</a>. Благодаря их труду ежегодно сотни питомцев находят свой новый дом.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div id="openModal_3" class="modal">
    <div class="modal-dialog">
      <a href="#close" title="Close" class="close">×</a>
      <div class="modal-content">
        <div class="modal-header">
        </div>
        <div class="modal-body">
          <ul>
            <li class="date">12.07.2023</li>
            <li class="title">RELEASE OF KRONUS ETERNITY</li>
            <li class="this_is_the_base">Vestibulum vitae venenatis velit, et posuere sapien. Aliquam ullamcorper vestibulum sapien, sed pellentesque dolor imperdiet nec.</li>
            <li class="this_is_the_base"><b>Vitae venenatis</b></li>
            <li class="this_is_the_base">
              Vestibulum vitae venenatis velit, et posuere sapien. Aliquam ullamcorper vestibulum sapien, sed pellentesque dolor imperdiet nec.Vestibulum vitae venenatis velit, et posuere sapien. Aliquam ullamcorper vestibulum sapien, sed pellentesque dolor imperdiet nec.Vestibulum vitae venenatis velit, et posuere sapien. Aliquam ullamcorper vestibulum sapien, sed pellentesque dolor imperdiet nec.Vestibulum vitae venenatis velit, et posuere sapien. Aliquam ullamcorper vestibulum sapien, sed pellentesque dolor imperdiet nec.Vestibulum vitae venenatis velit, et posuere sapien. Aliquam ullamcorper vestibulum sapien, sed pellentesque dolor imperdiet nec.
            </li>
            <li class="this_is_the_base">
              Vestibulum vitae venenatis velit, et posuere sapien. Aliquam ullamcorper vestibulum sapien, sed pellentesque dolor imperdiet nec.Vestibulum vitae venenatis velit, et posuere sapien. Aliquam ullamcorper vestibulum sapien, sed pellentesque dolor imperdiet nec.Vestibulum vitae venenatis velit, et posuere sapien. Aliquam ullamcorper vestibulum sapien, sed pellentesque dolor imperdiet nec.Vestibulum vitae venenatis velit, et posuere sapien. Aliquam ullamcorper vestibulum sapien, sed pellentesque dolor imperdiet nec.Vestibulum vitae venenatis velit, et posuere sapien. Aliquam ullamcorper vestibulum sapien, sed pellentesque dolor imperdiet nec.
            </li>
            <li class="this_is_the_base_light">
              Vestibulum vitae venenatis velit, et posuere sapien. Aliquam ullamcorper vestibulum sapien, sed pellentesque dolor imperdiet nec.Vestibulum vitae venenatis velit, et posuere sapien. Aliquam ullamcorper vestibulum sapien, sed pellentesque dolor imperdiet nec.
            </li>
            <li class="this_is_the_base">
              Vestibulum vitae venenatis velit, et posuere sapien. Aliquam ullamcorper vestibulum sapien, sed pellentesque dolor imperdiet nec.Vestibulum vitae venenatis velit, et posuere sapien. Aliquam ullamcorper vestibulum sapien, sed pellentesque dolor imperdiet nec.Vestibulum vitae venenatis velit, et posuere sapien. Aliquam ullamcorper vestibulum sapien, sed pellentesque dolor imperdiet nec.Vestibulum vitae venenatis velit, et posuere sapien. Aliquam ullamcorper vestibulum sapien, sed pellentesque dolor imperdiet nec.Vestibulum vitae venenatis velit, et posuere sapien. Aliquam ullamcorper vestibulum sapien, sed pellentesque dolor imperdiet nec.
            </li>
            <li class="this_is_the_base">
              Vestibulum vitae venenatis velit, et posuere sapien. Aliquam ullamcorper vestibulum sapien, sed pellentesque dolor imperdiet nec.Vestibulum vitae venenatis velit, et posuere sapien. Aliquam ullamcorper vestibulum sapien, sed pellentesque dolor imperdiet nec.Vestibulum vitae venenatis velit, et posuere sapien. Aliquam ullamcorper vestibulum sapien, sed pellentesque dolor imperdiet nec.Vestibulum vitae venenatis velit, et posuere sapien. Aliquam ullamcorper vestibulum sapien, sed pellentesque dolor imperdiet nec.Vestibulum vitae venenatis velit, et posuere sapien. Aliquam ullamcorper vestibulum sapien, sed pellentesque dolor imperdiet nec.
            </li>
          </ul>
        </div>
        <div class="modal-footer">
          <div class="modal-footer-content">
            <ul>
              <li>
                <img src="images/God_Of_TGK.png" alt="">
              </li>
            </ul>
            <div class="moda-footer-block">
              <h1>KRONUS</h1>
              <h2>Leader of the group</h2>
              <p>Мы любим животных и стараемся поддерживать тех из них, кому не посчастливилось иметь ласковых хозяев и тёплый кров. Один из проверенных способов это сделать — помочь благотворительному фонду <a href="https://luchdobrafound.ru/">«Луч Добра»</a>. Благодаря их труду ежегодно сотни питомцев находят свой новый дом.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div id="openModal_4" class="modal">
    <div class="modal-dialog">
      <a href="#close" title="Close" class="close">×</a>
      <div class="modal-content">
        <div class="modal-header">
        </div>
        <div class="modal-body">
          <ul>
            <li class="date">12.07.2023</li>
            <li class="title">RELEASE OF KRONUS ETERNITY</li>
            <li class="this_is_the_base">Vestibulum vitae venenatis velit, et posuere sapien. Aliquam ullamcorper vestibulum sapien, sed pellentesque dolor imperdiet nec.</li>
            <li class="this_is_the_base"><b>Vitae venenatis</b></li>
            <li class="this_is_the_base">
              Vestibulum vitae venenatis velit, et posuere sapien. Aliquam ullamcorper vestibulum sapien, sed pellentesque dolor imperdiet nec.Vestibulum vitae venenatis velit, et posuere sapien. Aliquam ullamcorper vestibulum sapien, sed pellentesque dolor imperdiet nec.Vestibulum vitae venenatis velit, et posuere sapien. Aliquam ullamcorper vestibulum sapien, sed pellentesque dolor imperdiet nec.Vestibulum vitae venenatis velit, et posuere sapien. Aliquam ullamcorper vestibulum sapien, sed pellentesque dolor imperdiet nec.Vestibulum vitae venenatis velit, et posuere sapien. Aliquam ullamcorper vestibulum sapien, sed pellentesque dolor imperdiet nec.
            </li>
            <li class="this_is_the_base">
              Vestibulum vitae venenatis velit, et posuere sapien. Aliquam ullamcorper vestibulum sapien, sed pellentesque dolor imperdiet nec.Vestibulum vitae venenatis velit, et posuere sapien. Aliquam ullamcorper vestibulum sapien, sed pellentesque dolor imperdiet nec.Vestibulum vitae venenatis velit, et posuere sapien. Aliquam ullamcorper vestibulum sapien, sed pellentesque dolor imperdiet nec.Vestibulum vitae venenatis velit, et posuere sapien. Aliquam ullamcorper vestibulum sapien, sed pellentesque dolor imperdiet nec.Vestibulum vitae venenatis velit, et posuere sapien. Aliquam ullamcorper vestibulum sapien, sed pellentesque dolor imperdiet nec.
            </li>
            <li class="this_is_the_base_light">
              Vestibulum vitae venenatis velit, et posuere sapien. Aliquam ullamcorper vestibulum sapien, sed pellentesque dolor imperdiet nec.Vestibulum vitae venenatis velit, et posuere sapien. Aliquam ullamcorper vestibulum sapien, sed pellentesque dolor imperdiet nec.
            </li>
            <li class="this_is_the_base">
              Vestibulum vitae venenatis velit, et posuere sapien. Aliquam ullamcorper vestibulum sapien, sed pellentesque dolor imperdiet nec.Vestibulum vitae venenatis velit, et posuere sapien. Aliquam ullamcorper vestibulum sapien, sed pellentesque dolor imperdiet nec.Vestibulum vitae venenatis velit, et posuere sapien. Aliquam ullamcorper vestibulum sapien, sed pellentesque dolor imperdiet nec.Vestibulum vitae venenatis velit, et posuere sapien. Aliquam ullamcorper vestibulum sapien, sed pellentesque dolor imperdiet nec.Vestibulum vitae venenatis velit, et posuere sapien. Aliquam ullamcorper vestibulum sapien, sed pellentesque dolor imperdiet nec.
            </li>
            <li class="this_is_the_base">
              Vestibulum vitae venenatis velit, et posuere sapien. Aliquam ullamcorper vestibulum sapien, sed pellentesque dolor imperdiet nec.Vestibulum vitae venenatis velit, et posuere sapien. Aliquam ullamcorper vestibulum sapien, sed pellentesque dolor imperdiet nec.Vestibulum vitae venenatis velit, et posuere sapien. Aliquam ullamcorper vestibulum sapien, sed pellentesque dolor imperdiet nec.Vestibulum vitae venenatis velit, et posuere sapien. Aliquam ullamcorper vestibulum sapien, sed pellentesque dolor imperdiet nec.Vestibulum vitae venenatis velit, et posuere sapien. Aliquam ullamcorper vestibulum sapien, sed pellentesque dolor imperdiet nec.
            </li>
          </ul>
        </div>
        <div class="modal-footer">
          <div class="modal-footer-content">
            <ul>
              <li>
                <img src="images/God_Of_TGK.png" alt="">
              </li>
            </ul>
            <div class="moda-footer-block">
              <h1>KRONUS</h1>
              <h2>Leader of the group</h2>
              <p>Мы любим животных и стараемся поддерживать тех из них, кому не посчастливилось иметь ласковых хозяев и тёплый кров. Один из проверенных способов это сделать — помочь благотворительному фонду <a href="https://luchdobrafound.ru/">«Луч Добра»</a>. Благодаря их труду ежегодно сотни питомцев находят свой новый дом.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div id="openModal_5" class="modal">
    <div class="modal-dialog">
      <a href="#close" title="Close" class="close">×</a>
      <div class="modal-content">
        <div class="modal-header">
        </div>
        <div class="modal-body">
          <ul>
            <li class="date">12.07.2023</li>
            <li class="title">RELEASE OF KRONUS ETERNITY</li>
            <li class="this_is_the_base">Vestibulum vitae venenatis velit, et posuere sapien. Aliquam ullamcorper vestibulum sapien, sed pellentesque dolor imperdiet nec.</li>
            <li class="this_is_the_base"><b>Vitae venenatis</b></li>
            <li class="this_is_the_base">
              Vestibulum vitae venenatis velit, et posuere sapien. Aliquam ullamcorper vestibulum sapien, sed pellentesque dolor imperdiet nec.Vestibulum vitae venenatis velit, et posuere sapien. Aliquam ullamcorper vestibulum sapien, sed pellentesque dolor imperdiet nec.Vestibulum vitae venenatis velit, et posuere sapien. Aliquam ullamcorper vestibulum sapien, sed pellentesque dolor imperdiet nec.Vestibulum vitae venenatis velit, et posuere sapien. Aliquam ullamcorper vestibulum sapien, sed pellentesque dolor imperdiet nec.Vestibulum vitae venenatis velit, et posuere sapien. Aliquam ullamcorper vestibulum sapien, sed pellentesque dolor imperdiet nec.
            </li>
            <li class="this_is_the_base">
              Vestibulum vitae venenatis velit, et posuere sapien. Aliquam ullamcorper vestibulum sapien, sed pellentesque dolor imperdiet nec.Vestibulum vitae venenatis velit, et posuere sapien. Aliquam ullamcorper vestibulum sapien, sed pellentesque dolor imperdiet nec.Vestibulum vitae venenatis velit, et posuere sapien. Aliquam ullamcorper vestibulum sapien, sed pellentesque dolor imperdiet nec.Vestibulum vitae venenatis velit, et posuere sapien. Aliquam ullamcorper vestibulum sapien, sed pellentesque dolor imperdiet nec.Vestibulum vitae venenatis velit, et posuere sapien. Aliquam ullamcorper vestibulum sapien, sed pellentesque dolor imperdiet nec.
            </li>
            <li class="this_is_the_base_light">
              Vestibulum vitae venenatis velit, et posuere sapien. Aliquam ullamcorper vestibulum sapien, sed pellentesque dolor imperdiet nec.Vestibulum vitae venenatis velit, et posuere sapien. Aliquam ullamcorper vestibulum sapien, sed pellentesque dolor imperdiet nec.
            </li>
            <li class="this_is_the_base">
              Vestibulum vitae venenatis velit, et posuere sapien. Aliquam ullamcorper vestibulum sapien, sed pellentesque dolor imperdiet nec.Vestibulum vitae venenatis velit, et posuere sapien. Aliquam ullamcorper vestibulum sapien, sed pellentesque dolor imperdiet nec.Vestibulum vitae venenatis velit, et posuere sapien. Aliquam ullamcorper vestibulum sapien, sed pellentesque dolor imperdiet nec.Vestibulum vitae venenatis velit, et posuere sapien. Aliquam ullamcorper vestibulum sapien, sed pellentesque dolor imperdiet nec.Vestibulum vitae venenatis velit, et posuere sapien. Aliquam ullamcorper vestibulum sapien, sed pellentesque dolor imperdiet nec.
            </li>
            <li class="this_is_the_base">
              Vestibulum vitae venenatis velit, et posuere sapien. Aliquam ullamcorper vestibulum sapien, sed pellentesque dolor imperdiet nec.Vestibulum vitae venenatis velit, et posuere sapien. Aliquam ullamcorper vestibulum sapien, sed pellentesque dolor imperdiet nec.Vestibulum vitae venenatis velit, et posuere sapien. Aliquam ullamcorper vestibulum sapien, sed pellentesque dolor imperdiet nec.Vestibulum vitae venenatis velit, et posuere sapien. Aliquam ullamcorper vestibulum sapien, sed pellentesque dolor imperdiet nec.Vestibulum vitae venenatis velit, et posuere sapien. Aliquam ullamcorper vestibulum sapien, sed pellentesque dolor imperdiet nec.
            </li>
          </ul>
        </div>
        <div class="modal-footer">
          <div class="modal-footer-content">
            <ul>
              <li>
                <img src="images/God_Of_TGK.png" alt="">
              </li>
            </ul>
            <div class="moda-footer-block">
              <h1>KRONUS</h1>
              <h2>Leader of the group</h2>
              <p>Мы любим животных и стараемся поддерживать тех из них, кому не посчастливилось иметь ласковых хозяев и тёплый кров. Один из проверенных способов это сделать — помочь благотворительному фонду <a href="https://luchdobrafound.ru/">«Луч Добра»</a>. Благодаря их труду ежегодно сотни питомцев находят свой новый дом.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div id="openModal_6" class="modal">
    <div class="modal-dialog">
      <a href="#close" title="Close" class="close">×</a>
      <div class="modal-content">
        <div class="modal-header">
        </div>
        <div class="modal-body">
          <ul>
            <li class="date">12.07.2023</li>
            <li class="title">RELEASE OF KRONUS ETERNITY</li>
            <li class="this_is_the_base">Vestibulum vitae venenatis velit, et posuere sapien. Aliquam ullamcorper vestibulum sapien, sed pellentesque dolor imperdiet nec.</li>
            <li class="this_is_the_base"><b>Vitae venenatis</b></li>
            <li class="this_is_the_base">
              Vestibulum vitae venenatis velit, et posuere sapien. Aliquam ullamcorper vestibulum sapien, sed pellentesque dolor imperdiet nec.Vestibulum vitae venenatis velit, et posuere sapien. Aliquam ullamcorper vestibulum sapien, sed pellentesque dolor imperdiet nec.Vestibulum vitae venenatis velit, et posuere sapien. Aliquam ullamcorper vestibulum sapien, sed pellentesque dolor imperdiet nec.Vestibulum vitae venenatis velit, et posuere sapien. Aliquam ullamcorper vestibulum sapien, sed pellentesque dolor imperdiet nec.Vestibulum vitae venenatis velit, et posuere sapien. Aliquam ullamcorper vestibulum sapien, sed pellentesque dolor imperdiet nec.
            </li>
            <li class="this_is_the_base">
              Vestibulum vitae venenatis velit, et posuere sapien. Aliquam ullamcorper vestibulum sapien, sed pellentesque dolor imperdiet nec.Vestibulum vitae venenatis velit, et posuere sapien. Aliquam ullamcorper vestibulum sapien, sed pellentesque dolor imperdiet nec.Vestibulum vitae venenatis velit, et posuere sapien. Aliquam ullamcorper vestibulum sapien, sed pellentesque dolor imperdiet nec.Vestibulum vitae venenatis velit, et posuere sapien. Aliquam ullamcorper vestibulum sapien, sed pellentesque dolor imperdiet nec.Vestibulum vitae venenatis velit, et posuere sapien. Aliquam ullamcorper vestibulum sapien, sed pellentesque dolor imperdiet nec.
            </li>
            <li class="this_is_the_base_light">
              Vestibulum vitae venenatis velit, et posuere sapien. Aliquam ullamcorper vestibulum sapien, sed pellentesque dolor imperdiet nec.Vestibulum vitae venenatis velit, et posuere sapien. Aliquam ullamcorper vestibulum sapien, sed pellentesque dolor imperdiet nec.
            </li>
            <li class="this_is_the_base">
              Vestibulum vitae venenatis velit, et posuere sapien. Aliquam ullamcorper vestibulum sapien, sed pellentesque dolor imperdiet nec.Vestibulum vitae venenatis velit, et posuere sapien. Aliquam ullamcorper vestibulum sapien, sed pellentesque dolor imperdiet nec.Vestibulum vitae venenatis velit, et posuere sapien. Aliquam ullamcorper vestibulum sapien, sed pellentesque dolor imperdiet nec.Vestibulum vitae venenatis velit, et posuere sapien. Aliquam ullamcorper vestibulum sapien, sed pellentesque dolor imperdiet nec.Vestibulum vitae venenatis velit, et posuere sapien. Aliquam ullamcorper vestibulum sapien, sed pellentesque dolor imperdiet nec.
            </li>
            <li class="this_is_the_base">
              Vestibulum vitae venenatis velit, et posuere sapien. Aliquam ullamcorper vestibulum sapien, sed pellentesque dolor imperdiet nec.Vestibulum vitae venenatis velit, et posuere sapien. Aliquam ullamcorper vestibulum sapien, sed pellentesque dolor imperdiet nec.Vestibulum vitae venenatis velit, et posuere sapien. Aliquam ullamcorper vestibulum sapien, sed pellentesque dolor imperdiet nec.Vestibulum vitae venenatis velit, et posuere sapien. Aliquam ullamcorper vestibulum sapien, sed pellentesque dolor imperdiet nec.Vestibulum vitae venenatis velit, et posuere sapien. Aliquam ullamcorper vestibulum sapien, sed pellentesque dolor imperdiet nec.
            </li>
          </ul>
        </div>
        <div class="modal-footer">
          <div class="modal-footer-content">
            <ul>
              <li>
                <img src="images/God_Of_TGK.png" alt="">
              </li>
            </ul>
            <div class="moda-footer-block">
              <h1>KRONUS</h1>
              <h2>Leader of the group</h2>
              <p>Мы любим животных и стараемся поддерживать тех из них, кому не посчастливилось иметь ласковых хозяев и тёплый кров. Один из проверенных способов это сделать — помочь благотворительному фонду <a href="https://luchdobrafound.ru/">«Луч Добра»</a>. Благодаря их труду ежегодно сотни питомцев находят свой новый дом.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div id="openModal_7" class="modal">
    <div class="modal-dialog">
      <a href="#close" title="Close" class="close">×</a>
      <div class="modal-content">
        <div class="modal-header">
        </div>
        <div class="modal-body">
          <ul>
            <li class="date">12.07.2023</li>
            <li class="title">RELEASE OF KRONUS ETERNITY</li>
            <li class="this_is_the_base">Vestibulum vitae venenatis velit, et posuere sapien. Aliquam ullamcorper vestibulum sapien, sed pellentesque dolor imperdiet nec.</li>
            <li class="this_is_the_base"><b>Vitae venenatis</b></li>
            <li class="this_is_the_base">
              Vestibulum vitae venenatis velit, et posuere sapien. Aliquam ullamcorper vestibulum sapien, sed pellentesque dolor imperdiet nec.Vestibulum vitae venenatis velit, et posuere sapien. Aliquam ullamcorper vestibulum sapien, sed pellentesque dolor imperdiet nec.Vestibulum vitae venenatis velit, et posuere sapien. Aliquam ullamcorper vestibulum sapien, sed pellentesque dolor imperdiet nec.Vestibulum vitae venenatis velit, et posuere sapien. Aliquam ullamcorper vestibulum sapien, sed pellentesque dolor imperdiet nec.Vestibulum vitae venenatis velit, et posuere sapien. Aliquam ullamcorper vestibulum sapien, sed pellentesque dolor imperdiet nec.
            </li>
            <li class="this_is_the_base">
              Vestibulum vitae venenatis velit, et posuere sapien. Aliquam ullamcorper vestibulum sapien, sed pellentesque dolor imperdiet nec.Vestibulum vitae venenatis velit, et posuere sapien. Aliquam ullamcorper vestibulum sapien, sed pellentesque dolor imperdiet nec.Vestibulum vitae venenatis velit, et posuere sapien. Aliquam ullamcorper vestibulum sapien, sed pellentesque dolor imperdiet nec.Vestibulum vitae venenatis velit, et posuere sapien. Aliquam ullamcorper vestibulum sapien, sed pellentesque dolor imperdiet nec.Vestibulum vitae venenatis velit, et posuere sapien. Aliquam ullamcorper vestibulum sapien, sed pellentesque dolor imperdiet nec.
            </li>
            <li class="this_is_the_base_light">
              Vestibulum vitae venenatis velit, et posuere sapien. Aliquam ullamcorper vestibulum sapien, sed pellentesque dolor imperdiet nec.Vestibulum vitae venenatis velit, et posuere sapien. Aliquam ullamcorper vestibulum sapien, sed pellentesque dolor imperdiet nec.
            </li>
            <li class="this_is_the_base">
              Vestibulum vitae venenatis velit, et posuere sapien. Aliquam ullamcorper vestibulum sapien, sed pellentesque dolor imperdiet nec.Vestibulum vitae venenatis velit, et posuere sapien. Aliquam ullamcorper vestibulum sapien, sed pellentesque dolor imperdiet nec.Vestibulum vitae venenatis velit, et posuere sapien. Aliquam ullamcorper vestibulum sapien, sed pellentesque dolor imperdiet nec.Vestibulum vitae venenatis velit, et posuere sapien. Aliquam ullamcorper vestibulum sapien, sed pellentesque dolor imperdiet nec.Vestibulum vitae venenatis velit, et posuere sapien. Aliquam ullamcorper vestibulum sapien, sed pellentesque dolor imperdiet nec.
            </li>
            <li class="this_is_the_base">
              Vestibulum vitae venenatis velit, et posuere sapien. Aliquam ullamcorper vestibulum sapien, sed pellentesque dolor imperdiet nec.Vestibulum vitae venenatis velit, et posuere sapien. Aliquam ullamcorper vestibulum sapien, sed pellentesque dolor imperdiet nec.Vestibulum vitae venenatis velit, et posuere sapien. Aliquam ullamcorper vestibulum sapien, sed pellentesque dolor imperdiet nec.Vestibulum vitae venenatis velit, et posuere sapien. Aliquam ullamcorper vestibulum sapien, sed pellentesque dolor imperdiet nec.Vestibulum vitae venenatis velit, et posuere sapien. Aliquam ullamcorper vestibulum sapien, sed pellentesque dolor imperdiet nec.
            </li>
          </ul>
        </div>
        <div class="modal-footer">
          <div class="modal-footer-content">
            <ul>
              <li>
                <img src="images/God_Of_TGK.png" alt="">
              </li>
            </ul>
            <div class="moda-footer-block">
              <h1>KRONUS</h1>
              <h2>Leader of the group</h2>
              <p>Мы любим животных и стараемся поддерживать тех из них, кому не посчастливилось иметь ласковых хозяев и тёплый кров. Один из проверенных способов это сделать — помочь благотворительному фонду <a href="https://luchdobrafound.ru/">«Луч Добра»</a>. Благодаря их труду ежегодно сотни питомцев находят свой новый дом.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div id="openModal_8" class="modal">
    <div class="modal-dialog">
      <a href="#close" title="Close" class="close">×</a>
      <div class="modal-content">
        <div class="modal-header">
        </div>
        <div class="modal-body">
          <ul>
            <li class="date">12.07.2023</li>
            <li class="title">RELEASE OF KRONUS ETERNITY</li>
            <li class="this_is_the_base">Vestibulum vitae venenatis velit, et posuere sapien. Aliquam ullamcorper vestibulum sapien, sed pellentesque dolor imperdiet nec.</li>
            <li class="this_is_the_base"><b>Vitae venenatis</b></li>
            <li class="this_is_the_base">
              Vestibulum vitae venenatis velit, et posuere sapien. Aliquam ullamcorper vestibulum sapien, sed pellentesque dolor imperdiet nec.Vestibulum vitae venenatis velit, et posuere sapien. Aliquam ullamcorper vestibulum sapien, sed pellentesque dolor imperdiet nec.Vestibulum vitae venenatis velit, et posuere sapien. Aliquam ullamcorper vestibulum sapien, sed pellentesque dolor imperdiet nec.Vestibulum vitae venenatis velit, et posuere sapien. Aliquam ullamcorper vestibulum sapien, sed pellentesque dolor imperdiet nec.Vestibulum vitae venenatis velit, et posuere sapien. Aliquam ullamcorper vestibulum sapien, sed pellentesque dolor imperdiet nec.
            </li>
            <li class="this_is_the_base">
              Vestibulum vitae venenatis velit, et posuere sapien. Aliquam ullamcorper vestibulum sapien, sed pellentesque dolor imperdiet nec.Vestibulum vitae venenatis velit, et posuere sapien. Aliquam ullamcorper vestibulum sapien, sed pellentesque dolor imperdiet nec.Vestibulum vitae venenatis velit, et posuere sapien. Aliquam ullamcorper vestibulum sapien, sed pellentesque dolor imperdiet nec.Vestibulum vitae venenatis velit, et posuere sapien. Aliquam ullamcorper vestibulum sapien, sed pellentesque dolor imperdiet nec.Vestibulum vitae venenatis velit, et posuere sapien. Aliquam ullamcorper vestibulum sapien, sed pellentesque dolor imperdiet nec.
            </li>
            <li class="this_is_the_base_light">
              Vestibulum vitae venenatis velit, et posuere sapien. Aliquam ullamcorper vestibulum sapien, sed pellentesque dolor imperdiet nec.Vestibulum vitae venenatis velit, et posuere sapien. Aliquam ullamcorper vestibulum sapien, sed pellentesque dolor imperdiet nec.
            </li>
            <li class="this_is_the_base">
              Vestibulum vitae venenatis velit, et posuere sapien. Aliquam ullamcorper vestibulum sapien, sed pellentesque dolor imperdiet nec.Vestibulum vitae venenatis velit, et posuere sapien. Aliquam ullamcorper vestibulum sapien, sed pellentesque dolor imperdiet nec.Vestibulum vitae venenatis velit, et posuere sapien. Aliquam ullamcorper vestibulum sapien, sed pellentesque dolor imperdiet nec.Vestibulum vitae venenatis velit, et posuere sapien. Aliquam ullamcorper vestibulum sapien, sed pellentesque dolor imperdiet nec.Vestibulum vitae venenatis velit, et posuere sapien. Aliquam ullamcorper vestibulum sapien, sed pellentesque dolor imperdiet nec.
            </li>
            <li class="this_is_the_base">
              Vestibulum vitae venenatis velit, et posuere sapien. Aliquam ullamcorper vestibulum sapien, sed pellentesque dolor imperdiet nec.Vestibulum vitae venenatis velit, et posuere sapien. Aliquam ullamcorper vestibulum sapien, sed pellentesque dolor imperdiet nec.Vestibulum vitae venenatis velit, et posuere sapien. Aliquam ullamcorper vestibulum sapien, sed pellentesque dolor imperdiet nec.Vestibulum vitae venenatis velit, et posuere sapien. Aliquam ullamcorper vestibulum sapien, sed pellentesque dolor imperdiet nec.Vestibulum vitae venenatis velit, et posuere sapien. Aliquam ullamcorper vestibulum sapien, sed pellentesque dolor imperdiet nec.
            </li>
          </ul>
        </div>
        <div class="modal-footer">
          <div class="modal-footer-content">
            <ul>
              <li>
                <img src="images/God_Of_TGK.png" alt="">
              </li>
            </ul>
            <div class="moda-footer-block">
              <h1>KRONUS</h1>
              <h2>Leader of the group</h2>
              <p>Мы любим животных и стараемся поддерживать тех из них, кому не посчастливилось иметь ласковых хозяев и тёплый кров. Один из проверенных способов это сделать — помочь благотворительному фонду <a href="https://luchdobrafound.ru/">«Луч Добра»</a>. Благодаря их труду ежегодно сотни питомцев находят свой новый дом.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script src="script/scr.js"></script>
  <script src="script/theme.js"></script>
</body>

</html>