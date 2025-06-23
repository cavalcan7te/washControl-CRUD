<?php
require_once "verificarConta.php";
include_once "connection.php";

if (
    isset($_POST["valor_pago"]) &&
    isset($_POST["forma_pagamento"]) &&
    isset($_POST["data_pagamento"]) &&
    isset($_POST["agendamento_id"])
) {
    $valor_pago = $_POST["valor_pago"];
    $forma_pagamento = $_POST["forma_pagamento"];
    $data_pagamento = $_POST["data_pagamento"];
    $agendamento_id = $_POST["agendamento_id"];

    if (!empty($valor_pago) && !empty($forma_pagamento) && !empty($data_pagamento) && !empty($agendamento_id)) {
        $stmt = $conexao->prepare("INSERT INTO pagamentos (valor_pago, forma_pagamento, data_pagamento, agendamento_id) 
            VALUES (:valor_pago, :forma_pagamento, :data_pagamento, :agendamento_id)");

        $stmt->bindValue(":valor_pago", $valor_pago);
        $stmt->bindValue(":forma_pagamento", $forma_pagamento);
        $stmt->bindValue(":data_pagamento", $data_pagamento);
        $stmt->bindValue(":agendamento_id", $agendamento_id);

        $stmt->execute();

        header("Location: readPagamentos.php");
        exit();
    } else {
        $_SESSION["erro"] = "Preencha todos os campos obrigatórios.";
        header("Location: pagamentos.php");
        exit();
    }
} else {
    header("Location: pagamentos.php");
    exit();
}
