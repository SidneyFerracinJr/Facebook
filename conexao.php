<?php

$host = "sql211.epizy.com";
$usuario = "epiz_24187470";
$senha = "qt9QNEsdlpK";
$bd = "epiz_24187470_facebookredirect";

$mysqli = new mysqli($host, $usuario, $senha, $bd);

if($mysqli->connect_errno)
    echo "Falha na conexão: (".$mysqli->connect_errno.")" "$mysqli->connect_error";


?>