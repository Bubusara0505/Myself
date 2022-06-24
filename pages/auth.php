<?php
require_once "./include/config.php";
require_once "./include/function.php";

$title = "аоаоо";
if (isset($_GET['logout'])) {
  session_destroy();
  redirect_to("/");
}

if (isset($_POST['auth'])) {
  $login = clear_field($_POST['name']);
  $password = clear_field($_POST['password']);

  $users = select_all_users('users');

  while ($user = mysqli_fetch_assoc($users)) {
    if ($user['name'] === $login) {
      if (password_verify($password, $user['password'])) {
        $_SESSION['is_auth'] = true;
        $_SESSION['name'] = $user['name'];
        $_SESSION['username'] = $user['username'];
        $_SESSION['email'] = $user['email'];
      }else{
        echo "Пароль не правельный";
      }
    }
  }

}

?>



<div class="wrapper">
  
  <?include "./layout/header.php";
  include "./layout/head.php";
  ?>

  <?if (!isset($_SESSION['is_auth'])) : ?>
<div class="Autorization contaner">
    <form action="<?= $_SERVER['REQUEST_URI']?>" method="post">
      <div class="Autorization">
          <div class="Auth-block">
            <label for="email"><br>Логин</br></label>
            <input type="text" placeholder="Enter Email" name="name" required>
          </div>

          <div class="Auth-block">
            <label for="psw"><br>Пароль</br></label>
            <input type="password" placeholder="Enter Password" name="password" required>
          </div>

          <div class="Auth-block">
            <button type="submit" name="auth">Войти</button>
          </div>
        </div>

    </form>
  </div>
</div>
<?else : ?>

<div class="contaner">
  <h3>Вы вошли как: <? echo($_SESSION['name']); ?></h3>
  <form action="<?=$_SERVER['REQUEST_URI'] ?>" method="get">
    <button type="submit" name="logout">Выйти</button>
  </form>
</div>


<? endif ?>

<?include "./layout/foot.php";?>