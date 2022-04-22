<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agenda de compromissos</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/index.css">
</head>
<body>

<div id="alertas">
    <?php if(isset($_GET['retorno'])==true && $_GET['retorno']==1){ ?>
    <div class="alert alert-warning alert-dismissible fade show" role="alert">
        <span>Usuário ou senha inválidos!</span>
        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
    </div>
    <?php } ?>
</div>

    <div class="container">
        <form action="php/autenticacao.php" method="POST">
            <div class="row">
                <svg xmlns="http://www.w3.org/2000/svg" id="logo" fill="currentColor" class="bi bi-calendar-event col-2" viewBox="0 0 16 16">
                    <path d="M11 6.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1z"/>
                    <path d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4H1z"/>
                </svg>
                <h3 class="col-10">Agenda de compromissos</h3>
            </div>

            <div class="row form-floating">
                <input type="text" name="email" class="col form-control" id="email" required>
                <label for="email" class="form-label">E-mail</label>
            </div>

            <div class="row form-floating">
                <input type="password" name="senha" class="col form-control" id="senha" required>
                <label for="senha" class="form-label">Senha</label>
            </div>

            <div class="row botoes">
                <button type="reset" class="col-2 btn btn-secondary">Limpar</button>
                <button type="submit" class="col-2 btn btn-success">Entrar</button>
            </div>
        </form>    
    </div>


</body>
</html>