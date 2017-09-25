<?php
    require_once "../DB/mydb.php";
    require_once "../collectview/commonview.php";

    $boardN = $_GET['bno'];

    try{
        $pdo = db_connect();
        /*
        board_num int unsigned not null primary key auto_increment,
        board_title varchar(70) not null,
        board_content text not null,
        board_date datetime not null,
        board_id varchar(20) not null,
        board_password varchar(20) not null
        board_file VARCHAR(200),
     */
        $sql = "SELECT  board_title, board_content, board_date, board_id, board_file FROM board WHERE board_num=:board_num";
        $stt = $pdo->prepare($sql);
        $stt->bindValue(':board_num',$boardN);
        $stt->execute();
        $row = $stt->fetch(PDO::FETCH_ASSOC);
        $file = $row['board_file'];

    }catch (Exception $e){
        $e->getMessage();
    }

    $v = new view();
    $v->StructureHeaderMenuInclude_up2();

?>
        <h3><?php print $row['board_title']?></h3>
        <div class="main">
            작성자 : <?php print $row['board_id']?>
        </div>
        <div class="main">
            작성일 : <?php print $row['board_date']?>
        </div>
        <div class="main">
            내용 : <?php print $row['board_content']?>
        </div>
        <div class="main">
            첨부파일 : <a href="../action/download.php?dow=<?php print $file?>"><?php print $row['board_file']?></a>
        </div>
        <div>

        </div>
        <input type="button" onclick="history.go(-1) " value="뒤로가기">

        <a href="boarddeleteform.php?bno=<?php print $boardN?>"><input type="button"  value="삭제"></a>
<?php
  $v->StructureHeaderMenuInclude_down2();
?>
