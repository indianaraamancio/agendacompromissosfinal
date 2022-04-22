<?php

$local="localhost";
$user="root";
$senha="";
$banco="agenda";

$conexao = mysqli_connect($local, $user, $senha, $banco);

mysqli_set_charset($conexao,"utf8");

?>