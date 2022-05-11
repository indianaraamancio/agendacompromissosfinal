<?php

require_once("conexaoBanco.php");

$idRelacao=$_POST['idRelacao'];

$verificarPessoas="SELECT * FROM pessoas WHERE relacoes_idRelacao=".$idRelacao;

$resultadoVerificar=mysqli_query($conexao,$verificarPessoas);

$linhasPessoas=mysqli_num_rows($resultadoVerificar);

if($linhasPessoas==0){
    $comandoExclusao="DELETE FROM relacoes WHERE idRelacao=".$idRelacao;
    $resultado=mysqli_query($conexao, $comandoExclusao);
    header("Location: relacaoForm.php?retorno=2");
}else{
    header("Location: relacaoForm.php?retorno=3");
}



?>