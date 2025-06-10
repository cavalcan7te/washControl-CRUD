<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <link rel="stylesheet" href="styleSignUp.css">
</head>

<body>
    <div id="sectionLeft">
        <div id="containerSectionLeft">
            <div id="textosSL">
                <p id="comeceParagrafo">Comece com o pé direito.</p>
                <p id="cadastreParagrafo">Cadastre-se e transforme sua forma de atender no lava jato.</p>
            </div>
            <div id="containerImgSL">
                <img src="assets/fotoCadastroWashControl.png" id="imagemSectionLeft" height="300px">
            </div>
        </div>
    </div>
    <div id="sectionRight">

      
       <div id="cadastro">
            <h1 id="tituloCadastro">Cadastro</h1>
            <form action="create.php" method="post" id="formSR">
            <div id="mensagemPhp">
                <?php
                session_start();
                if (isset($_SESSION["campoVazio"])){
                    echo $_SESSION["campoVazio"];
                    session_destroy();
                }
                ?>
            </div>

            <div class="campoComLabel">
                <label for="user">Nome de usuário:</label>
                <div class="inputWrapper">
                    <img src="assets/profile.png" alt="Ícone de usuário" class="iconsCadastro">
                    <input placeholder="Nome de usuário" type="text" name="user" id="user" class="campoCadastro loginPadding">
                </div>
            </div>

            <div class="campoComLabel">
                <label for="email">E-mail:</label>
                <div class="inputWrapper">
                    <img src="assets/gmail.webp" alt="Ícone de email" class="iconsCadastro">
                    <input placeholder="Email" type="email" name="email" id="email" class="campoCadastro loginPadding">
                </div>
            </div>

            <div class="campoComLabel">
                <label for="senha">Senha:</label>
                <div class="inputWrapper">
                    <img src="assets/lock.png" alt="Ícone de senha" class="iconsCadastro">
                    <input placeholder="Senha" type="password" name="senha" id="senha" class="campoCadastro loginPadding">
                </div>
            </div>

            <input type="submit" value="Criar" class="campoCadastro" id="criarBotao">
        
        </form>
        
        <div id="botaoHeader">
            <p>Você já faz parte?</p>
            <form action="index.php" id="entreAgoraForm">
                <input type="submit" value= "Entre agora." id="entreAgora">
            </form>
        </div>
       
        </div>
        
    </div>

</body>
</html>