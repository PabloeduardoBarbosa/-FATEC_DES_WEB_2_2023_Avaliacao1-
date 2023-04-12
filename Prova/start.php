<?php
    session_start();

    if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"]!== true){
        echo("Location: index.php");
        exit;
    }
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="">
    <title>Biblioteca Digital</title>
</head>
<body>
    <h1>Biblioteca Digital do: <br> <?php echo htmlspecialchars($_SESSION["username"])?>
    </h1>
    <a href="logout.php">Sair da Conta</a>
    <br></br>
    <a href="cadastro.php">Cadastrar Livro</a>
</body>
</html>
