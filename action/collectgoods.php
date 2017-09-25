<?php  
//모든 입력받은 상품정보를 받아 세션에 저장하는 PHP
	session_start();

	if(isset($_POST['coke_num'])){
		if(is_numeric($_POST['coke_num'])){
			print "<script>alert('상품을 담았습니다.')</script>";
         	$_SESSION['coke_num'] = $_POST['coke_num'];
         	print "<script>window.close();</script>";
		}else{
			print "<script>alert('숫자를 입력하세요');</script>";
         	print "<script>history.go(-1)</script>";
		}
      }

    if(isset($_POST['sprite_num'])){
		if(is_numeric($_POST['sprite_num'])){
			print "<script>alert('상품을 담았습니다.')</script>";
         	$_SESSION['sprite_num'] = $_POST['sprite_num'];
         	print "<script>window.close();</script>";
		}else{
			//print "<script>alert('숫자를 입력하세요');</script>";
         	print "<script>history.go(-1)</script>";
		}
    }

    if(isset($_POST['burger1_num'])){
		if(is_numeric($_POST['burger1_num'])){
			print "<script>alert('상품을 담았습니다.')</script>";
         	$_SESSION['burger1_num'] = $_POST['burger1_num'];
         	print "<script>window.close();</script>";
		}else{
			print "<script>alert('숫자를 입력하세요');</script>";
         	print "<script>history.go(-1)</script>";
		}
    }

     if(isset($_POST['burger2_num'])){
		if(is_numeric($_POST['burger2_num'])){
			print "<script>alert('상품을 담았습니다.')</script>";
         	$_SESSION['burger2_num'] = $_POST['burger2_num'];
         	print "<script>window.close();</script>";
		}else{
			print "<script>alert('숫자를 입력하세요');</script>";
         	print "<script>history.go(-1)</script>";
		}
    
     }

     if(isset($_POST['burger3_num'])){
		if(is_numeric($_POST['burger3_num'])){
			print "<script>alert('상품을 담았습니다.')</script>";
         	$_SESSION['burger3_num'] = $_POST['burger3_num'];
         	print "<script>window.close();</script>";
		}else{
			print "<script>alert('숫자를 입력하세요');</script>";
         	print "<script>history.go(-1)</script>";
		}
    
     }

     if(isset($_POST['burger4_num'])){
		if(is_numeric($_POST['burger4_num'])){
			print "<script>alert('상품을 담았습니다.')</script>";
         	$_SESSION['burger4_num'] = $_POST['burger4_num'];
         	print "<script>window.close();</script>";
		}else{
			print "<script>alert('숫자를 입력하세요');</script>";
         	print "<script>history.go(-1)</script>";
		}
    
     }
?>