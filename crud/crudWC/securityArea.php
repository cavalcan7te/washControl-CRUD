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
        require_once "verificarConta.php";
    ?>
    
    <h1>WashControl</h1>
    <div id="menuLateral">
        <a href="securityArea.php" class="tagAmenu tagBorder">Dashboard</a>
        <a href="readAgendamento.php" class="tagAmenu tagBorder">Agendamentos</a>
        <a href="readPagamentos.php" class="tagAmenu tagBorder">Pagamentos</a>
        <div id="sairDiv">
            <a href="logOut.php" id="sairMenu">
                Sair
                <img src="assets/sair.png" alt="" id="sairImg">
            </a>

        </div>
        

    </div>




    
</body>
</html>