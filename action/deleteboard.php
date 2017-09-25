<?php
//게시판의 글을 삭제하기 위한 PHP
//삭제하기 위해 입력한 비밀번호와 현재 사용자의 ID,비밀번호가 일치하면
//글을 삭제가능하다.
    require_once "../DB/mydb.php";
    session_start();

    $Bno = $_POST['bno'];
    try{
        $pdo = db_connect();
        //db의 비밀번호와 일치하면 삭제 그렇지 않으면 하지 않는다
        $DelPs = $_POST['delete_check_password'];
        $sql = "SELECT * FROM board WHERE board_num =:board_n AND board_password=:board_ps";
        $stt = $pdo->prepare($sql);
        $stt->bindValue(':board_n',$Bno);
        $stt->bindValue(':board_ps',$DelPs);
        $stt->execute();
        $result = $stt->rowCount();

        if($result && $_SESSION['password'] == $DelPs){
            $sql = "DELETE FROM board WHERE board_num=:board_n";
        }else{
            print "<script>alert('다시 입력하세요');history.back();</script>";

        }
        $stt = $pdo->prepare($sql);
        $stt->bindValue(':board_n',$Bno);
        $stt->execute();
        $result = $stt->rowCount();

        if($result){
            print "<script>alert('삭제완료')</script>";
            print ("<script>location.replace('../form/boardform.php');</script>");
        }
    }catch (Exception $e){
        $e->getMessage();
    }