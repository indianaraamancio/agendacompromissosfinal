<?php
require_once("conexaoBanco.php");

$descricao=$_POST['descricao'];
$idTipo=$_POST['idTipo'];
$dataInicio=$_POST['dataInicio'];
$dataFim=$_POST['dataFim'];
$hora=$_POST['hora'];
$local=$_POST['local'];
$cep=$_POST['cep'];
$numero=$_POST['numero'];
$rua=$_POST['rua'];
$bairro=$_POST['bairro'];
$cidade=$_POST['cidade'];
$estado=$_POST['estado'];
$obs=$_POST['obs'];

$idPessoas=array();
$idPessoas=$_POST['idPessoa'];

$comando="INSERT INTO compromissos (descricao,dataInicio, dataFim, hora, local, 
rua, bairro, cidade, estado, cep, numero, observacao, tiposCompromissos_idTipo) VALUES 
('".$descricao."','".$dataInicio."','".$dataFim."','".$hora."','".$local."','".$rua."',
'".$bairro."','".$cidade."', '".$estado."',".$cep.",".$numero.",'".$obs."',
".$idTipo.")";

$resultado=mysqli_query($conexao, $comando);

$ultimoCompromisso="SELECT MAX(idCompromisso) as idCompromisso FROM compromissos";

$resUltimoComp=mysqli_query($conexao,$ultimoCompromisso);

$idCompromisso=mysqli_fetch_assoc($resUltimoComp);

for($i=0; $i<sizeof($idPessoas); $i++){
    $comandoPessoas="INSERT INTO compromissos_pessoas (compromissos_idCompromisso, pessoas_idPessoa) 
    VALUES (".$idCompromisso['idCompromisso'].", ".$idPessoas[$i].")";
    $resultado=mysqli_query($conexao, $comandoPessoas);
}











?>