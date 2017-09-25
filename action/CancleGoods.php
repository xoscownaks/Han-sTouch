<?php
//구입한 상품을 취소
  require_once "goodsAction.php";

  $menuname = $_POST['menu_name'];
  $menunum =  $_POST['menu_num'];

  $goodsfunc = new goodsfunc();
  //재고량을 원래로 되돌리는 함수.
  $goodsfunc->backbalance($menuname, $menunum);
  //담은 물품을 제거
  $goodsfunc->deletehistory($menuname, $menunum);
  print "<script>history.go(-1)</script>";
?>
