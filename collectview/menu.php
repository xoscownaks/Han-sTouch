<!--index부분에서 보여주는 menu부분-->
<!--index에서 사용되어 index기준으로 같은위치에 src가 있으니 ./을 사용-->
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <!--<link rel="stylesheet" href="./css/menu.css">-->
    <script type="text/javascript">
      function check_logon(){
        alert('로그인 후 가능합니다.');
        return;
      }
    </script>
  </head>
  <body>
  <hr width="100%">
      <?php
        if(!isset($_SESSION['userid'])){
          ?>
          <div class="menus">
          <a href="#" onclick="check_logon()">
            <img src="./src/menu.png"/>
          </a>
          </div>
          <div class="menus">
            <a href="#" onclick="check_logon()">
              <img src="./src/board.png"/>
            </a>
          </div>
          <div class="menus">
            <a href="#" onclick="check_logon()">
              <img src="./src/QNA.png"/>
            </a>
          </div>
      <?php
        }else{
          ?>
          <div class="menus">
          <a href="form/show_goods.php">
            <img src="./src/menu.png"/>
          </a>
          </div>
          <div class="menus">
            <a href="form/boardform.php">
              <img src="./src/board.png"/>
            </a>
          </div>
          <div class="menus">
            <a href="./form/QNAform.php">
              <img src="./src/QNA.png"/>
            </a>
          </div>
      <?php
        }
      ?>
  <hr width="100%">
  </body>
</html>
