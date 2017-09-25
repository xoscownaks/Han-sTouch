<?php
  session_start();
  require_once "../collectview/commonview.php";
  $v = new view();
  $v->StructureHeaderMenuInclude_up2();
?>
<style media="screen">
  table{
    text-align: center;
  }
</style>
    <h2>후기</h2>
    <table border="1px" width="800px" >
      <tr>
        <th width="50px">순번</th>
        <th width="200px">제목</th>
        <th width="50px">ID</th>
        <th width="150px">날짜</th>
      </tr>
      <?php
        require_once "../action/showboard.php";

        $stt = boardResult();
        while ($row = $stt->fetch(PDO::FETCH_ASSOC)) {

          //날짜와 시간을 가져온다."0000-00-00 00:00:00" 식으로 저장 되어 있으니
          //' '공백을 기준으로 배열로 저장
          $date_time = explode(' ',$row['board_date']);
          $date = $date_time[0];
          $time = $date_time[1];
          //날짜가 오늘과 날짜는 표시하지않고 시간만 표시될 수 있게
          //글을 저장한 날짜와 오늘날짜를 비교
          if($date == Date('Y-m-d')){
            $row['board_date'] = $time;
          }
          else{
            $row['board_date'] = $date;
          }
          /*
          board_num int unsigned not null primary key auto_increment,
          board_title varchar(70) not null,
          board_content text not null,
          board_date datetime not null,
          board_id varchar(20) not null,
          board_password varchar(20) not null
          board_file VARCHAR(200)
          */
      ?>
      <tr>
        <td><?php print $row['board_num']; ?></td>
        <td ><a href="boardview.php?bno=<?php print $row['board_num']?>"><?php print $row['board_title']?></a></td>
        <td><?php print $row['board_id']?></td>
        <td><?php print $row['board_date']?></td>
      </tr>
      <?php
        }
      ?>
    </table>
    <form action="boardinputform.php">
          <input type="submit" name="write_board" value="글쓰기">
    </form>
<?php
  $v->StructureHeaderMenuInclude_down2();
 ?>
