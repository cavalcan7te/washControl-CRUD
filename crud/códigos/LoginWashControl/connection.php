<?php
    $servidor = "localhost";
    $usuario = "root";
    $senha = "";
    try {
        $conexao = new PDO("mysql:host=$servidor;dbname=washcontrol;charset=utf8mb4", $usuario,$senha);
        $conexao->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

    }catch(PDOException $erro){
        echo "Há algo de errado." . $erro ->getMessage();
    }

?> 