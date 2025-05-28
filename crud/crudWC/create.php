<?php
    include_once "connection.php";
    
    if (isset($_POST["user"]) && isset($_POST["email"]) && isset($_POST["senha"])) {
        $user = trim($_POST["user"]);
        $email = trim($_POST["email"]);
        $senha = password_hash(trim($_POST["senha"]), PASSWORD_DEFAULT);

        if (!empty($email) && !empty($senha) && !empty($user)) {
            $stmt = $conexao->prepare("INSERT INTO usuarios (email, senha, usuario) VALUES (:email, :senha, :usuario)");
            $stmt->bindValue(":email", $email);
            $stmt->bindValue(":senha", $senha);
            $stmt->bindValue(":usuario", $user);
            $stmt->execute();

            header("Location: index.php");
            exit();
        } else {
            echo "Preencha todos os campos.";
        }
    } else {
        header("Location: signUp.php");
        exit();
    }
?>