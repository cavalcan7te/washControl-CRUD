<?php
    include_once "connection.php";
    require_once "verificarConta.php";


    $valor_pago = $_POST["valor_pago"] ?? "";
    $forma_pagamento = $_POST["forma_pagamento"] ?? "";
    $data_pagamento = $_POST["data_pagamento"] ?? "";
    $stmt = $conexao->prepare("UPDATE pagamentos SET valor_pago = :valor_pago, forma_pagamento = :forma_pagamento, data_pagamento = :data_pagamento WHERE id = :id");
    
    $stmt->bindValue(":valor_pago", $valor_pago);
    $stmt->bindValue(":forma_pagamento", $forma_pagamento);
    $stmt->bindValue(":data_pagamento", $data_pagamento);

?>