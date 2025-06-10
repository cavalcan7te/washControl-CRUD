<?php
session_start();
include_once "connection.php";

if (
    isset($_POST["nome"]) &&
    isset($_POST["telefone"]) &&
    isset($_POST["placa"]) &&
    isset($_POST["modelo_carro"]) &&
    isset($_POST["data_agendamento"]) &&
    isset($_POST["observacoes"]) &&
    isset($_POST["servico"]) &&
    isset($_POST["status"])
) {
    $nome = trim($_POST["nome"]);
    $telefone = trim($_POST["telefone"]);
    $placa = trim($_POST["placa"]);
    $modelo_carro = trim($_POST["modelo_carro"]);
    $data_agendamento = trim($_POST["data_agendamento"]);
    $observacoes = trim($_POST["observacoes"]);
    $servico = trim($_POST["servico"]);
    $status = trim($_POST["status"]);

    if (!empty($nome) && !empty($telefone) && !empty($placa)) {
        $stmt = $conexao->prepare("INSERT INTO agendamentos 
            (nome, telefone, placa, modelo_carro, data_agendamento, observacoes, servico, status) 
            VALUES 
            (:nome, :telefone, :placa, :modelo_carro, :data_agendamento, :observacoes, :servico, :status)");

        $stmt->bindValue(":nome", $nome);
        $stmt->bindValue(":telefone", $telefone);
        $stmt->bindValue(":placa", $placa);
        $stmt->bindValue(":modelo_carro", $modelo_carro);
        $stmt->bindValue(":data_agendamento", $data_agendamento);
        $stmt->bindValue(":observacoes", $observacoes);
        $stmt->bindValue(":servico", $servico);
        $stmt->bindValue(":status", $status);

        $stmt->execute();

        header("Location: readAgendamento.php");
        exit();
    } else {
        $_SESSION["erro"] = "Preencha os campos obrigatórios.";
        header("Location: agendar.php");
        exit();
    }
} else {
    header("Location: agendar.php");
    exit();
}
?>
