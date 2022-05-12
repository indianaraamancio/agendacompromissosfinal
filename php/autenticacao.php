<?php

require_once("conexaoBanco.php");

$email = $_POST['email'];
$senha = $_POST['senha'];
$senhaMD5=md5($senha);

$comando="SELECT * FROM usuarios WHERE email='".$email."' AND senha='".$senhaMD5."'";

$resultado= mysqli_query($conexao, $comando);
$linhas=mysqli_num_rows($resultado);
$usuario= mysqli_fetch_assoc($resultado);


if($linhas==1){
    
    session_start();
	$_SESSION['email']=$usuario['email'];
	$_SESSION['nivel']=$usuario['nivel'];
    $_SESSION['idUsuario']=$usuario['idUsuario'];  

   if($usuario['nivel']=="1"){
    header("Location: principalSecretaria.php");
   }else{
    header("Location: principalExecutivo.php");
   }
}else{
    header("Location: ../index.php?retorno=0");
}

?>