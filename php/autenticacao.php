<?php

require_once("conexaobanco.php");

$email = $_POST['email'];
$senha = $_POST['senha'];
$senhaMD5=md5($senha);

$comando="SELECT * FROM usuarios WHERE email='".$email."' AND senha='".$senhaMD5."'";

$resultado= mysqli_query($conexao, $comando);
$linhas=mysqli_num_rows($resultado);
$usuario= mysqli_fetch_assoc($resultado);


if($linhas==1){
   if($usuario['nivel']=="1"){
    header("Location: principalsecretaria.php");
   }else{
    header("Location: principalexecutivo.php");
   }
}else{
    header("Location: ../index.php?retorno=1");
}

?>