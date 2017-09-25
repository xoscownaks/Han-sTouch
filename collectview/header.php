<!--가장 먼저 index부분에서 보여주는 header-->
<!--index에서 사용되어 index기준으로 같은위치에 src가 있으니 ./을 사용-->
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <style media="screen">
      input[type=submit]{
        padding: 3px 15px 3px 15px;
      }
      a{
          text-decoration:none;
      }
    </style>
  </head>
  <body>
    <div id="logo">
  <a href="./index.php">
    <img src="./src/logo.png"/>
  </a>
</div>
<div id="join">
<?php
  if(!isset($_SESSION['userid'])){
?>
  <a href="./form/join_form.php">
    <img src="./src/join.png"/>
  </a>
<?php
  }else{
    ?>
    <a href="form/showDetailBuygoods.php">
      메뉴확인
    </a>&nbsp;&nbsp;&nbsp;
    <a href="./form/inputNewGoods.php">
      상품추가
    </a>
<?php
  }
?>
</div>
<div id="login">
<?php
  if(!isset($_SESSION['userid'])){
?>
      <a href="./form/login_form.php">
        <img src="./src/login.png"/>
      </a>
<?php
} else{

      print $_SESSION['userid']."님 환영합니다.";?>
      <form action="action/logout.php" method="post">
        <input type="submit" name="logout" value="로그아웃">
      </form>
    <?php
    }
  ?>
</div>

  </body>
</html>
