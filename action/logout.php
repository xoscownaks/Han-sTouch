<?php
//로그아웃을 하기 위한 php
  session_start();
  //모든 세션을 제거하는 함수
  function logout(){
    session_destroy();
  }
  
  //로그아웃 클릭시 모든 세션 제거그리고 메인으로 이동
  if(isset($_POST['logout'])){
    print "<script>alert('로그아웃')</script>";
    logout();
    print "<script>location.replace('../index.php');</script>";
  }
?>
