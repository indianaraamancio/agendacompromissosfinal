<?php


require_once("../vendor/autoload.php");

$mpdf = new \Mpdf\Mpdf();

$mpdf->WriteHTML("<h3>Detalhes do Compromisso</h3>");


    
    require_once("conexaoBanco.php");
    $idCompromisso=$_POST['idComp'];
    $comando="SELECT t.descricao as descCompromisso, c.* FROM tiposcompromissos t INNER JOIN compromissos c
    ON t.idTipo=c.tiposCompromissos_idTipo WHERE c.idCompromisso=".$idCompromisso;
    $resultado=mysqli_query($conexao, $comando);
    $compromisso=mysqli_fetch_assoc($resultado);

    $comandoPessoas="SELECT p.nome, p.sobrenome FROM pessoas p INNER JOIN compromissos_pessoas cp ON p.idPessoa=cp.pessoas_idPessoa WHERE 
    cp.compromissos_idCompromisso=".$idCompromisso;
    $resultadoPessoas=mysqli_query($conexao, $comandoPessoas);
    $pessoas=array();

    while($p = mysqli_fetch_assoc($resultadoPessoas)){
        array_push($pessoas, $p);
    }

$mpdf->WriteHTML("<h3>Dados gerais</h3>");
$mpdf->WriteHTML("<p>Tipo de compromisso:".$compromisso['descCompromisso']."</p>");


$mpdf->Output();



?>