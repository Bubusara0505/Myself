<?php
include "./layout/head.php";
include "./include/config.php";
include "./include/function.php";
$title = "Главная"; 

  if (!isset($_SESSION['is_auth'])) {
    redirect_to("/");
  }

if (isset($_GET['logout'])) {
  session_destroy();
  redirect_to("/");
}
?>



<div class="wrapper">
  <div class="okeyPost">
    <?
    include "./layout/header.php";
    ?>
    
    <div class="contaner">
      <h3>Вы вошли как: <? echo($_SESSION['name']); ?></h3>
      <form action="<?=$_SERVER['REQUEST_URI'] ?>" method="get">
        <button type="submit" name="logout">Выйти</button>
      </form>
    </div>
  </div>
</div>




<?include "./layout/foot.php";?>