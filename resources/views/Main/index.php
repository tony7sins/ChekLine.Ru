<?php
// $title = "о нас";
$showcase = "main";
$pageHeader = "ООО \"Главчек\"";
$pageDesc = "Мы знаем всё о текущих потребностях наших клиентов и наиболее актуальных тенденциях рынка термобумаги.";
?>

<?php require_once VIEW . "/layouts/_pageHeader.php";?>

<section class="newsletter" id="newsletter">
  <div class="container">
    <div class="row">
      <h1>Получить обратную связь</h1>
      <form id="newsletter_form" class="" action="index.html" method="post">
        <input id="newsletter_input"type="email" placeholder="Введите Ваш Email">
        <button id="newsletter_buttom" type="submit" class="button_1">Вперед!</button>
      </form>
    </div>
  </div>
</section>

<section id="boxes" class="boxes">
  <div class="container">
    <div class="row">
      <div class="col-lg-4 box" id="box__1">
        <span class="fas fa-shopping-cart"></span>
        <h3>Сетевой и Крупный бизнес</h3>
        <p>Lorem Ipsum - это текст-"рыба", часто используемый в печати и вэб-дизайне. Lorem Ipsum является стандартной "рыбой" для текстов</p>
      </div>
      <div class="col-lg-4 box" id="box__2">
        <span class="fas fa-shopping-basket"></span>
        <h3>Средние / малые компании</h3>
        <p>Lorem Ipsum - это текст-"рыба", часто используемый в печати и вэб-дизайне. Lorem Ipsum является стандартной "рыбой" для текстов</p>
      </div>
      <div class="col-lg-4 box" id="box__3">
        <span class="fas fa-shopping-bag"></span>
        <h3>Индивидуальные поставки</h3>
        <p>Lorem Ipsum - это текст-"рыба", часто используемый в печати и вэб-дизайне. Lorem Ipsum является стандартной "рыбой" для текстов</p>
      </div>
    </div>
  </div>
</section>

<section class="gallery" id="gallery">
  <div class="container">
    <div class="row">
      <div class="gpic" id="gpic__1">
        <h3>Какое качество?</h3>
        <img class="" src="/assets/img/check_a.jpg" alt="" >
        <p class="descr">текстов Lorem спользуемыйой "рыбой" для текстов Lorem спользуемый в печат текстов Lorem спользуемыйой "рыбой" для текстов Lorem спользуемый в печат текстов Lorem спользуемыйой "рыбой" для текстов Lorem спользуемый в печат текстов Lorem спользуемыйой "рыбой" для текстов Lorem спользуемый в печати и вэб-дизайне. Lorem Ipsum является стандартной "рыбой" для текстов</p>
      </div>
      <div class="gpic" id="gpic__2">
        <h3>Быстро?</h3>
        <img class="" src="/assets/img/check_f.jpg" alt="">
        <p class="descr">Lorem спользуемый в печати и вэб-дизайне. Lorem Ipsum является стандартной "рыбой" для </p>
      </div>
      <div class="gpic" id="gpic__3">
        <h3>Выгодно?</h3>
        <img class="" src="/assets/img/check_b.jpg" alt="">
        <p class="descr">Lorem спользу "рыбой" для текстов</p>
      </div>
      <div class="gpic" id="gpic__4">
        <h3>Удобно?</h3>
        <img class="" src="/assets/img/check_c.jpg" alt="">
        <p class="descr">ьзуемый в печати и вэб-дизайне. Lorem Ipsum является стандартной "рыбой" для текстов Lorem спользуемый в печати и вэб-дизайне. Lorem Ipsum является стандартной "рыбой" для текстов S12354в</p>
      </div>
    </div>
  </div>
</section>
