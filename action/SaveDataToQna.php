<?php
//QNA의 글을 데이터베이스에 쓴다.
  require_once "QNAAction.php";

  $QNAAction = new QNAAction();
  $title = $_POST['title'];
  $content = $_POST['content'];

  $QNAAction->inputValueToDb($title,$content);
?>
