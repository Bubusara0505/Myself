<?php
include "./layout/head.php";

$titil = "Home";?>



<div class="wrapper">
  <div class="okeyPost">
    <header class="header contaner">
      <a href="" class="logo">
        <img src="./assets/img/okeypost/Лого.svg" alt="">
      </a>
      <nav class="nav">
        <a class="nav-link" href="about">О Нас</a>
        <a class="nav-link" href="info">Информация</a>
        <a class="nav-link" href="#"><ion-icon name="person-outline"></ion-icon> Вход</a>
        <a class="nav-link contact" href="#">Связаться с нами</a>
      </nav>
      <div class="hamburger hamburger--spring">
        <div class="hamburger-box">
          <div class="hamburger-inner"></div>
        </div>
      </div>
    </header>
    <div class="order">
      <div class="order-info-block">
        <div class="order-info-block_content">
          <h1>Доставка товаров из Великобритании в Россию</h1>
          <p>Начните экономить до 80% на шопинге. Регистрируйтесь в OkeyPost, чтобы покупать со скидками в UK одежду, обувь, гаджеты известных брендов и безопасно отправлять вещи в Россию.</p>
          <button>Получить адрес в UK</button>
        </div>
        <div class="order-info-block_img">
          <img src="../assets/img/okeypost/Иллюстрация.png" alt="">
        </div>
      </div>
    </div>
    <div class="icons-block">
      <div class="icons-block-info">
        <img src="./assets/img/okeypost/icons/Иконка1.svg" alt="">
        <h2>Экономия до 70%</h2>
      </div>
      <div class="icons-block-info">
        <img src="./assets/img/okeypost/icons/Иконка2.svg" alt="">
        <h2>Только подлинная продукция</h2>
      </div>
      <div class="icons-block-info">
        <img src="./assets/img/okeypost/icons/Иконка3.svg" alt="">
        <h2>Оперативная доставка</h2>
      </div>
      <div class="icons-block-info">
        <img src="./assets/img/okeypost/icons/Иконка4.svg" alt="">
        <h2>Огромный выбор товаров</h2>
      </div>
    </div>
    <div class="tryIt">
      <div class="tryIt-block">
        <div class="tryIt-block_img">
          <img src="./assets/img/okeypost/Иллюстрация2.png" alt="">
        </div>
        <div class="tryIt-block_content">
          <h1>Поручите нашим мастерам шопинга оформить заказы в английских магазинах и освободите время для более важных дел.</h1>
          <p>Такой способ покупки также подойдёт, если магазин принимает только английские карты.</p>
          <button>Попробовать</button>
        </div>
      </div>
    </div>
    <div class="simple contaner">
      <div class="simple-block">
        <h1 class="simple-block_title">4 простых шага для ваших покупок в Великобритании </h1>
        <div class="simple-block_cards">
          <div class="simple-block_card">
            <img src="../assets/img/okeypost/simple/1.svg" alt="">
            <h1>вы ВЫБИРАЕТЕ ТОВАР</h1>
            <p>в английском магазине, оплачиваете и указываете адрес склада OkeyPost</p>
          </div>
          <div class="simple-block_card">
            <img src="./assets/img/okeypost/simple/2.svg" alt="">
            <h1>ПОКУПКИ ПРИХОДЯТ НА СКЛАД</h1>
            <p>и появляются в вашем личном кабинете на нашем сайте</p>
          </div>
          <div class="simple-block_card">
            <img src="./assets/img/okeypost/simple/3.svg" alt="">
            <h1>ОТПРАВЛЯЕМ ИХ К ВАМ ДОМОЙ</h1>
            <p>в надежной упаковке, по выгодной цене и очень быстро</p>
          </div>
          <div class="simple-block_card">
            <img src="./assets/img/okeypost/simple/4.svg" alt="">
            <h1>ЗАБИРАЕТЕ свою ПОСЫЛКУ</h1>
            <p>в пункте выдачи, на почте или с курьером</p>
          </div>
        </div>
        <div class="">
          <p class="simple-block_desc">Не хотите разбираться самостоятельно, наши мастера шопинга с радостью купят все товары за вас.</p>
          <button class="simple-block_btn">Быстрая покупка</button>
        </div>
      </div>
    </div>
    <div class="">

    </div>
    <!-- <div class="comment contaner">
      <h1 class="comment_title">Отзывы и цитаты блогеров:</h1>
      <div class="comment-cards">
        <div class="comment-card">
          <div class="comment-card_img">
              <img src="./assets/img/okeypost/comment/1.png" alt="">
            </div>
          <div class="">
            <div class="comment-card_top">
              <h1>NIKOLAY S</h1>
              <div class="comment-card_star">
                <ion-icon name="star"></ion-icon>
                <ion-icon name="star"></ion-icon>
                <ion-icon name="star"></ion-icon>
                <ion-icon name="star"></ion-icon>
                <ion-icon name="star"></ion-icon>
              </div>
              <p>Ваша доставка самая быстрая и дешёвая!!!</p>
            </div>
            <div class="comment-card_bottom">
              <h1>Дата:<span>16 Ноября 2021</span></h1>
              <h1>Город:<span>Санкт-Петербург</span></h1>
            </div>
          </div>
        </div>

        <div class="comment-card">
          <div class="comment-card_img">
              <img src="./assets/img/okeypost/comment/2.png" alt="">
            </div>
          <div class="">
            <div class="comment-card_top">
              <h1>DMITRIY D</h1>
              <div class="comment-card_star">
                <ion-icon name="star"></ion-icon>
                <ion-icon name="star"></ion-icon>
                <ion-icon name="star"></ion-icon>
                <ion-icon name="star"></ion-icon>
                <ion-icon name="star"></ion-icon>
              </div>
              <p>Пуховик Levi’s c eBay. Всё приехало быстро и целым.</p>
            </div>
            <div class="comment-card_bottom">
              <h1>Дата:<span>16 Ноября 2021</span></h1>
              <h1>Город:<span> Москва</span></h1>
            </div>
          </div>
        </div>

        <div class="comment-card">
          <div class="comment-card_img">
              <img src="./assets/img/okeypost/comment/3.png" alt="">
            </div>
          <div class="">
            <div class="comment-card_top">
              <h1>VLADIMIR E</h1>
              <div class="comment-card_star">
                <ion-icon name="star"></ion-icon>
                <ion-icon name="star"></ion-icon>
                <ion-icon name="star"></ion-icon>
                <ion-icon name="star"></ion-icon>
                <ion-icon name="star"></ion-icon>
              </div>
              <p>Огонь, как всегда! Отдельное спасибо за доп.упаковку, часики от Apple пришли в простом бумажном пакете <p>
            </div>
            <div class="comment-card_bottom">
              <h1>Дата:<span>16 Ноября 2021</span></h1>
              <h1>Город:<span>Санкт-Петербург</span></h1>
            </div>
          </div>
        </div>

        <div class="comment-card">
          <div class="comment-card_img">
              <img src="./assets/img/okeypost/comment/4.png" alt="">
            </div>
          <div class="">
            <div class="comment-card_top">
              <h1>Оксана</h1>
              <div class="comment-card_star">
                <ion-icon name="star"></ion-icon>
                <ion-icon name="star"></ion-icon>
                <ion-icon name="star"></ion-icon>
                <ion-icon name="star"></ion-icon>
                <ion-icon name="star"></ion-icon>
              </div>
              <p>Очень быстро, надежно! Как всегда большое спасибо за работу!</p>
            </div>
            <div class="comment-card_bottom">
              <h1>Дата:<span>16 Ноября 2021</span></h1>
              <h1>Город:<span>Odintsovo</span></h1>
            </div>
          </div>
        </div>
      </div>
    </div> -->
  </div>
</div>




<?include "./layout/foot.php";?>