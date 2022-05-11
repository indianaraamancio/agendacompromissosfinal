<?php

require_once("conexaoBanco.php");

$idRelacao=$_POST['idRelacao'];
$descricao=$_POST['descricao'];

$comando="UPDATE relacoes SET descricao='".$descricao."' WHERE idRelacao=".$idRelacao;

$resultado=mysqli_query($conexao, $comando);

if($resultado==true){
    header("Location: relacaoForm.php?retorno=4");
}else{
    header("Location: relacaoForm.php?retorno=5");
}







?>