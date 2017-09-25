  <?php
    require_once "../collectview/commonview.php";
    $v = new view();
    $v->StructureHeaderMenuInclude_up2();
  ?>
  <link rel="stylesheet" href="../css/join.css">
  <script type="text/javascript">
     function check(){
       if(document.join_form.id.value == ""){
         alert("ID를 입력하세요.");
         document.join_form.id.focus();
         return;
       }
       if(document.join_form.password.value ==""){
         alert("비밀번호를 입력하세요.");
         document.join_form.password.focus();
         return;
       }
       if(document.join_form.password.value != document.join_form.password_check.value){
         alert("비밀번호가 일치하지 않습니다.");
         document.join_form.password_check.focus();
         document.join_form.password_check.select();
         return;
       }else {
         document.join_form.submit();
       }
   }
  </script>
    <form name="join_form" action="../action/join.php" method="post">
      <div class="container">
          <a href="../index.php">
            <h1>Han's TOUCH</h1>
          </a>
      </div>
      <div class="container">
          <input type="text" name="id" placeholder="아이디" required>
      </div>
      <div class="container">
          <input type="password" name="password" placeholder="비밀번호" required>
      </div>
      <div class="container">
          <input type="password" name="password_check" placeholder="비밀번호 재확인" required>
      </div>
      <div class="container">
          <input type="button" style="WIDTH:215px;height:40px;font-size:10pt;"
          onClick="check()" value="회원가입" >
      </div>
<?php
  $v->StructureHeaderMenuInclude_down2();
?>
