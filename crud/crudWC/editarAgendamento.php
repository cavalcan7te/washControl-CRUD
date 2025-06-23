<?php
    require_once "verificarConta.php";
    include_once "connection.php";
    $id= $_POST["id"];
    $stmt = $conexao->prepare("SELECT * FROM agendamentos WHERE id = :id AND lava_jato_id = :lava_jato_id");
    $stmt->bindValue(":id", $id);
    $stmt->bindValue(":lava_jato_id", $_SESSION["lava_jato_id"]);
    $stmt->execute();

    $agendamento = $stmt->fetch(PDO::FETCH_ASSOC);

    $nome = $agendamento["nome"] ?? "";
    $telefone = $agendamento["telefone"] ?? "";
    $placa = $agendamento["placa"] ?? "";
    $modelo_carro = $agendamento["modelo_carro"] ?? "";
    $data_agendamento = $agendamento["data_agendamento"] ?? "";
    $observacoes = $agendamento["observacoes"] ?? "";
    $servico = $agendamento["servico"] ?? "";
    $status = $agendamento["status"] ?? "";

    if (isset($_SESSION["erroAtualizar"])) {
        echo $_SESSION["erroAtualizar"];
        unset($_SESSION["erroAtualizar"]);
    }
    if (isset($_SESSION["sucessoAtualizar"])) {
        echo $_SESSION["sucessoAtualizar"];
    }

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

    
   <form action="updateAgendamento.php" method="post">

    <div id="inputEditar">
        <label for="nome">Nome</label>
        <input type="text" name="nome" id="nome" value="<?php echo $nome; ?>">
    </div>

    <div id="inputEditar">
        <label for="telefone">Telefone</label>
        <input type="text" name="telefone" id="telefone" value="<?php echo $telefone; ?>">
    </div>

    <div id="inputEditar">
        <label for="placa">Placa</label>
        <input type="text" name="placa" id="placa" value="<?php echo $placa; ?>">
    </div>

    <div id="inputEditar">
        <label for="modelo_carro">Modelo do carro</label>
        <input type="text" name="modelo_carro" id="modelo_carro" value="<?php echo $modelo_carro; ?>">
    </div>

    <div id="inputEditar">
        <label for="data_agendamento">Data do agendamento</label>
        <input type="date" name="data_agendamento" id="data_agendamento" value="<?php echo $data_agendamento; ?>">
    </div>

    <div id="inputEditar">
        <label for="observacoes">Observações</label>
        <input type="text" name="observacoes" id="observacoes" value="<?php echo $observacoes; ?>">
    </div>

    <div id="inputEditar">
        <label for="servico">Serviço</label>
        <input type="text" name="servico" id="servico" value="<?php echo $servico; ?>">
    </div>

    <div id="inputEditar">
        <label>Status:</label><br>
        <input type="radio" name="status" value="Aguardando" <?php if ($status === 'Aguardando') echo 'checked'; ?>> Aguardando
        <input type="radio" name="status" value="Lavando" <?php if ($status === 'Lavando') echo 'checked'; ?>> Lavando
        <input type="radio" name="status" value="Finalizado" <?php if ($status === 'Finalizado') echo 'checked'; ?>> Finalizado

        <input type="hidden" name="id" value="<?php echo $id; ?>">
    </div>

    <br>

    <button type="submit">Atualizar</button>
</form>
    <form action="readAgendamento.php">
        <input type="submit" value="Cancelar">
    </form>
</body>
</html>