<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agenda de compromissos - Secretária</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="../css/detalhesCompromisso.css">

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"> </script>
   
</head>
<body>

<?php include("menuSecretaria.php"); ?> 

<?php
    
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
?>
<h3>Dados gerais</h3>
<p>Tipo de compromisso: <?=$compromisso['descCompromisso']?> </p>
<p>Descrição: <?=$compromisso['descricao']?> </p>
<p>Data de início: <?=$compromisso['dataInicio']?> </p>
<p>Hora do compromisso: <?=$compromisso['hora']?> </p>
<p>Data de finalização: <?=$compromisso['dataFim']?> </p>

<h3>Local</h3>
<p>Local: <?=$compromisso['local']?> </p>
<p>Rua: <?=$compromisso['rua']?> </p>
<p>Número: <?=$compromisso['numero']?> </p>
<p>Bairro: <?=$compromisso['bairro']?> </p>
<p>Cidade: <?=$compromisso['cidade']?> </p>
<p>Observação: <?=$compromisso['observacao']?> </p>

<h3>Pessoas do compromisso</h3>
<?php
foreach($pessoas as $p){
    echo "<p>".$p['nome']." ".$p['sobrenome']."</p>";
}

?>

<form action="geraPDF.php" method="POST">
    <input type="hidden" value="<?=$compromisso['idCompromisso']?>" name="idComp">
    <button type="submit" class="btn btn-secondary">Gerar PDF </button>
</form>




</body>