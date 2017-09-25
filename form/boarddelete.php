<?php
    $bNo = $_GET['bno'];

?>
<html>
<head>
<style>
    .main{
        vertical-align: middle;
    }
</style>
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
    <form name="delete_board" action="../action/deleteboard.php" method="post">
        <input type="hidden" name="bno" value="<?php echo $bNo?>">
        <div class="main">
            <label>비밀번호 입력 : </label>
            <input type="password" name="delete_check_password" placeholder="비밀번호 입력" required>
        </div>
            <input type="button" onclick="history.go(-1)" value="뒤로가기">
            <!--<a href="../action/deleteboard.php?bno="><input type="button"  value="확인" "></a>-->
            <button type="submit">확인</button>
    </form>
</div>
</body>
</html>