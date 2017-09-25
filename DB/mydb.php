<?php
function db_connect(){
  $user = 'root';
  $password = '';
  $db_type = "mysql";
  $db_host = "localhost";
  $db_name = "mydb";

  $dsn = "$db_type:host=$db_host;dbname=$db_name;charset=utf8";
  try {
    $pdo = new PDO($dsn,$user,$password);
    //접속시 오류를 감지하고 메시지를 표시
    $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    //속도와 안전성을 향상
    $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);

  } catch (PDOException $e) {
    die($e->getMessage());
  }
  return $pdo;
}

?>
