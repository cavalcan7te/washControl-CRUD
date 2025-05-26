<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=], initial-scale=1.0">
    <title>Cadastro</title>
    <link rel="stylesheet" href="styleSignUp.css">
</head>
<body>
    
    <div id= "sectionLeft">

        <div id="textoSectionLeft" class="textos">
            <p id="comeceParagrafo" >
                Comece com o pé direito.
            </p>
            <p id="cadastreParagrafo">
                Cadastre-se e transforme sua forma de atender no lava jato.
            </p>
            <div id="containerImgSL">
                 <img src="assets/fotoCadastroWashControl" id="imagemSectionLeft" height="300px">
            </div>
        </div>

    </div>
    <div id="sectionRight">

        <h1>Cadastro</h1>

        <form action="create.php" method="post">

        <!-- <label for="user">Nome de usuário:</label> -->
        <input placeholder="Nome de usuário" type="text" name="user" id="user" class="campoCadastro">
            
        <!-- <label for="email">E-mail:</label> -->
        <input placeholder="Email" type="email" name="email" id="email" class="campoCadastro">

        <!-- <label for="senha">Senha:</label> -->
        <input placeholder="Senha" type="password" name="senha" id="senha" class="campoCadastro">

        <input type="submit" value="Criar">

        </form>  

        


    </div>

</body>
</html>