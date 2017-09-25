<?php
  session_start();
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>한기 딜리버리</title>
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/indexcss.css">
  </head>
  <body>
    <div id="header">
      <?php
        require_once "collectview/header.php";
      ?>
    </div>
    <div id="menu">
      <?php
        require_once "collectview/menu.php";
      ?>
    </div>
    <div id="body">
      <?php
        require_once "collectview/body.php";
      ?>
    </div>
  </body>
</html>
