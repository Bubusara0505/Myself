<header class="header contaner">
  <a href="/" class="logo">
    <img src="./assets/img/okeypost/Лого.svg" alt="">
  </a>
  <nav class="nav">
    <a class="nav-link" href="about">О Нас</a>
    <a class="nav-link" href="info">Информация</a>
    

  <?if (isset($_SESSION['is_auth'])): ?>

    <a class="nav-link" href="profile">Профиль</a>
    <a class="nav-link" href="add-user">Добавить пользователя</a>
    <a class="nav-link" href="add-post">Добавить пост</a>

      <?php else: ?>
    <a class="nav-link" href="registr">Регистрация</a>
    <a class="nav-link" href="auth"><ion-icon name="person-outline"></ion-icon> Вход</a>

      <? endif; ?>
    <a class="nav-link contact" href="#">Связаться с нами</a>
  </nav>
    <div class="hamburger hamburger--spring">
      <div class="hamburger-box">
        <div class="hamburger-inner"></div>
      </div>
    </div>
    </header>

