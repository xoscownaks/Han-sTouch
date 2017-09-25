<?php
  class view{
    function StructureHeaderMenuInclude_up1(){
      echo<<<StructureHeaderMenuInclude
      <html>
        <head>
          <meta charset="utf-8">
          <title></title>
          <link rel="stylesheet" href="../css/header.css">
          <link rel="stylesheet" href="../css/indexcss.css">
        </head>
        <body>
          <div id="header">
StructureHeaderMenuInclude;
            require_once "header.php";
          echo<<<StructureHeaderMenuInclude
          </div>
          <div id="menu">
StructureHeaderMenuInclude;
            require_once "menu.php";
          echo<<<StructureHeaderMenuInclude
          </div>
          <div id="body">

StructureHeaderMenuInclude;
    }

    function StructureHeaderMenuInclude_down1(){
      echo<<<StructureHeaderMenuInclude_down
      </div>
      </body>
      </html>
StructureHeaderMenuInclude_down;
    }

    function StructureHeaderMenuInclude_up2(){
      echo<<<StructureHeaderMenuInclude
      <html>
        <head>
          <meta charset="utf-8">
          <title></title>
          <link rel="stylesheet" href="../css/header.css">
          <link rel="stylesheet" href="../css/indexcss.css">
        </head>
        <body>
          <div id="header">
StructureHeaderMenuInclude;
            require_once "header0.php";
          echo<<<StructureHeaderMenuInclude
          </div>
          <div id="menu">
StructureHeaderMenuInclude;
            require_once "menu0.php";
          echo<<<StructureHeaderMenuInclude
          </div>
          <div id="body">

StructureHeaderMenuInclude;
    }

    function StructureHeaderMenuInclude_down2(){
      echo<<<StructureHeaderMenuInclude_down
      </div>
      </body>
      </html>
StructureHeaderMenuInclude_down;
    }
}
?>
