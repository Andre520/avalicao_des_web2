<?php
    session_start();

    if((!isset ($_SESSION['user']) == true) and (!isset ($_SESSION['passwd']) == true)){
        header('location: index.php');
    }

?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>login Andre </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
  </head>
  <body>
    <section class="main">
        <div class="container">
            <h1 style="text-align: center; margin-top: 5rem;">
                Cadastro de veiculos
            </h1>

            <div class="container" style="width:50%; background-color: gray yellow; border: 1px #292929 solid; border-radius: 4px; color: #000; padding: 10px;">
                <form method="post" action="cadastrar.php" id="loginForm" name="loginForm">
                    <div class="mb-3">
                        <label for="nome" class="form-label">Modelo do veiculo</label><br/>
                        <input type="text" class="form-control" id="modelo" name="modelo">
                    </div>
                    <div class="mb-3">
                        <label for="ano" class="form-label">ano</label>
                        <input type="numeric" class="form-control" id="ano" name="ano">
                    </div>
                    <div class="mb-3">
                        <label for="Cor" class="form-label">Cor</label>
                        <input type="text" class="form-control" id="cor" name="cor">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                    
                </form>
                
                <br>
                <a href="logout.php" class="btn btn-primary"> logout </a>
                <a href="veiculosCadastrar.php" class="btn btn-success">Ver veiculos cadastrados</a>
            </div>

        </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
  </body>
</html>