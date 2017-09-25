<?php
  session_start();
  require_once "../collectview/commonview.php";
  $v = new view();
  $v->StructureHeaderMenuInclude_up2();
?>
      <link rel="stylesheet" href="../css/boardinputcss.css">
      <form action="../action/saveboard.php" method="post" enctype="multipart/form-data">
        <input type="hidden" name="MAX_FILE_SIZE" value="30000" />
      <table>
      <h3>게시판 글쓰기</h3>
      <tr>
        <td><label>Title</label></td>
       <td><input type="text" name="title" placeholder="제목입력"></td>
      </tr>
      <tr>
        <td><label>내용</label></td>
        <td><textarea style="resize:none;" name="content" placeholder="내용 입력" cols="60" rows="5"></textarea></td>
      </tr>
      <tr>
        <td><label>파일 선택</label></td>
        <td><input type="file" name="uploadfile" size="30" ></td>
      </tr>
      </table>
      </div>
        <br><br><br><br><br><br><br>
        <input type="button" onclick="history.go(-1)" value="뒤로가기">
        <input type="submit" name="save" value="저장하기">
      </form>
  </body>
<?php
  $v->StructureHeaderMenuInclude_down2();
?>
