<?php
    require_once "verificarConta.php";
    include_once "connection.php";
    $id = $_POST["id"];
    $stmt = $conexao->prepare("SELECT * FROM pagamentos WHERE id = :id ORDER BY data_pagamento DESC");
    $stmt->bindValue(":id", $id, PDO::PARAM_INT);
    $stmt->execute();

    $pagamento = $stmt->fetch(PDO::FETCH_ASSOC);

    $valor_pago = $pagamento["valor_pago"] ?? "";
    $forma_pagamento = $pagamento["forma_pagamento"] ?? "";
    $data_pagamento = $pagamento["data_pagamento"] ?? "";
    $id = $pagamento["id"] ?? "";
    

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar</title>
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

    
   <form action="updatePagamento.php" method="post">

    <div id="inputEditar">
        <label for="valor_pago">Valor do pagamento</label>
        <input type="text" name="valor_pago" id="valor_pago" value="<?php echo $valor_pago; ?>">
    </div>

    <div id="inputEditar">
        <label for="forma_pagamento">Forma de pagamento</label>
        <input type="text" name="forma_pagamento" id="forma_pagamento" value="<?php echo $forma_pagamento; ?>">
    </div>

    <div id="inputEditar">
        <label for="data_pagamento">Data do pagamento</label>
        <input type="text" name="data_pagamento" id="data_pagamento" value="<?php echo $data_pagamento; ?>">
    </div>

    <div>
        <input type="hidden" name="id" value="<?php echo $id; ?>">
    </div>

    <br>

    <button type="submit">Atualizar</button>
</form>
    <form action="readPagamentos.php">
        <input type="submit" value="Cancelar">
    </form>
</body>
</html>