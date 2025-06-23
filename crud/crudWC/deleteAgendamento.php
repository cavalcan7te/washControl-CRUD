<?php
    require_once "verificarConta.php";
    include_once "connection.php";

    $id = $_POST["id"] ?? "";

    if (empty($id)) {
        echo "ID não informado!";
        exit();
    }

    $stmt = $conexao->prepare("DELETE FROM agendamentos WHERE id = :id AND lava_jato_id = :lava_jato_id");
    $stmt->bindValue(":id", $id);
    $stmt->bindValue(":lava_jato_id", $_SESSION["lava_jato_id"]);
    $stmt->execute();

    header("Location: readAgendamento.php");
    exit();
?>
