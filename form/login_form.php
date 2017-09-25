<?php
  require_once "../collectview/commonview.php";
  $v = new view();
  $v->StructureHeaderMenuInclude_up2();
?>
    <script type="text/javascript">
      function BackToHome(){
        location.replace('../index.php');
      }
    </script>
    <link rel="stylesheet" href="../css/logincss.css">
    <div id="form">
      <div id="inside_header">
        Welcome To Han's Touch<br>
        Log In
      </div>
      <div id="i0nside_form">
        <form name="login_form" action="../action/login.php" method="post">
            <input type="text" placeholder="ID입력" name="id" autofocus required>
            <input type="password" placeholder="PASSWORD입력" name="password" required>
            <input type="button" value="Home" onClick="BackToHome();" style="padding: 5px 10px 5px 10px; background-color: 25b2d5; color: white;">
            <input type="reset" value="reset">
            <input type="submit" value="Login">
        </form>
      </div>
<?php
  $v->StructureHeaderMenuInclude_down2();
?>
