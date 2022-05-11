<?php

require_once("conexaoBanco.php");

$idTipo=$_POST['idTipo'];
$tipo=$_POST['tipo'];

$comando="UPDATE tiposcompromissos SET tipo='".$tipo."' WHERE idTipo=".$idTipo;

$resultado=mysqli_query($conexao, $comando);

if($resultado==true){
    header("Location: tipoCompromissoForm.php?retorno=4");
}else{
    header("Location: tipoCompromissoForm.php?retorno=5");
}




?>