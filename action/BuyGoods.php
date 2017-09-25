<?php
//상품구입
  require_once "goodsAction.php";
  //입력한 값이 숫자인지 판단
  if(isset($_POST['inputNum']) && is_numeric($_POST['num'])){
    print "<script>alert('상품을 담았습니다.');</script>";
    $menu_num = $_POST['num'];
    $menu_name = $_POST['menu_name'];
    $menu_img = $_POST['menu_img'];
    $menu_price = $_POST['menu_price'];
    $goodsfunc = new goodsfunc();

    //재고를확인하고 업데이트 하는 함수
    $goodsfunc->updatebalance($menu_name,$menu_num);
    //담은 물품을 확인하는 메뉴
    $goodsfunc->savebuyhistory($menu_name,$menu_num,$menu_img,$menu_price);
    print "<script>history.go(-1);</script>";
  }else {
    print "<script>alert('숫자를 입력하세요');</script>";
    print "<script>history.go(-1);</script>";
  }

?>
