<?php
//다운로드 하기 위한 PHP
//파일 이름을 가져와서 해당 경로에 있는 파일을 읽는다.
    if(isset($_GET['dow'])){
        //파일의 경로와 파일이름
        $file = "C:xampp/htdocs/hangiphp/shoppingmall/upload/".$_GET['dow'];

        //// 지금 수행되는 종류
        header('Content-Description: File Transfer');
        //// 다운로드될 데이터 타입선언 전부 가능
        header('Content-Type: application/octet-stream');
        // 다운로드될 파일명, basename을 사용하면 경로에서 가장 마지막의 파일이름만 가져온다.
        header('Content-Disposition: attachment; filename='.basename($file));

        // 아래의 3줄은 캐시의 사용여부에 관련된 사항.
        header("Expires: 0");
        header('Cache-Control: must-revalidate');
        header('Pragma:public');

        header('Content-Length : '.filesize($file));
        //readfile은 말그대로 파일을 읽는 함수
        //txt,img는 그대로 화면에 보여줄 수 있으며 일반적으로 파일을 링크해서  걸면 다운로드에 사용
        readfile($file);
        exit;
        
    }else{
        print "<script>alert('실패')</script>";
        exit;
    }
?>