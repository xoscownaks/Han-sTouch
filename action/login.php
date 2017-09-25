<?php
//로그인 하기 위한 PHP
//DB에 저장된 정보와 비교해서 정보가 있으면 로그인 성공 하며 세션에 저장

  session_start();
  require_once "../DB/mydb.php";

  try {
    //ID와 PASSWORD를 가져와 DB에 정보가 있는지 확인한다.
    $pdo = db_connect();
    $sql = "SELECT * FROM members where id=:id AND password=:password";
    $stt = $pdo->prepare($sql);
    $stt->bindValue(':id',$_POST['id']);
    $stt->bindValue(':password',$_POST['password']);
    $stt->execute();
    $result = $stt->rowCount();
    $row = $stt->fetch(PDO::FETCH_ASSOC);
    //DB에 정보가 없다면 
    if(!$result){
        print ("<script>window.alert('아이디 또는 패스워드를 확인해주세요.');
        history.go(-1);
        </script>");
    }else{
        //DB에 정보가 있다면 로그인성공 부분
        $db_pass = $row['password'];
        print $_POST['password'];
        print $db_pass;

        if($_POST['password'] == $db_pass){
          print ("<script>alert('로그인 성공.')</script>");
          
          $_SESSION['userid'] = $_POST['id'];
          $_SESSION['password'] = $_POST['password'];

          print ("<script>location.replace('../index.php');</script>");
        }
    }
  } catch (PDOException $e) {
    $e->getMessage();
  }

?>
