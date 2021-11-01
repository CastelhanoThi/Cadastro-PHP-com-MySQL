<html>
    <head>
        <title>Minha pagina em HTML e PHP</title>
        <link rel="stylesheet" type="text/css" href="CadastroStyle/StyleCad.css">
    </head>
    <body>
        <!--Topo-->
        <div id="topo">
            <p class="ler">Atibaia-SP</p>
            <p class="send">castelhanothiago@gmail.com</p>
            <p class="tel">(11) 956976159</p>
        </div>
        <!--MENU-->
        <div id="menu">
        <ul>
            <a href="index.html">Home</a>
            <a href="cadastro.php">Cadastro</a>
            <a href="index.html">Sobre</a>
            <a href="index.html">Tutoriais</a>
        </ul>
            
            <p class="info">RLTyon</p>
            <p class="informatica">Hardware e Software</p>
        </div>
        <!--Imagem-->
        <div id="imagem">
            <form name="signs" method="post" action="cadastrando.php">
                Nome :<input type="text" name="nome" size="16" placeholder="Digite seu nome" required="required" maxlength="20"><br>
                Endereço :<input type="text" name="endereco" size="16" placeholder="Digite seu endereço" required="required" maxlength="20"><br>
                Email :<input type="email" name="email" size="16" placeholder="Digite seu email" required="required" maxlength="20"><br>
                Cidade :<input type="text" name="cidade" size="16" placeholder="Digite sua cidade" required="required" maxlength="20"><br>
                Bairro :<input type="text" name="bairro" size="16" placeholder="Digite seu bairro" required="required" maxlength="20"><br>
                CPF :<input type="text" name="cpf" size="16" placeholder="Digite seu cpf" required="required" maxlength="20"><br>
                <p class="Salvar">
                    <input type="submit" value="Cadastrar">
                </p>
            </form>
        </div>
    </body>
</html>