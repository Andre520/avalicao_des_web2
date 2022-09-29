<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
  </head>
  <body>
    <section class="main">
        <div class="container">
            <h1 style="text-align: center; margin-top: 5rem;">
                Login 
            </h1>

            <div class="container" style="width:50%; background-color:#055160;; border: 1px #292929 solid; border-radius: 4px; color: #fff; padding: 10px;">
                <form method="post" action="auth.php" id="loginForm" name="loginForm">
                    <div class="mb-3">
                        <label for="user" class="form-label">Usuário</label>
                        <input type="text" class="form-control" id="user" name="user" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <label for="passwd" class="form-label">Senha</label>
                        <input type="password" class="form-control" id="passwd" name="passwd">
                    </div>
                    <button type="submit" class="btn btn-primary">Entrar</button>
                </form>
            </div>

        </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
  </body>
</html>