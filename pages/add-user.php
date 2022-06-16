<?php
  include "./layout/head.php";
  include "./include/config.php";
  include "./include/function.php";
?>

<div class="wrapper">
  <div class="add-user contaner">
    <form action="<?= $_SERVER['REQUEST_URI']?>" method="post" enctype="multipart/form-data">
      <div class="add-user_block">
        <p>Логин</p>
        <input type="text" name="name" id="name" autocomplete="given-name">
      </div>
      <div class="add-user_block">
        <p>ФИО</p>
        <input type="text" name="username" id="username" autocomplete="family-name">
      </div>
      <div class="add-user_block">
        <p>Почта</p>
        <input type="email" name="email" id="email" autocomplete="email">
      </div>
      <div class="add-user_block">
        <p>Роли</p>
        <select name="role" id="name" autocomplete="role">
          <option value="" default disabled selected>Выберите роль</option>
          <option value="1">Администратор</option>
          <option value="2">Модератор</option>
          <option value="3">Пользователь</option>
        </select>
      </div>
      <div class="add-user_block">
        <p>Пароль</p>
        <input type="password" name="password" id="password">
      </div>
      <div class="add-user_block">
        <button type="submit" name="create">Создать</button>
      </div>
    </form>
  </div>
</div>

<?

include "./layout/foot.php";

?>