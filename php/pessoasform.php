<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agenda de compromissos - Secretária</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/principalsecretaria.css">
</head>
<body>
    <?php include("menusecretaria.php"); ?>

    <div class="container formulario">

    <div class="row">
        <h3 class="col">Cadastro de pessoas </h3>
    </div>
        <form action="php/autenticacao.php" method="POST">
            
            <div class="row form-floating">
                <input type="text" name="nome" class="col form-control" id="nome" required>
                <label for="nome" class="form-label">Nome</label>
            </div>
            <div class="row form-floating">
                <input type="text" name="sobrenome" class="col form-control" id="sobrenome" required>
                <label for="sobrenome" class="form-label">Sobrenome</label>
            </div>

            <div class="row form-floating">
                <input type="email" name="email" class="col form-control" id="email" required>
                <label for="email" class="form-label">E-mail</label>
        
                <input type="file" name="foto" class="col form-control" id="foto" required>
               
            </div>

            <div class="row botoes">
                <button type="reset" class="col-2 btn btn-secondary">Limpar</button>
                <button type="submit" class="col-2 btn btn-success">Cadastrar</button>
            </div>
        </form>    
    </div>

    <div class="container consulta">
        <form action="#" method="get">       
            <div class="col-6 form-floating">
                    <input type="text" name="nome" class="form-control" id="nome" required>
                    <label for="nome" class="form-label">Digite o nome para pesquisa</label>
            </div>
            <button type="submit" class="col-2">Buscar</button>
</form>
    </div>

</body>
</html>