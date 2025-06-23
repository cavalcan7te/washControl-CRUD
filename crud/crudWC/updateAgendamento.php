<?php
    include_once "connection.php";

    $id = $_POST["id"] ?? "";
    $nome = $_POST["nome"] ?? "";
    $telefone = $_POST["telefone"] ?? "";
    $placa = $_POST["placa"] ?? "";
    $modelo_carro = $_POST["modelo_carro"] ?? "";
    $data_agendamento = $_POST["data_agendamento"] ?? "";
    $observacoes = $_POST["observacoes"] ?? "";
    $servico = $_POST["servico"] ?? "";
    $status = $_POST["status"] ?? "";

    $stmt = $conexao->prepare("UPDATE agendamentos SET nome = :nome, telefone = :telefone, placa = :placa, modelo_carro = :modelo_carro, data_agendamento = :data_agendamento, observacoes = :observacoes, servico = :servico, status = :status WHERE id = :id");
    
    $stmt->bindValue(":nome", $nome);
    $stmt->bindValue(":telefone", $telefone);
    $stmt->bindValue(":placa", $placa);
    $stmt->bindValue(":modelo_carro", $modelo_carro);
    $stmt->bindValue(":data_agendamento", $data_agendamento);
    $stmt->bindValue(":observacoes", $observacoes);
    $stmt->bindValue(":servico", $servico);
    $stmt->bindValue(":status", $status);
    $stmt->bindValue(":id", $id);
    
    if ($stmt->execute()) {
        $_SESSION["sucessoAtualizar"] = "Agendamento atualizado com sucesso!";
        header("Location: readAgendamento.php");
        exit();
    } else {
        $_SESSION["erroAtualizar"] = "Erro ao atualizar agendamento.";
        header("Location: readAgendamento.php");
        exit();
    }

?>