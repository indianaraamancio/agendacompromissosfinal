<?php

require_once("conexaoBanco.php");

$nome=$_POST['nome'];
$sobrenome=$_POST['sobrenome'];
$email=$_POST['email'];
$foto=$_FILES['foto']['name'];
$idRelacao=$_POST['idRelacao'];
$idPessoa=$_POST['idPessoa'];

$comando="UPDATE pessoas SET nome='".$nome."', sobrenome='".$sobrenome."', email='".$email."',
relacoes_idRelacao=".$idRelacao." WHERE idPessoa=".$idPessoa;

if($_FILES['foto']['name']!=""){

    /**Removendo o arquivo da foto antiga da pasta */
    $caminhoFoto="SELECT foto FROM pessoas WHERE idPessoa=".$idPessoa;    
    $resultadoFoto=mysqli_query($conexao,$caminhoFoto);
    $fotoAntiga=mysqli_fetch_assoc($resultadoFoto);
    unlink($fotoAntiga['foto']);

    //Capturando extensão do arquivo (4 caracteres finais do nome)
    $extensao = strtolower(substr($foto,-4)); 
    //Definindo um novo nome para o arquivo
    $nomeFoto = date("Y.m.d-H.i.s") . $extensao; 
    //Pasta para uploads
    $pasta = '../fotos/'; 
    //Fazendo o upload do arquivo para a pasta definida
    move_uploaded_file($_FILES['foto']['tmp_name'], $pasta.$nomeFoto); 
 
    $localFoto = $pasta.$nomeFoto;
    
    $comando="UPDATE pessoas SET nome='".$nome."', sobrenome='".$sobrenome."', email='".$email."',
    foto='".$localFoto."', relacoes_idRelacao=".$idRelacao."  WHERE idPessoa=".$idPessoa;
}

    $resultado=mysqli_query($conexao, $comando);

    if($resultado==true){
        header("Location: pessoaForm.php?retorno=4");
    }else{
        header("Location: pessoaForm.php?retorno=5");
    }





?>