<!DOCTYPE html>
<html>
<head>
  <title>Redirecionando...</title>
  <meta charset="utf-8">
  <link type="text/css" rel="stylesheet" media="screen" href="style.css" />
</head>
  <body onload="msg();">
    <div id="tempo" >
    </div>
  </body>


    <script type="text/javascript">

  var count = new Number();
  var count = 5;

  function start(){

    if ((count - 1) >= 0){
      count -= 1;
      if (count == 0) {
function msg()
{
alert("Eu sou um alert!");
}
      }else if(count < 10){
        count = count;
      }
      tempo=count;
      setTimeout('start();', 1000);

    }
  }


			window.location.href = "https://dinheiroextradotblog.wordpress.com/";

  </script>
</html>