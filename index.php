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
</head>
<body>
    <main>

    <div> 
        <div>     
            <figure class="figure">
            <img src="..." class="figure-img img-fluid rounded" alt="Logotipo">
            <figcaption class="figure-caption text-end">Agenda de compromissos</figcaption>
            </figure>
        </div>

        <form action="php/autenticacao.php" method="POST">
        <div>
            <label for="email" class="form-label">E-mail</label>
            <input type="email" class="form-control" id="email" name="email" placeholder="admin@escritorio.com">
        </div>
        <div>
            <label for="senha" class="form-label">Senha</label>
            <input type="password" class="form-control" id="senha" name="senha" aria-describedy="senhaHelp">
            <div id="senhaHelp" class="form-text">Não compartilhe sua senha com terceiros </div>
        </div>
        <div>
            <button type="reset" class="btn btn-secondary">Limpar</button>
           <button type="submit" class="btn btn-primary">Entrar</button>           
        </div>

        </form>

    </div>    



    </main>
</body>
</html>