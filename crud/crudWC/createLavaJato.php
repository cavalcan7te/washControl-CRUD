
<?php
    session_start();
    include_once "connection.php";

    if (isset($_POST["lavajato"]) && isset($_POST["endereco"])) {
        $lavajato = trim($_POST["lavajato"]);
        $endereco = trim($_POST["endereco"]);

        if (!empty($lavajato) && !empty($endereco)) {
            $stmt = $conexao->prepare("INSERT INTO lava_jatos (nome, endereco) VALUES (:nome, :endereco)");
            $stmt->bindValue(":nome", $lavajato);
            $stmt->bindValue(":endereco", $endereco);
            $stmt->execute();

            $lava_jato_id = $conexao->lastInsertId();

            $_SESSION["lava_jato_id"] = $lava_jato_id;

            header("Location: signUp.php");
            exit();

        } else {
            $_SESSION["campoVazio"] = "Preencha todos os campos.";
            header("Location: cadastroLavaJato.php");
            exit();
        }
    } else {
        header("Location: cadastroLavaJato.php");
        exit();
    }

    
?>
