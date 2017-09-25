<?php
  session_start();
  require_once '../DB/mydb.php';
  require_once "../collectview/commonview.php";
  try {
    $pdo = db_connect();
    $sql = "SELECT * FROM goods";
    $stt = $pdo->prepare($sql);
    $stt->execute();
    // menu_name varchar(100) NOT NULL,
  	// menu_img varchar(500) NOT NULL,
    // menu_price int NOT NULL,
  	// menu_balance int NOT NULL


  } catch (Exception $e) {
    $e->getMessage();
  }

  $v = new view();
  $v->StructureHeaderMenuInclude_up2();
  $row = $stt->fetchAll(PDO::FETCH_ASSOC);

print "<table border='1' width='800' >";
  for($basecount=0;$basecount<count($row);$basecount++)  {

      $menu_name = $row[$basecount]['menu_name'];

      //현재 페이지의 상대경로를 지정하여 이미지의 주소를 가져온다.
      $dir = "../";
      $img_path = $dir.$row[$basecount]['menu_img'];
      $img = $img_path;

      $menu_price = $row[$basecount]['menu_price'];
      $menu_balance = $row[$basecount]['menu_balance'];
      if($basecount == 0 || $basecount % 2 == 0){
        print "<tr>";
      }
            echo<<<GOODS
                <td width='300px' height='300px'>
                  <div>$menu_name</div>
                  <div><img src='$img' width='200px' height='200px'></div>
                  <div>가격 : $menu_price</div>
                  <a href='showDetailMenu.php?Mna=$menu_name'><input type='button' value='상세보기'></a>
                </td>
GOODS;
      if($basecount % 2 == 1){
        print "</tr>";
      }
}
print "</table>";
$v->StructureHeaderMenuInclude_down2();
?>
