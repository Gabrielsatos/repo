<?php

$host = "us-cdbr-east-06.cleardb.net";
$usuario = "b2cf63492333fa";
$senha = "e4a71ad8";
$bancodedados = "heroku_97d82f7d0131658";

 $conexao = mysqli_connect($host,$usuario,$senha,$bancodedados);

if(!$conexao)
     die( "falha ao conectar:".mysqli_connect_error());

?>