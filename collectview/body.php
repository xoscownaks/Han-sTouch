<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="./css/body.css">
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js">
    </script>
    <script src="./jquery/jquery.bxslider.min.js"></script>
    <link href="./jquery/jquery.bxslider.css" rel="stylesheet"/>
    <script type="text/javascript">
      $(document).ready(function(){
        $('.bxslider').bxSlider({
          mode:'horizontal', //default : 'horizontal', options: 'horizontal', 'vertical', 'fade'
          speed:800, //default:500 이미지변환 속도
          auto: true, //default:false 자동 시작
          captions: false, // 이미지의 title 속성이 노출된다.
          autoControls: false, //default:false 정지,시작 콘트롤 노출, css 수정이 필요
        });
      });
    </script>
  </head>
  <body>
    <h1>Today's Menu</h1>
      <ul class="bxslider">
        <li>
            <img id="MainPgBurger" src="./src/Mainburger1.png">
        </li>
        <li>
            <img id="MainPgBurger" src="./src/Mainburger2.png">
        </li>
        <li>
            <img id="MainPgBurger" src="./src/Mainburger3.png">
        </li>
        <li>
            <img id="MainPgBurger" src="./src/Mainburger4.png">
        </li>
      </ul>
  </body>
</html>
