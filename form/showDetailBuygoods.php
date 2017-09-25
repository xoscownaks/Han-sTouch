  <?php
    session_start();
      require_once "../DB/mydb.php";
      require_once "../collectview/commonview.php";

      $v = new view();
      $v->StructureHeaderMenuInclude_up2();
      try {

        $pdo = db_connect();
        $sql = "SELECT * FROM buyhistory WHERE buymenu_id=:id";
        $stt = $pdo->prepare($sql);
        $stt->bindValue(':id',$_SESSION['userid']);
        $stt->execute();
        $totalprice = 0;
        $buymenu_id = null;
        while ($row = $stt->fetch(PDO::FETCH_ASSOC)) {

          // buymenu_id varchar(20) NOT NULL,
          // buymenu_name varchar(100) NOT NULL,
          // buymenu_num int NOT NULL,
          // buymenu_date datetime NOT NULL,
          // buymenu_img varchar(500) NOT NULL,
          // buymenu_price int NOT NULL
          $buymenu_id = $row['buymenu_id'];
          $buymenu_name = $row['buymenu_name'];
          $dir = "../";
          $buymenu_img = $dir.$row['buymenu_img'];
          $buymenu_num = $row['buymenu_num'];
          $price = $row['buymenu_num'] * $row['buymenu_price'];
          $buymenu_date = $row['buymenu_date'];

          $totalprice = $totalprice + $price;

          echo<<<PRINTHISTORY
          <style>
            table{
              text-align: center;
            }
          </style>
          <table border="1">
            <tr>
              <th width="300px">이름</th>
              <th width="300px">상품</th>
              <th width="300px">수량</th>
              <th width="300px">가격</th>
              <th width="300px">담은시각</th>
            </tr>
            <tr>
              <td width="300px">$buymenu_name</td>
              <td width="300px"><img width="300px" height="200px" src="$buymenu_img"></td>
              <td width="300px">$buymenu_num</td>
              <td width="300px">$price</td>
              <td width="300px">$buymenu_date</td>
              <form action="../action/CancleGoods.php" method="post">
                <td width="200px">
                  <input type="submit" value="삭제">
                </td>
                <input type="hidden" name="menu_name" value=$buymenu_name>
                <input type="hidden" name="menu_num" value=$buymenu_num>
              </form>
            </tr>
          </table>
PRINTHISTORY;
        }

        echo<<<form
        총 구매 가격 : $totalprice
        <form action="../action/finallybuy.php" method="post">
          <input type="submit" value="구매하기">
          <input type="hidden" name="id" value=$buymenu_id>
        </form>
form;
      } catch (Exception $e) {
        $e->getMessage();
      }
      $v->StructureHeaderMenuInclude_down2();
?>
