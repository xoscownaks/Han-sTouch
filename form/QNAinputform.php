<?php
//QNA글쓰기 
  session_start();
  require_once "../collectview/commonview.php";
  $v = new view();
  $v->StructureHeaderMenuInclude_up2();
    echo<<<INPUTFORM
    <h2>글 쓰기</h2>
    <form action="../action/SaveDataToQna.php" method="post">
      <table>
        <tr>
          <td>
            제목 :
          </td>
          <td>
            <input type="text" name="title" required><br>
          </td>
        </tr>
        <tr>
          <td>
            내용 :
          </td>
          <td>
              <textarea name="content" style="resize:none;" cols="70" rows="6"></textarea>
          </td>
        </tr>
      </table>
      <input type="button" onclick="history.go(-1)" value="뒤로가기">
      <input type="submit" value="글 쓰기">
    </form>
INPUTFORM;
  $v->StructureHeaderMenuInclude_down2();
?>
