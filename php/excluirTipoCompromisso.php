<?php

require_once("conexaoBanco.php");

$idTipo=$_POST['idTipo'];

$verificarCompromissos="SELECT * FROM agendarcompromissos WHERE tiposCompromissos_idTipo=".$idTipo;

$resultadoVerificar=mysqli_query($conexao,$verificarCompromissos);

$linhasCompromissos=mysqli_num_rows($resultadoVerificar);

if($linhasCompromissos==0){
    $comandoExclusao="DELETE FROM tiposCompromissos WHERE idTipo=".$idTipo;
    $resultado=mysqli_query($conexao, $comandoExclusao);
    header("Location: novoTipoForm.php?retorno=2");
}else{
    header("Location: novoTipoForm.php?retorno=3");
}




?>