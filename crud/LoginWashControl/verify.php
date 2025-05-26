<?php
    include_once "connection.php";
    session_start();
    $user = trim($_POST["user"]);
    $email =trim($_POST["email"]);
    $senha = trim($_POST["senha"]);
    if (isset($_POST["email"]) && empty($email)){
        if (isset($_POST["senha"]) && empty($senha)){
            if (isset($_POST["user"]) && empty($user)){
                echo "Preencha todos os campos.";
            }else{
            }
        }
    }
    $stmt = $conexao->prepare("SELECT * FROM usuarios WHERE email = :email");
    $stmt->bindValue(":email", $email);
    $stmt->execute();
    $userBd = $stmt->fetch();
    if($userBd && $user === $userBd["usuario"] && password_verify($senha, $userBd["senha"])){
        $_SESSION["userEmail"] = $userBd["email"];
        header("Location: securityArea.php");
        exit;
    }else{
        echo "E-mail ou senha incorretos.";
    }










?>