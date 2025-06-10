<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agendamentos</title>
</head>
<body>

    <h2>Lista de Agendamentos</h2>

    <table border="1">
        <thead>
            <tr>
                <th>Nome</th>
                <th>Telefone</th>
                <th>Placa</th>
                <th>Modelo do carro</th>
                <th>Data do agendamento</th>
                <th>Observações</th>
                <th>Serviço</th>
                <th>Status</th>
            </tr>
        </thead>

        <tbody>
            <?php
                require_once "connection.php";

                $stmt = $conexao->prepare("SELECT * FROM agendamentos");
                $stmt->execute();

                while ($linha = $stmt->fetch(PDO::FETCH_OBJ)) {
                    echo "<tr>";
                    echo "<td>{$linha->nome}</td>";
                    echo "<td>{$linha->telefone}</td>";
                    echo "<td>{$linha->placa}</td>";
                    echo "<td>{$linha->modelo}</td>";
                    echo "<td>{$linha->data_agendamento}</td>";
                    echo "<td>{$linha->observacoes}</td>";
                    echo "<td>{$linha->servico}</td>";
                    echo "<td>{$linha->status}</td>";
                    echo "</tr>";
                }
            ?>
        </tbody>
    </table>

    <br>
    <form action="agendar.php" method="post">
        <input type="submit" value="Voltar">
    </form>

</body>
</html>
