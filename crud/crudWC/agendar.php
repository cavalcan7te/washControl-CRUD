<!DOCTYPE html>
<html lang="en">
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
        <?php
            require_once "verificarConta.php";
        ?>
    <p>--------------------------------------------------------------------------------</p>

    <form action="createAgendamento.php" method="POST">
        <label>Nome: <input type="text" name="nome" required></label><br>
        <label>Telefone: <input type="text" name="telefone" required></label><br>
        <label>Placa: <input type="text" name="placa" required></label><br>
        <label>Modelo do carro: <input type="text" name="modelo_carro" required></label><br>
        <label>Data do agendamento: <input type="date" name="data_agendamento" required></label><br>
        <label>Observações: <input type="text" name="observacoes"></label><br>
        <label>Serviço: <input type="text" name="servico" required></label><br>
        
        <label>Status:</label>
        <input type="radio" name="status" value="Aguardando" required> Aguardando
        <input type="radio" name="status" value="Lavando"> Lavando
        <input type="radio" name="status" value="Finalizado"> Finalizado
        <br><br>

        <button type="submit">Agendar</button>
    </form>
    <form action="readAgendamento.php">
        <button type="submit">Cancelar</button>
    </form>
    <form action="logOut.php" method="post">
        <input type="submit" value="Sair">
    </form>
</body>
</html>
