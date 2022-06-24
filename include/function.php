<?php

  function redirect_to($locate){
    header("Location: $locate");
  }

  function clear_field($field){
    return trim(htmlspecialchars($field));
  }

    function create_user_in_db($tables, $cols, $values){
      global $connect;

      $reguest = "INSERT INTO `$tables` $cols VALUES $values";

      $result = mysqli_query($connect, $reguest);
      return $result;

      if (!$result) {?>
        <h1>Не получилось сделать запрос</h1><?
      }else{?>
        <h1>Запрос успешно выполнен</h1><?
      }
    }

    function select_all_users($table){
      global $connect;

      $guery = "SELECT * FROM `{$table}`";
      $result = mysqli_query($connect, $guery);

      if (!$guery) {
        echo "Не получилось сдклать запрос";
      }
      return $result;
    }

    function select_all_admins($table, $role){
      global $connect;

      $guery = "SELECT * FROM `{$table}` WHERE role = 1";
      $result = mysqli_query($connect, $guery);

      if (!$result) {?>
        <div class="contaner">
          <p>Не получилось сделать запрос</p>
        </div><?
      }
      return $result;
    }

