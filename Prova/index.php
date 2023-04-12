<?php
    if ($_SERVER["REQUEST_METHOD"]=="POST"){
        session_start();
        if ($_POST['username']=='fatec' and $_POST['password']=='araras'){
            $_SESSION['loggedin']=TRUE;

            $_SESSION['username']='Pablo';
            header("location: start.php");
        } else {
            $_SESSION['loggedin']=FALSE;
        }
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
        form {
            margin: 50px auto;
            width: 300px;
            border: 2px solid #ccc;
            padding: 20px;
            text-align: center;
        }
        input[type="text"], input[type="password"] {
            width: 100%;
            padding: 12px 20px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid #ccc;
            box-sizing: border-box;
        }
        input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            padding: 14px 20px;
            margin: 8px 0;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background-color: #45a049;
        }
        label {
            display: inline-block;
            width: 100px;
            text-align: left;
        }
    </style>
</head>
<body>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <label for="username">Nome: </label><br>
        <input type="text" id="username" name="username"><br>
        <label for="password">Senha: </label><br>
        <input type="password" id="password" name="password"><br><br>
        <input type="submit" name="Enviar">
    </form>
</body>
</html>