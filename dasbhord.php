<?php
    session_start();
    if(empty($_SESSION)){
        print "<script>location.href='index.php'</script>";
    }
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title>Sistema de Login</title>
<header>
<body>
    <nav class="navbar navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand">Sistema X</a>
            <?php
                print "Olá, ".$_SESSION["nome"];
                print "<a href='logout.php' class='btn btn-danger'>Sair</a>";
            ?>
        </div>
    </nav>
    
</body>
</html>