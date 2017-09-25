<?php
  //QNA메인 페이지
  require_once "../collectview/commonview.php";
  require_once "../action/QNAAction.php";

  $QNA = new QNAAction();
  $stt = $QNA->showQnaMain();

  $v = new view();
  $v->StructureHeaderMenuInclude_up2();
  echo<<<QNAMAIN
  <style media="screen">
    table{
      text-align: center;
    }
  </style>
  <h2>Q & A</h2>
  <table border="1" width="800px">
    <tr>
      <th width="100px">번호</th>
      <th width="300px">제목</th>
      <th width="100px">개시날짜</th>
    </tr>

QNAMAIN;
  while ($row = $stt->fetch(PDO::FETCH_ASSOC)) {
    // qna_num int unsigned not null primary key auto_increment,
    // qna_title varchar(100) NOT NULL,
    // qna_content varchar(500) NOT NULL,
    // qna_date datetime NOT NULL,
    // qna_id varchar(50) NOT NULL,
    // qna_password varchar(50) NOT NULL
    $date_time = explode(' ',$row['qna_date']);
    $date = $date_time[0];
    $time = $date_time[1];
    //날짜가 오늘과 날짜는 표시하지않고 시간만 표시될 수 있게
    //글을 저장한 날짜와 오늘날짜를 비교
    if($date == Date('Y-m-d')){
      $row['qna_date'] = $time;
    }
    else{
      $row['qna_date'] = $date;
    }
    $num = $row['qna_num'];
    $title = $row['qna_title'];
    $date = $row['qna_date'];
  echo<<<QNAMAIN
      <tr>
        <td>$num</td>
        <td><a href="QnaDetailform.php?bno=$num">$title</a></td>
        <td>$date</td>
      <tr>
QNAMAIN;
  }
    echo<<<QNAMAIN
    </table>
QNAMAIN;
  print "<a href='QNAinputform.php'><input type='button' value='글쓰기'></a>";
  $v->StructureHeaderMenuInclude_down2();
?>
