<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastre sua Lava-Jato</title>
    <link rel="stylesheet" href="styleSignUp.css">
</head>

<body>
    <div id="sectionLeft">
        <div id="containerSectionLeft">
            <div id="textosSL">
                <p id="comeceParagrafo">Cadastre seu lava jato.</p>
                <p id="cadastreParagrafo">Cadastre seu lava-jato e transforme sua forma de atender.</p>
            </div>
            <div id="containerImgSL">
                <img src="assets/fotoCadastroWashControl.png" id="imagemSectionLeft" height="300px">
            </div>
        </div>
    </div>
    <div id="sectionRight">

      
       <div id="cadastro">
            <h1 id="tituloCadastro">Cadastre seu lava-jato</h1>

        <form action="createLavaJato.php" method="post" id="formSR">
            <div id="mensagemPhp">
                <?php
                    session_start();
                    if (isset($_SESSION["campoVazio"])){
                        echo $_SESSION["campoVazio"];
                        session_unset();
                    }
                ?>
            </div>

            <div class="campoComLabel">
                <label for="lavajato">Nome da sua lava-jato:</label>
                <div class="inputWrapper">
                    <img src="assets/carIcon.png" class="iconsCadastro">
                    <input placeholder="Ex.: Lava-jato dois irmâos" type="text" name="lavajato" id="lavajato" class="campoCadastro loginPadding">
                </div>

            <label for="endereco">Endereço:</label>

                <div class="inputWrapper">
                    <img src="assets/carIcon.png" class="iconsCadastro">
                    <input placeholder="Ex.: Russas (CE)" type="text" name="endereco" id="endereco" class="campoCadastro loginPadding">
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