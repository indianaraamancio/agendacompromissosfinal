<?php

require_once("conexaoBanco.php");

$nome=$_POST['nome'];
$sobrenome=$_POST['sobrenome'];
$email=$_POST['email'];
$foto=$_FILES['foto']['name'];
$idRelacao=$_POST['idRelacao'];


//Capturando extensão do arquivo (4 caracteres finais do nome)
$extensao = strtolower(substr($foto,-4)); 
//Definindo um novo nome para o arquivo
$nomeFoto = date("Y.m.d-H.i.s") . $extensao; 
//Pasta para uploads
$pasta = '../fotos/'; 
//Fazendo o upload do arquivo para a pasta definida
move_uploaded_file($_FILES['foto']['tmp_name'], $pasta.$nomeFoto); 
 
$localFoto = $pasta.$nomeFoto;

$comando="INSERT INTO pessoas (nome, sobrenome, email, foto, relacoes_idRelacao) VALUES 
  ('".$nome."', '".$sobrenome."', '".$email."', '".$localFoto."', ".$idRelacao.")";

$resultado=mysqli_query($conexao,$comando);

if($resultado==true){
    header("Location: pessoaForm.php?retorno=1");
}else{
    header("Location: pessoaForm.php?retorno=0");
}
 
 

 

?>