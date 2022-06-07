<?php

require_once("conexaoBanco.php");

$idPessoa=$_POST['idPessoa'];

$verificarCompromissos="SELECT * FROM pessoas_has_agendarcompromissos WHERE 
pessoas_idPessoa=".$idPessoa;

$resultadoVerificar=mysqli_query($conexao,$verificarCompromissos);

$linhas=mysqli_fetch_assoc($resultadoVerificar);

if($linhas==0){
     /**Removendo o arquivo da foto antiga da pasta */
     $caminhoFoto="SELECT foto FROM pessoas WHERE idPessoa=".$idPessoa;    
     $resultadoFoto=mysqli_query($conexao,$caminhoFoto);
     $fotoAntiga=mysqli_fetch_assoc($resultadoFoto);
     unlink($fotoAntiga['foto']);

     $comando="DELETE FROM pessoas WHERE idPessoa=".$idPessoa;
     $resultado=mysqli_query($conexao,$comando);   

    header("Location: pessoaForm.php?retorno=2");
   
}else{
    header("Location: pessoaForm.php?retorno=3");
}




?>