<!DOCTYPE html>
<html>
<head>
  <title>Redirecionando...</title>
  <meta charset="utf-8">
  <link type="text/css" rel="stylesheet" media="screen" href="style.css" />
</head>
  <body onload="start();">
    <div id="tempo" >
    	<p>Aguarde, você será redirecionado...</p>
    </div>
  </body>


    <script type="text/javascript">

  var count = new Number();
  var count = 5;

  function start(){

    if ((count - 1) >= 0){
      count -= 1;
      if (count == 0) {
			window.location.href = "login.php";
      }else if(count < 10){
        count = count;
      }
      tempo=count;
      setTimeout('start();', 1000);

    }
  }

  </script>
</html>