<?php
  session_start();
        require_once "../DB/mydb.php";
        require_once "../collectview/commonview.php";


        $v = new view();
        $v->StructureHeaderMenuInclude_up2();

        $Menu = $_GET['Mna'];
        //선택한 상품에대한 정보를 DB에서 가져온다.
        function DetailDB($Menu){
          try {
            $MenuName = $Menu;
            $pdo = db_connect();
            $sql = "SELECT * FROM goods WHERE menu_name = :menuname";
            $stt = $pdo->prepare($sql);
            $stt->bindValue(':menuname',$MenuName);
            $stt->execute();
            $row = $stt->fetch(PDO::FETCH_ASSOC);

          } catch (Exception $e) {
            $e->getMessage();
          }
          return $row;
        }
        // menu_name varchar(100) NOT NULL,
        // menu_img varchar(500) NOT NULL,
        // menu_price int NOT NULL,
        // menu_balance int NOT NULL,
        // menu_calorie varchar(100) NOT NULL,
        // menu_explain varchar(500)
          $row = DetailDB($Menu);
          $menu_name = $row['menu_name'];

          $dir = "../";
          $menu_img = $row['menu_img'];
          $img_path = $dir.$menu_img;

          $menu_price = $row['menu_price'];
          $menu_calorie = $row['menu_calorie'];
          $menu_explain = $row['menu_explain'];
          $menu_balance = $row['menu_balance'];

          echo<<<Detail
          <div>
            <div id="title">$menu_name</div>
            <div><img width="450px" height="300px" src="$img_path"></div>
            <div>가격 = $menu_price</div>
            <div>$menu_calorie</div>
            <div>$menu_explain</div>
            <div>현재 재고 = $menu_balance</div>
          </div>
          <form action="../action/BuyGoods.php" method="post">
            <input type="button" onclick="history.go(-1)" value="메뉴보기">
            수량 : <input type="text" name="num" placeholder="1">
            <input type="submit" name="inputNum" value="담기">
            <input type="hidden" name="menu_name" value="$menu_name">
            <input type="hidden" name="menu_img" value="$menu_img">
            <input type="hidden" name="menu_price" value="$menu_price">
          </form>
Detail;
$v->StructureHeaderMenuInclude_down2();
?>
