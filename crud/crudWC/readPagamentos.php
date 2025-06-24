<?php
require_once "verificarConta.php";
include_once "connection.php";
// $agendamento_id = $_POST["agendamento_id"] ?? "sim";


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ver pagamentos</title>
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

    <h2>Lista de pagamentos</h2>

        <table border="1">
            <thead>
                <tr>
                    <th>Valor pago</th>
                    <th>Forma de pagamento</th>
                    <th>Data do pagamento</th>

                </tr>
            </thead>
            <tbody>
                <?php
                    $stmt = $conexao->prepare("SELECT * FROM pagamentos ORDER BY data_pagamento DESC");
                    $stmt->execute();


                    while ($linha = $stmt->fetch(PDO::FETCH_OBJ)) {
                        echo "<tr>";
                        echo "<td>{$linha->valor_pago}</td>"; 
                        echo "<td>{$linha->forma_pagamento}</td>";
                        echo "<td>{$linha->data_pagamento}</td>";
                        echo "<td>
                            <form action='editarPagamento.php' method='post'>
                                <input type='hidden' name='id' value='{$linha->id}'>
                                <input type='submit' value='Editar'>
                            </form>
                            <form action='deletePagamento.php' method='post' onsubmit=\"return confirm('Tem certeza que deseja excluir?')\">
                                <input type='hidden' name='id' value='{$linha->id}'>
                                <input type='submit' value='Apagar'>
                            </form>
                        </td>";

                        echo "</tr>";
                    }
                ?>
            </tbody>
        </table>
</body>
</html>