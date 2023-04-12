<?php
session_start();

if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== TRUE){
    header("Location: index.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biblioteca</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
        }
        
        h1 {
            text-align: center;
            margin-top: 50px;
            margin-bottom: 30px;
            font-size: 36px;
        }

        form {
            margin: 0 auto;
            max-width: 600px;
            padding: 20px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
        }

        label {
            display: inline-block;
            margin-bottom: 5px;
        }

        input[type="text"], input[type="numeric"] {
            width: 100%;
            padding: 12px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
            margin-bottom: 20px;
        }

        input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            padding: 14px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <h1>Cadastrar Produto</h1>
    <form action="guardar_dados.php"<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <label for="nome_prod">Digite o nome do livro:</label><br>
        <input type="text" id="nome_prod" name="nome_prod" value=""><br>
        <label for="quantidade">Digite a quantitade:</label><br>
        <input type="numeric" id="quantidade" name="quantidade" value=""><br>
        <label for="fornecedor">Digite o nome do fornecedor:</label><br>
        <input type="numeric" id="fornecedor" name="fornecedor" value=""><br>
        <input type="submit" name="Enviar" value="Cadastrar"><br>
    </form>
</body>
</html>
