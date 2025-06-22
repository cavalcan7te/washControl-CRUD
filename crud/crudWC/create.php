<?php
session_start();
include_once "connection.php";

if (isset($_POST["user"]) && isset($_POST["email"]) && isset($_POST["senha"])) {
    $user = trim($_POST["user"]);
    $email = trim($_POST["email"]);
    $senha = password_hash(trim($_POST["senha"]), PASSWORD_DEFAULT);
    $lava_jato_id = $_SESSION["lava_jato_id"];

    if (!empty($user) && !empty($email) && !empty($senha) && !empty($lava_jato_id)) {
        $stmt = $conexao->prepare("INSERT INTO usuarios (usuario, email, senha, lava_jato_id) 
                                   VALUES (:usuario, :email, :senha, :lava_jato_id)");

        $stmt->bindValue(":usuario", $user);
        $stmt->bindValue(":email", $email);
        $stmt->bindValue(":senha", $senha);
        $stmt->bindValue(":lava_jato_id", $lava_jato_id);

        $stmt->execute();
        $_SESSION["userEmail"] = $email;
        $_SESSION["usuario_id"] = $conexao->lastInsertId();

        header("Location: securityArea.php");
        exit();
    } else {
        $_SESSION["campoVazio"] = "Preencha todos os campos.";
        header("Location: signUp.php");
        exit();
    }
} else {
    header("Location: signUp.php");
    exit();
}
?>
