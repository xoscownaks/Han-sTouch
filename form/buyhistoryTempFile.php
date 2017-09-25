<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="../css/header.css">
    <link rel="stylesheet" href="../css/indexcss.css">
    <link rel="stylesheet" href="../css/buyhistorycss.css">
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
	<form>
		<table>
		<tr>
			<th>이름</th>
			<th>사진</th>
			<th>수량</th>
			<th>가격</th>
		</tr>
		<?php
		if(isset($_SESSION['coke_num'])){
			$_SESSION['cokeprice']=$_SESSION['coke_num'] * 1000;
		 ?>
		<tr>
			<td>
				<b>
				콜라
				</b>
			</td>
			<td>
				<img src="../src/coke.png"/>
			</td>
			<td>
					<?php
					print $_SESSION['coke_num'];
				?>
			</td>
			<td>
				<?php
					print $_SESSION['cokeprice']."원";
				?>
			</td>
		</tr>
		<?php
		}
	?><?php
	if(isset($_SESSION['sprite_num'])){
		$_SESSION['spriteprice']=$_SESSION['sprite_num'] * 1000;
	 ?>
	<tr>
		<td>
			<b>
			스프라이트
			</b>
		</td>
		<td>
			<img src="../src/sprite.jpg"/>
		</td>
		<td>
				<?php
				print $_SESSION['sprite_num'];
			?>
		</td>
		<td>
			<?php
				print $_SESSION['spriteprice']."원";
			?>
		</td>
	</tr>
	<?php
	}if(isset($_SESSION['burger1_num'])){
		$_SESSION['burger1price']=$_SESSION['burger1_num'] * 4000;
	 ?>
	<tr>
		<td>
			<b>
			우마이버거
			</b>
		</td>
		<td>
			<img src="../src/Mainburger1.jpeg"/>
		</td>
		<td>
				<?php
				print $_SESSION['burger1_num'];
			?>
		</td>
		<td>
			<?php
				print $_SESSION['burger1price']."원";
			?>
		</td>
	</tr>
	<?php
	}if(isset($_SESSION['burger2_num'])){
		$_SESSION['burger2price']=$_SESSION['burger2_num'] * 4000;
	 ?>
	<tr>
		<td>
			<b>
			타워버거
			</b>
		</td>
		<td>
			<img src="../src/Mainburger2.jpeg"/>
		</td>
		<td>
				<?php
				print $_SESSION['burger2_num'];
			?>
		</td>
		<td>
			<?php
				print $_SESSION['burger2price']."원";
			?>
		</td>
	</tr>
	<?php
	}if(isset($_SESSION['burger3_num'])){
		$_SESSION['burger3price']=$_SESSION['burger3_num'] * 4000;
	 ?>
	<tr>
		<td>
			<b>
			비프버거
			</b>
		</td>
		<td>
			<img src="../src/Mainburger3.jpeg"/>
		</td>
		<td>
				<?php
				print $_SESSION['burger3_num'];
			?>
		</td>
		<td>
			<?php
				print $_SESSION['burger3price']."원";
			?>
		</td>
	</tr>
	<?php
	}if(isset($_SESSION['burger4_num'])){
		$_SESSION['burger4price']=$_SESSION['burger4_num'] * 4000;
	 ?>
	<tr>
		<td>
			<b>
			삼겹버거
			</b>
		</td>
		<td>
			<img src="../src/Mainburger4.jpeg"/>
		</td>
		<td>
				<?php
				print $_SESSION['burger4_num'];
			?>
		</td>
		<td>
			<?php
				print $_SESSION['burger4price']."원";
			?>
		</td>
	</tr>
	<?php
	}
?>

		</table>
	</form>
	<input type="button" name="order" onclick="location.replace('ordercomplete.php')" value="주문">
	</div>
</body>
</html>
