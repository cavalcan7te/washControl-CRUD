<?php
    require_once "verificarConta.php";
    include_once "connection.php";
    $lava_jato_id = $_SESSION["lava_jato_id"];
?>

    <!DOCTYPE html>
    <html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Agendamentos</title>
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
        
        <h2>Lista de Agendamentos</h2>

        <div>
            <p>
            <?php
                if (isset($_SESSION["erroAtualizar"])) {
                    echo $_SESSION["erroAtualizar"];
                    unset($_SESSION["erroAtualizar"]);
                }
                if (isset($_SESSION["sucessoAtualizar"])) {
                    echo $_SESSION["sucessoAtualizar"];
                }

            ?>
            </p>
            
        </div>

               

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
                    $stmt = $conexao->prepare("SELECT * FROM agendamentos WHERE lava_jato_id = :lava_jato_id ORDER BY data_agendamento DESC");
                    $stmt->bindValue(":lava_jato_id", $lava_jato_id, PDO::PARAM_INT);
                    $stmt->execute();

                    while ($linha = $stmt->fetch(PDO::FETCH_OBJ)) {
                        echo "<tr>";
                        echo "<td>{$linha->nome}</td>"; 
                        echo "<td>{$linha->telefone}</td>";
                        echo "<td>{$linha->placa}</td>";
                        echo "<td>{$linha->modelo_carro}</td>";
                        echo "<td>{$linha->data_agendamento}</td>";
                        echo "<td>{$linha->observacoes}</td>";
                        echo "<td>{$linha->servico}</td>";
                        echo "<td>{$linha->status}</td>";
                        echo "<td>
                            <form action='editarAgendamento.php' method='post'>
                                <input type='hidden' name='id' value='{$linha->id}'>
                                <input type='submit' value='Editar'>
                            </form>
                            <form action='deleteAgendamento.php' method='post' onsubmit=\"return confirm('Tem certeza que deseja excluir?')\">
                                <input type='hidden' name='id' value='{$linha->id}'>
                                <input type='submit' value='Apagar'>
                            </form>
                            <form action='pagamentos.php' method='post'>
                                <input type='hidden' name='agendamento_id' value='{$linha->id}'>
                                <input type='submit' value='Registrar pagamento'>
                            </form>

                        </td>";

                        echo "</tr>";
                        
                    }
                ?>
            </tbody>
        </table>

        <br>
        <form action="agendar.php" method="post">
            <input type="submit" value="Agendar">
        </form>
        <form action="logOut.php" method="post">
            <input type="submit" value="Sair">
        </form>

</body>
</html>
