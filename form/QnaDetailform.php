<?php
//QNA해당 글 클릭시 자세한 사항 보여주기
  require_once "../action/QNAAction.php";
  require_once "../collectview/commonview.php";

  $qnaaction  = new QNAAction();
  $view       = new view();

  $bno =  $_GET['bno'];
  $row = $qnaaction->showDetailQna($bno);
  $commentRow = $qnaaction->comment($bno);

  $title    = $row['qna_title'];
  $content  = $row['qna_content'];


  $view->StructureHeaderMenuInclude_up2();

  echo<<<FORM
  <h2>제목 : $title</h2>
  <div height="300px">
    $content
  </div>
  <input type="button" onclick="history.go(-1)" value="뒤로가기">
  <hr>
  <form action="../action/commentAction.php" method="post">
    <textarea name="comment_text" style="resize:none;" cols="60" rows="5" placeholder="댓글 입력"></textarea>
    <input type="submit" value="입력">
    <input type="hidden" name="qna_num" value=$bno>
    <div>
FORM;
// qna_num int NOT NULL,
// comment varchar(500) NOT NULL,
// comment_id varchar(50) NOT NULL,
// commnet_date datetime NOT NULL
    foreach($commentRow as $key){
      print "작성자:".($key['comment_id'])."\t";
      print "내용:".($key['comment'])."\t";
      print "작성날짜:".($key['commnet_date'])."\t";
      print "<br><br>";
    }
    echo<<<FORM
    </div>
  </form>
FORM;
  $view->StructureHeaderMenuInclude_down2();
?>
