<?php
include_once "connection.php";
$email = $_POST["email"];
$senha = $_POST["senha"];
if (isset($_POST["email"]) && !empty($email)){
    if (isset($_POST["senha"]) && !empty($senha)){
        $senha = trim($senha);
        $stmt = $conexao->prepare("INSERT INTO usuarios (email, senha) VALUES (:email, :senha)");
        $stmt->bindValue(":email", $email);
        $stmt->bindValue(":senha", $senha);
        $stmt->execute();

    }else{
        echo "Preencha todos os campos.";
    }


}
















?>