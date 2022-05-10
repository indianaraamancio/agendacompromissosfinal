<?php

$local="localhost";
$user="root";
$senha=""; /**Confirmar se a senha é essa em C:\xampp\phpMyAdmin\config.inc.php -- password */
$banco="agenda";

$conexao = mysqli_connect($local, $user, $senha, $banco);

mysqli_set_charset($conexao,"utf8");


?>