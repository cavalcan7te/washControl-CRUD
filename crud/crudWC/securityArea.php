<DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página protegida</title>
    <link rel="stylesheet" href="styleSecurityArea.css">
</head>
<body>

    <?php
        session_start();
        if(!$_SESSION["userEmail"]){
            header("Location: index.php");
            exit;
        }
    ?>
    
    <h1>WashControl</h1>
    <div id="menuLateral">
        <a href="securityArea.php">Dashboard</a>
        <a href="agendar.php">Agendamentos</a>
        <a href="pagamentos.php">Pagamentos</a>
        <a href="servicos.php">Serviços</a>
        <a href="clientes.php">Clientes</a>
    </div>




    <form action="logOut.php" method="post">
        <input type="submit" value="Sair">
    </form>

    
</body>
</html>