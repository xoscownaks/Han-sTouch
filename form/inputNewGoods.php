<?php
  session_start();
  require_once "../collectview/commonview.php";

  $view = new view();
  $view->StructureHeaderMenuInclude_up2();
  // menu_name varchar(100) NOT NULL,
  // menu_img varchar(500) NOT NULL,
  // menu_price int NOT NULL,
  // menu_balance int NOT NULL,
  // menu_calorie varchar(100) NOT NULL,
  // menu_explain varchar(500)
  echo<<<INPUT
  <h2>상품입력</h2>
  <form action="../action/InputNewGoods.php" method="post" enctype="multipart/form-data">
    <table border="1">
      <tr>
        <td>&nbsp;* 상품이름 : </td>
        <td><input type="text" name="menu_name" ></td>
      </tr>
      <tr>
        <td>&nbsp;* 사진선택 : </td>
        <td><input type="file" name="uploadfile"></td>
      </tr>
      <tr>
        <td>&nbsp;* 가격지정 :</td>
        <td><input type="text" name="menu_price"></td>
      </tr>
      <tr>
        <td>&nbsp;* 수량 : </td>
        <td><input type="text" name="menu_balance"></td>
      </tr>
      <tr>
        <td>&nbsp;* 칼로리(열량) : </td>
        <td><input type="text" name="menu_calorie"></td>
      </tr>
      <tr>
        <td>&nbsp;* 설명 : </td>
        <td><textarea style="resize:none;" name="menu_explain" cols="50" rows="5"></textarea></td>
      </tr>
    </table>
    <input type="reset" value="다시입력">
    <input type="submit" value="상품 등록">
  </form>
  ※ 사진파일 업로드시 허용하는 확장자 : 'jpeg', 'JPG', 'jpg', 'PNG', 'png'
INPUT;
  $view->StructureHeaderMenuInclude_down2();
?>
