<?php

require_once("conexaoBanco.php");

$descricao=$_POST['descricao'];

$comando="INSERT INTO tiposcompromissos (tipo) VALUES ('".$descricao."')";

echo $comando;

$resultado=mysqli_query($conexao, $comando);

if($resultado==true){
    header("Location: novoTipoForm.php?retorno=1");
}else{
    header("Location: novoTipoForm.php?retorno=0");
}



?>