<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title>Sistema de Login</title>
    <style>
        body {
            background-color: #F2F2F2;
        }

        .login {
            width: 100%;
            height: 100vh;
            align-items: center;
            justify-content: center;
            display: flex;

        }
    </style>

</head>

<body style="background-color: #F2F2F2">

    <body>
        <div class="login">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 offset-lg-4"></div>
                    <div class="card">
                        <div class="card-body">
                            <h3>Acesso Restrito </h3>
                        </div>
                        <div class="card-body">
                            <form action="login.php" method="POST">
                                <div>
                                    <div class="mb-3">
                                        <label>Usuário</label>
                                        <input type="text" name="usuario" class="form-control">
                                    </div>
                                </div>
                                <div>
                                    <div class="mb-3">
                                        <label>Senha</label>
                                        <input type="password" name="senha" class="form-control">
                                    </div>
                                </div>
                                <div>
                                    <div class="mb-3">
                                        <button type="submit" class="btn btn-primary">Enviar</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>

</html>