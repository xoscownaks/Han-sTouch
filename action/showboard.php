<?php  
//전체적인 게시판을 보여주기 위한 PHP
//순번을 기준으로 DB에서 모든 SQL문 출력 
	require_once "../DB/mydb.php";

	function boardResult(){
		try {
			
			$pdo = db_connect();

			$sql = "SELECT * FROM board ORDER BY board_num desc";
			$stt = $pdo->prepare($sql);
			$stt->execute();

		} catch (Exception $e) {
			$e->getMessage();
		}
		return $stt;
	}
?>