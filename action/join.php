<?php
//가입하기 위한 PHP
//DB에 저장된 정보와 비교해서 정보가 있으면 다시 입력하고 
//정보가 없으면 DB에새롭게 저장된다.
  require_once "../DB/mydb.php";
  
  //입력받은 id와 password 저장
  $id = $_POST['id'];
  $password = $_POST['password'];

  try {
    $pdo = db_connect();

    //기존의 DB의 내용을 가져와서 비교한 다음 기존과 중복되면 다시 입력하고
    //기존의 내용이 없으면 가입 된다.
    $sql = "SELECT * FROM members WHERE id = :id";
    $stt = $pdo->prepare($sql);
    $stt->bindValue(':id',$id);
    $stt->execute();
    $checkidCount = $stt->rowCount();

    if($checkidCount){
          echo "<script>alert('이미 존재하는 아이디 입니다. 다시 입력하세요');</script>";
          require_once "../form/join_form.php";
    }else {
      $sql = "INSERT INTO members VALUES(:id, :password)";
      $stt = $pdo->prepare($sql);
      $stt->bindValue(':id',$id);
      $stt->bindValue(':password',$password);
      $stt->execute();

      print "<script>alert('가입되었습니다. 다시 로그인 해주세요');</script>";
      print ("<script>location.replace('../index.php');</script>");
    }

  } catch (PDOException $e) {
    $e->getMessage();
  }
?>
