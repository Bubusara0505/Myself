<?php

  include "./include/config.php";
  include "./include/function.php";

  if (isset($_POST['create'])) {

    $name = clear_field($_POST['name']);
    $username = clear_field($_POST['username']);
    $email = clear_field($_POST['email']);
    $password = clear_field($_POST['password']);
    $hash_password = password_hash($password, PASSWORD_DEFAULT);

    $query = " INSERT INTO `users` (`name`, `username`, `email`, `password`, `role`) VALUES ('$name', '$username', '$email', '$hash_password', '3')";
    $result = mysqli_query($connect, $query);

    if (!$result) {
      echo  "Не получилось сделать запрос";
    }else{
      echo "Запрос выполнен";
    }
  }

?>

<div class="wrapper contaner">
<?
  include "./layout/head.php";
  include "./layout/header.php"; ?>

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