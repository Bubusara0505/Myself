<?php

$title = "Добавить пользователя";

  include "./include/config.php";

  include "./include/function.php";

  if (isset($_POST['create'])) {

    $name = clear_field($_POST['name']);
    $username = clear_field($_POST['username']);
    $email = clear_field($_POST['email']);
    $password = clear_field($_POST['password']);
    $hash_password = password_hash($password, PASSWORD_DEFAULT);
    $role = (int) $_POST['role'];

    $cols = " (`name`,`username`, `email` , `password`, `role`)";

    $values = "('$name','$username', '$email', '$hash_password', '$role')";

    create_user_in_db('users', $cols, $values);

    
  }

  if (!isset($_SESSION['is_auth'])) {
    redirect_to("/");
  }

?>

<div class="wrapper">
<?
  include "./layout/head.php";
  include "./layout/header.php";?>

<div class="add-post contaner">
  <form action="<?= $_SERVER['REQUEST_URI'] ?>" method="post">
    <div class="Posts-title">
      <p>Заголовок</p>
      <input type="text" name="title">
    </div>
    <div class="Posts-little-desc">
      <p>Краткое описание</p>
      <input type="text" name="little-desc">
    </div>
    <div class="Posts-banners">
      <p>Вставить файл</p>
      <input name="image_url" type="file">
    </div>
    <div class="Posts-desc">
      <p>Полное описание</p>
      <textarea name="desc"></textarea>
    </div>
    <div class="">
      <button name="add-post">Добавить пост</button>
    </div>
  </form>
</div>

<?php
  include "./layout/foot.php";
