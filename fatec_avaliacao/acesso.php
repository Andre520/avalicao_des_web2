<?php
    session_start();

    if((!isset ($_SESSION['user']) == true) and (!isset ($_SESSION['passwd']) == true)){
        header('location: index.php');
    }

    $user = $_SESSION['user'];

?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login Andre </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
  </head>
  <body>
    <section class="main">
        <div class="container">
            <h1 style="text-align: center; margin-top: 5rem;">
                Bem vindo, <span style="color: #294FBF;"><?php echo $user; ?></span> ao cadastro veiculos!
            </h1>

            <div class="container" style="width:50%;">
                <a href="cadastroVeiculos.php" class="btn btn-primary">Cadastrar veiculos</a>
                <a href="logout.php" class="btn btn-danger">Sair</a>
            </div>

        </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
  </body>
</html>