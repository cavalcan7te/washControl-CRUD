<?php
    include_once "connection.php";

    session_start();

    $email = trim($_POST["email"]);
    $senha = trim($_POST["senha"]);

    if (isset($_POST["email"]) && !empty($email)){

        if (isset($_POST["senha"]) && !empty($senha)){
            $stmt = $conexao->prepare("SELECT * FROM usuarios WHERE email = :email");
            $stmt->bindValue(":email", $email);
            $stmt->execute();
            $userBd = $stmt->fetch(); 
            
            if($userBd && password_verify($senha, $userBd["senha"])){
                $_SESSION["userEmail"] = $userBd["email"];
                header("Location: securityArea.php");
            }else{
                $_SESSION["camposErrados"] = "E-mail ou senha incorretos.";
                header("Location:index.php");
            }
        }else{
            $_SESSION["camposVazios"] = "Preencha todos os campos.";
            header("Location:index.php");
        }
    }else{
        $_SESSION["camposVazios"] = "Preencha todos os campos.";
        header("Location:index.php");
    }

?>