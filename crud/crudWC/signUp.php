<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=], initial-scale=1.0">
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
                <div class="camposEicons">
                    <img src="assets/profile.png" alt="" class="iconsCadastro">
                    <input placeholder="Nome de usuário" type="text" name="user" id="user" class="campoCadastro"   >
                </div>
                <div class="camposEicons">
                    <img src="assets/gmail.webp" alt="" class="iconsCadastro">
                    <input placeholder="Email" type="email" name="email" id="email" class="campoCadastro" >
                </div>
                <div class="camposEicons">
                    <img src="assets/lock.png" alt="" class="iconsCadastro">
                    <input placeholder="Senha" type="password" name="senha" id="senha" class="campoCadastro">
                </div>
                <input type="submit" value="Criar" class="campoCadastro" id="criarBotao">
            </form>
        </div>
           

        </form>  
        </div>


        


    </div>

</body>
</html>