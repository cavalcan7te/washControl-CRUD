<?php
    require_once "verificarConta.php";
    include_once "connection.php";

    $id = $_POST["id"] ?? "";

    if (empty($id)) {
        echo "ID não informado!";
        exit();
    }

    $stmt = $conexao->prepare("DELETE FROM pagamentos WHERE id = :id");
    $stmt->bindValue(":id", $id);
    $stmt->execute();

    header("Location: readPagamentos.php");
    exit();
?>
