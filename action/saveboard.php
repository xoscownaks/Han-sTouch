<?php
//DB에 입력한 값들을 저장하기 위한 PHP
	session_start();
	require_once "../DB/mydb.php";

	try {
		/*
		board_num int unsigned not null primary key auto_increment,
		board_title varchar(70) not null,
		board_content text not null,
		board_date datetime not null,
		board_id varchar(20) not null,
		board_password varchar(20) not null,
		board_file varchar(100)
		*/
		$pdo = db_connect();
		$sql = "INSERT INTO board(board_num,board_title,board_content,board_date, board_id,board_password, board_file)";
		$sql .= "VALUES(:num,:title,:content,:todaydate,:id,:password,:file)";

        //업로드한 파일의 이름, 서버에 저장된 임시파일명을 읽는다
        //그리고 설정한 경로에 해당 이름으로 업로드 한다.
        if(isset($_FILES['uploadfile']) && !$_FILES['uploadfile']["error"]){

            $fileName = $_FILES['uploadfile']['name'];
            $tmpName = $_FILES['uploadfile']['tmp_name'];

            $location = "C:xampp/htdocs/hangiphp/shoppingmall/upload/".$fileName;

            move_uploaded_file($tmpName,$location);
            //print "<script>alert('업로드')</script>";
        }

		$stt = $pdo->prepare($sql);
		$id = $_SESSION['userid'];
		$password = $_SESSION['password'];
		$title = $_POST['title'];
		$content = $_POST['content'];
		$date = Date('Y-m-d H:i:s');

		//board_num은 auto increase를 붙여서 db를 만들었기 때문에
		//아무것도 넣지 않으면 자동으로 숫자가 증가한다.
		$stt->bindValue(':num',null);
		$stt->bindValue(':title',$title);
		$stt->bindValue(':content',$content);
		$stt->bindValue(':todaydate',$date);
		$stt->bindValue(':id',$id);
		$stt->bindValue(':password',$password);
    $stt->bindValue(':file',$fileName);


		$stt->execute();
    	$result = $stt->rowCount();
    	if($result){
    		print "<script>alert('글을 작성하였습니다.')</script>";
    		print ("<script>location.replace('../form/boardform.php');</script>");
    	}
    } catch (Exception $e) {
		$e->getMessage();
	}
?>
