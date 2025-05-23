<?php
$servidor = "localhost";
$usuario = "root";
$senha = "";
try {
    $conexao = new PDO("mysql:host=$servidor;dbname=lavacar;charset=utf8mb4", $usuario,$senha);
    $conexao->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    echo "Cheguei aqui!";

}catch(PDOException $erro){
    echo "Há algo de errado." . $erro ->getMessage();
}

?> 