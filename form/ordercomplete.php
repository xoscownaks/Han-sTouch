<?php 
	//주문 버튼을 눌렀을때 사용자가 생성한 
	//세션들을 전부 제거함 으로써 장바구니를 비운다.
		if(isset($_POST["order"]) && isset($_SESSION["coke_num"])){
			unset($_SESSION["coke_num"]);
			unset($_SESSION["cokeprice"]);
		}else{
			print "<script>alert('주문할 상품이 없습니다.')</script>";
		}

		if(isset($_POST["order"]) && isset($_SESSION["sprite_num"])){
			unset($_SESSION["sprite_num"]);
			unset($_SESSION["spriteprice"]);
		}else{
			print "<script>alert('주문할 상품이 없습니다.')</script>";
		}

		if(isset($_POST["order"]) && isset($_SESSION["burger1_num"])){
			unset($_SESSION["burger1_num"]);
			unset($_SESSION["burger1sprice"]);
		}else{
			print "<script>alert('주문할 상품이 없습니다.')</script>";
		}

		if(isset($_POST["order"]) && isset($_SESSION["burger2_num"])){
			unset($_SESSION["burger2_num"]);
			unset($_SESSION["burger2sprice"]);
		}else{
			print "<script>alert('주문할 상품이 없습니다.')</script>";
		}

		if(isset($_POST["order"]) && isset($_SESSION["burger3_num"])){
			unset($_SESSION["burger3_num"]);
			unset($_SESSION["burger3sprice"]);
		}else{
			print "<script>alert('주문할 상품이 없습니다.')</script>";
		}

		if(isset($_POST["order"]) && isset($_SESSION["burger4_num"])){
			unset($_SESSION["burger4_num"]);
			unset($_SESSION["burger4sprice"]);
		}else{
			print "<script>alert('주문할 상품이 없습니다.')</script>";
		}
	
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="../css/header.css">
    <link rel="stylesheet" href="../css/indexcss.css">
</head>
<body>
	<div id="header">
      <?php
        require_once "header0.php";
      ?>
    </div>
    <div id="menu">
      <?php
        require_once "menu0.php";
      ?>
    </div>
    <div id="body">
    <h2>주문이 완료 되었습니다.</h2>
    <h2>감사합니다.</h2>
    </div>
</body>
</html>