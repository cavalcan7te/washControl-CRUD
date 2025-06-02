<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <link rel="stylesheet" href="styleLoginFormulario.css">
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans&display=swap" rel="stylesheet">
</head>
<body>
    <div id="sectionLeft">
        <div id="containerSectionLeft">
            <div id="textosSL">
                <p id="bemVindoP">Bem-vindo de volta!</p>
                <p id="tudoP">Tudo o que você precisa para um dia de trabalho mais organizado.</p>
            </div>
            <div id="containerImgSL">
                <img src="assets/fotoCadastroWashControl.png" id="imagemSectionLeft" height="300px">
            </div>
        </div>
    </div>

    <div id="sectionRight">  
        <div id="login">
            <h1 id="tituloLogin">Login</h1>
            <div id="mensagemPhp">
                <?php
                    session_start();
                    if (isset($_SESSION["camposVazios"])){
                        echo $_SESSION["camposVazios"];
                        session_destroy();
                    } 
                
                    if (isset($_SESSION["camposErrados"])){
                        echo $_SESSION["camposErrados"];
                        session_destroy();
                    }
                ?>
            </div>
            <form action="verify.php" method="post" id="formSR">
                <div class="camposEicons">
                    <img src="assets/gmail.webp" alt="Ícone de email" class="iconsLogin">
                    <input placeholder="Email" type="email" name="email" id="email" class="campoLogin loginPadding">
                </div>
                <div class="camposEicons">
                    <img src="assets/lock.png" alt="Ícone de senha" class="iconsLogin">
                    <input placeholder="Senha" type="password" name="senha" id="senha" class="campoLogin loginPadding">
                </div>
                <input type="submit" value="Entrar" class="campoLogin" id="entrarBotao">

            </form>
        </div>
    </div>

</body>
</html>
