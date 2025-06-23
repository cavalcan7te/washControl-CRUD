<?php
require_once "verificarConta.php";
$agendamento_id = $_POST["agendamento_id"] ?? null;




?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagamentos</title>
</head>

<body>
    <h1>WashControl</h1>
    <div id="menuLateral">
        <a href="securityArea.php">Dashboard</a>
        <a href="readAgendamento.php">Agendamentos</a>
        <a href="readPagamentos.php">Pagamentos</a>
        <a href="servicos.php">Serviços</a>
        <a href="clientes.php">Clientes</a>
    </div>
        <?php
            require_once "verificarConta.php";
        ?>
    <p>--------------------------------------------------------------------------------</p>

    <form action="createPagamento.php" method="POST">
        <label>Valor pago: <input type="number" name="valor_pago" required></label><br>

        <label>Forma de pagamento: <input type="text" name="forma_pagamento" required></label><br>

        <label>Data do pagamento: <input type="date" name="data_pagamento" required></label><br>

        <input type="hidden" name="agendamento_id" value="<?php echo $agendamento_id; ?>">


    

        <button type="submit">Registrar</button>
    </form>
    <form action="readPagamentos.php">
        <button type="submit">Cancelar</button>
    </form>
    <form action="logOut.php" method="post">
        <input type="submit" value="Sair">
    </form>
</body>
</html>
