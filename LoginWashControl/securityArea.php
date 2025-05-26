<DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página protegida</title>
    <link rel="stylesheet" href="styleSignUp.css">
</head>
<body>
    <?php
    session_start();
    if(!$_SESSION["userEmail"]){
        header("Location: loginFormulario.php");
        exit;
    }

?>
    <h1>Página protegida!</h1>
    <form action="logOut.php" method="post">
        <input type="submit" value="Voltar">
    </form>
</body>
</html>